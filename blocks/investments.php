<?php
$investments_title = get_field('investments_title');
$investments_subtitle = get_field('investments_subtitle');
$investments_text = get_field('investments_text');
$investments_text_test = get_field('investments_text_test');
$investments_image = get_field('investments_image');
?>

<section class="investments" style="background-image: url(<?= $investments_image['url']?>)">
    <div class="container">
        <div class="investments__block">
          <?php if (!empty($investments_title)) : ?>
              <h1 class="investments__block-title"><?= $investments_title ?></h1>
          <?php endif; ?>
          <?php if (!empty($investments_subtitle)) : ?>
              <div class="investments__block-subtitle"><?= $investments_subtitle ?></div>
          <?php endif; ?>
          <?php if (!empty($investments_text)) : ?>
              <div class="investments__block-text"><?= $investments_text ?></div>
          <?php endif; ?>
          <?php if (!empty($investments_text_test)) : ?>
              <div class="investments__block-text-test"><?= $investments_text_test ?></div>
			<a class="investments__block-btn btn" data-fancybox data-src="#quiz-content" href="javascript:;">
	Выбрать
</a>
          <?php endif; ?>
        </div>
    </div>
</section>
