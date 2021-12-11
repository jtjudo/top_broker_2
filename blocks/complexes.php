<?php
$complexes_title = get_field('complexes_title');
$complexes_block = get_field('complexes_block');
$complexes_background_image = get_field('complexes_background_image');
$hero_subtitle = get_field('hero_subtitle');
?>

<section class="complexes" style="background-image: url(<?= $complexes_background_image['url'] ?? '' ?>)">
    <div class="container">
        <div class="complexes__block">
			          <?php if (!empty($hero_subtitle)) : ?>
              <h4 class="hero__block-subtitle"><?= $hero_subtitle ?></h4>
          <?php endif; ?>
          <?php if ($complexes_title) : ?>
              <div class="complexes__block-title"> <?= $complexes_title ?> </div>
          <?php endif; ?>

          <?php if ($complexes_block) : ?>
              <div class="search-complexes">
                  <div class="search-complexes-wrapper">
                      <input class="search-complexes-input" type="text" placeholder="Введите название ЖК или район">
                      <div class="search-complexes-btn"></div>
                  </div>
              </div>
              <div class="complexes__block-wrapper"></div>
          <?php endif; ?>
        </div>
    </div>
</section>
