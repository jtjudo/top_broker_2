<?php
get_header();
$id = get_the_ID();
$description = get_field('description', $id);
$images_description = get_field('images_description', $id);
?>
<div id="content">
  <?php if (!empty($description)) : ?>
      <div class="complexes-description-modal" id="complexes-description">
        <?php if (!empty($images_description)) : ?>
            <div class="swiper-container swiper-images">
                <div class="swiper-wrapper">
                  <?php foreach ($images_description as $image) : ?>
                      <div class="swiper-slide">
                          <img loading="lazy" src="<?= $image['url'] ?>" alt="">
                      </div>
                  <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        <?php endif; ?>
          <div class="complexes-description-modal-content">
            <?= $description ?>
          </div>

      </div>
  <?php endif; ?>
	<div class="buttons-row">
		<button class="layout-form-btn btn back">Назад</button>
		<button class="layout-form-btn btn" data-fancybox data-src="#layout-form">Выбрать планировку</button>
	</div>
    
    <div class="layout-form-modal" id="layout-form"
         style="display:none;max-width:1140px;">
      <?php echo do_shortcode('[contact-form-7 id="183" title="form-modal"]'); ?>
    </div>
    <div class="dont-visible-div"></div>
</div>



<?php get_footer(); ?>

<script>
		
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper(".swiper-images", {
		loop: true,
        slidesPerView: 'auto',
		centeredSlides: true,
        spaceBetween: 100,
   
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
		
    });
	
</script>
