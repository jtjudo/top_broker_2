<?php foreach ($complexes_block as $key => $block) : ?>
  <?php
  $complexes_background_image_item = get_field('complexes_background_image_item', $block->ID);
  $name_group = get_field('name_group', $block->ID);
  $region = get_field('region', $block->ID);
  $price = get_field('price', $block->ID);
  $year_of_completion = get_field('year_of_completion', $block->ID);
  $description = get_field('description', $block->ID);
  $images_description = get_field('images_description', $block->ID);
  $url = get_the_permalink($block->ID);
  ?>
    <div class="complexes__block-wrapper-item"
         style="background-image: url(<?= $complexes_background_image_item['url'] ?>)">
        <div class="item-top">
          <?php if (!empty($name_group)) : ?>
              <div class="complexes__block-wrapper-name_group"> <?= $name_group ?> </div>
          <?php endif; ?>
          <?php if (!empty($block->post_title)) : ?>
              <div class="complexes__block-wrapper-title"> <?php echo $block->post_title ?> </div>
          <?php endif; ?>
        </div>

        <div class="item-bottom">
          <?php if (!empty($region)) : ?>
              <div class="complexes__block-wrapper-region"> <?= $region ?> </div>
          <?php endif; ?>
          <?php if (!empty($year_of_completion)) : ?>
              <div class="complexes__block-wrapper-year"> <?= $year_of_completion ?> </div>
          <?php endif; ?>
          <?php if (!empty($price)) : ?>
              <div class="complexes__block-wrapper-price"> <?= $price ?> </div>
          <?php endif; ?>
        </div>
        <div class="complexes__block-btn btn" data-fancybox data-type="iframe" data-src="<?=$url?>" data-filter="#content" href="javascript:;"> Подробнее о комплексе </div>
    </div>
<?php endforeach; ?>

<?php
$current_page = intval($page_num);
?>

<div class="complexes__pagination">
    <div class="complexes__pagination-arrow-left">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="blue_copy"
             style="enable-background:new 0 0 100 100;" version="1.1" viewBox="0 0 100 100" xml:space="preserve"><g
                    id="Layer_8_copy_4_2_">
                <path d="M70.787,27.267v8.294c0,0.571-0.305,1.1-0.8,1.385L49.776,48.615c-1.066,0.616-1.066,2.155,0,2.771l20.212,11.669   c0.495,0.286,0.8,0.814,0.8,1.385v8.294c0,1.231-1.333,2.001-2.399,1.385L29.013,51.385c-1.066-0.616-1.066-2.155,0-2.771   l39.375-22.733C69.454,25.266,70.787,26.035,70.787,27.267z"/>
                <path d="M69.987,63.055l-2.376-1.372c-0.013,0.043-0.023,0.09-0.032,0.136l0.409,0.236c0.495,0.286,0.8,0.814,0.8,1.385v8.294   c0,1.008-0.894,1.693-1.803,1.575l1.404,0.81c1.066,0.616,2.399-0.154,2.399-1.385V64.44C70.787,63.868,70.482,63.34,69.987,63.055   z"/>
                <path d="M49.776,48.615l20.212-11.669c0.495-0.286,0.8-0.814,0.8-1.385v-8.294c0-1.115-1.092-1.84-2.091-1.512   c0.054,0.16,0.091,0.328,0.091,0.512v8.294c0,0.571-0.305,1.1-0.8,1.385L47.776,47.615c-0.078,0.052-0.745,0.516-0.8,1.385   c-0.057,0.911,0.609,1.467,0.673,1.518c0.639,0.443,1.277,0.885,1.916,1.328c-0.032-0.112-0.07-0.312,0.019-0.51   c0.011-0.025,0.024-0.049,0.037-0.07C48.725,50.593,48.768,49.196,49.776,48.615z"/>
                <path d="M70.787,27.267v8.294c0,0.571-0.305,1.1-0.8,1.385L49.776,48.615   c-1.066,0.616-1.066,2.155,0,2.771l20.212,11.669c0.495,0.286,0.8,0.814,0.8,1.385v8.294c0,1.231-1.333,2.001-2.399,1.385   L29.013,51.385c-1.066-0.616-1.066-2.155,0-2.771l39.375-22.733C69.454,25.266,70.787,26.035,70.787,27.267z"
                      style="fill:none;stroke:#000000;stroke-miterlimit:10;"/>
            </g></svg>
    </div>
    <div class="complexes__pagination-pages">
      <?php for ($i = 1; $i <= $max_count_page; $i++) : ?>
          <div class="pages-number <?php if ($i === $current_page) : ?>active-page<?php endif; ?>">
            <?= $i ?>
          </div>
      <?php endfor; ?>
    </div>
    <div class="complexes__pagination-arrow-right">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="blue_copy"
             style="enable-background:new 0 0 100 100;" version="1.1" viewBox="0 0 100 100" xml:space="preserve"><g
                    id="Layer_8_copy_4_3_">
                <path d="M28.213,27.267v8.294c0,0.571,0.305,1.1,0.8,1.385l20.212,11.669c1.066,0.616,1.066,2.155,0,2.771L29.013,63.055   c-0.495,0.286-0.8,0.814-0.8,1.385v8.294c0,1.231,1.333,2.001,2.399,1.385l39.375-22.733c1.066-0.616,1.066-2.155,0-2.771   L30.612,25.881C29.546,25.266,28.213,26.035,28.213,27.267z"/>
                <path d="M69.987,48.615L30.612,25.881c-0.193-0.112-0.395-0.164-0.597-0.19l37.972,21.923c1.066,0.616,1.066,2.155,0,2.771   L28.612,73.119c-0.1,0.058-0.205,0.092-0.308,0.126c0.308,0.914,1.401,1.398,2.308,0.874l39.375-22.733   C71.054,50.77,71.054,49.23,69.987,48.615z"/>
                <path d="M28.213,27.267v8.294c0,0.571,0.305,1.1,0.8,1.385l20.212,11.669   c1.066,0.616,1.066,2.155,0,2.771L29.013,63.055c-0.495,0.286-0.8,0.814-0.8,1.385v8.294c0,1.231,1.333,2.001,2.399,1.385   l39.375-22.733c1.066-0.616,1.066-2.155,0-2.771L30.612,25.881C29.546,25.266,28.213,26.035,28.213,27.267z"
                      style="fill:none;stroke:#000000;stroke-miterlimit:10;"/>
            </g></svg>
    </div>
</div>


