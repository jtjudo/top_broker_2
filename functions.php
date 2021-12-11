<?php
function mypilon_scripts_styles()
{
  wp_register_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.css', array(), '1.2', 'screen');
  wp_register_style('swiper_css', get_template_directory_uri() . '/assets/css/swiper.css', array(), '1.2', 'screen');
  wp_register_style('select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.2', 'screen');
  wp_register_style('my_style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.2', 'screen');

  wp_enqueue_style('swiper_css');
  wp_enqueue_style('select');
  wp_enqueue_style('my_style');
  wp_enqueue_style('fancybox');

  wp_enqueue_script('jquery_js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0', true);
  wp_enqueue_script('mask', get_template_directory_uri() . '/assets/js/jquery.mask.js', array(), '1.0', true);
  wp_enqueue_script('fancybox_js', get_template_directory_uri() . '/assets/js/fancybox.js', array(), '1.0', true);
  wp_enqueue_script('swiper_js', get_template_directory_uri() . '/assets/js/swiper.js', array(), '1.0', true);
  wp_enqueue_script('selectjs', get_template_directory_uri() . '/assets/js/nice-select.min.js', array(), '1.0', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
  wp_localize_script('main', 'ajax', [
    'ajaxurl' => admin_url('admin-ajax.php'),
  ]);
}

add_action('wp_enqueue_scripts', 'mypilon_scripts_styles', 1);

if (function_exists('add_theme_support')) {
  add_theme_support('menus');
}

add_action('after_setup_theme', function () {


  register_nav_menus([
    'main_menu' => 'Меню',
  ]);

  add_theme_support(
    'custom-logo',
    array(
      'height' => 500,
      'width' => 500,
      'flex-height' => true,
    )
  );
});

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title' => 'Theme General Settings',
    'menu_title' => 'Глобальные настройки',
    'menu_slug' => 'theme-general-settings',
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}

add_filter('show_admin_bar', '__return_false');


add_action('init', 'register_post_types');

function register_post_types()
{
  register_post_type('complexes', [
    'label' => null,
    'labels' => [
      'name' => 'Жилые комплексы', // основное название для типа записи
      'singular_name' => 'Жилой комплекс', // название для одной записи этого типа
      'add_new' => 'Добавить Жилой комплекс', // для добавления новой записи
      'add_new_item' => 'Добавление Жилой комплекс', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item' => 'Редактирование Жилой комплекс', // для редактирования типа записи
      'new_item' => 'Новый Жилой комплекс', // текст новой записи
      'view_item' => 'Смотреть Жилой комплекс', // для просмотра записи этого типа.
      'search_items' => 'Искать Жилой комплекс', // для поиска по этим типам записи
      'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon' => '', // для родителей (у древовидных типов)
      'menu_name' => 'Жилые комплексы', // название меню
    ],
    'description' => '',
    'public' => true,
    'show_in_menu' => null,
    'show_in_rest' => true,
    'rest_base' => null,
    'menu_position' => 6,
    'menu_icon' => null,
    'hierarchical' => false,
    'supports' => ['title', 'editor', 'thumbnail', 'author', 'excerpt', 'revisions'],
    'taxonomies' => [],
    'has_archive' => false,
    'rewrite' => true,
    'query_var' => true,
  ]);
}


add_action('wp_ajax_complexAjax', 'complexAjax');
add_action('wp_ajax_nopriv_complexAjax', 'complexAjax');

function complexAjax()
{
  $posts_per_page = 9;
  $s = $_POST['s'];

  $page_num = filter_var($_POST['page_num'], FILTER_SANITIZE_NUMBER_INT) ?? 1;

  $all_args = [
    'post_type' => 'complexes',
    'posts_per_page' => -1
  ];

  $args = [
    'post_type' => 'complexes',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page' => $posts_per_page,
    'paged' => $page_num,
    's' => $s,
  ];

  $all_complexes_block = get_posts($all_args);

  $count_posts = count($all_complexes_block);

  $max_count_page = ceil($count_posts / $posts_per_page);

  $complexes_block = get_posts($args);



  if (strlen($s) > 2) {
    $args_all_s = [
      'post_type' => 'complexes',
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'posts_per_page' => -1,
      'paged' => $page_num,
      's' => $s,
    ];

    $args_s = [
      'post_type' => 'complexes',
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'posts_per_page' => $posts_per_page,
      'paged' => $page_num,
      's' => $s,
    ];

    $all_complexes_block = get_posts($args_all_s);
    $count_posts = count($all_complexes_block);
    $max_count_page = ceil($count_posts / $posts_per_page);
    $complexes_block = get_posts($args_s);
  }


  include 'ajax/complex_ajax.php';

  wp_die();
}
