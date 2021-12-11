<?php
$form_description = get_field('form_description');
$form_background_image = get_field('form_background_image');
$form_subtitle = get_field('form_subtitle');
$form_left_image = get_field('form_left_image');
$form_text = get_field('form_text');
$form_right_image = get_field('form_right_image');
$form = get_field('form');
?>

<section class="form" style="background-image: url(<?= $form_background_image['url'] ?>)">

    <div class="container">
        <div class="form__block">
          <?php if (!empty($form_subtitle)) : ?>
              <div class="form__block-subtitle"> <?= $form_subtitle ?> </div>
          <?php endif; ?>
          <?php if (!empty($form_description)) : ?>
              <div class="form__block-description"> <?= $form_description ?> </div>
          <?php endif; ?>
        </div>

    </div>

    <div class="form__block-center">
      <?php if (!empty($form_left_image)) : ?>
          <div class="form__block-center-left-image">
              <img src="<?= $form_left_image['url'] ?>" alt="">
          </div>
      <?php endif; ?>

      <?php if (!empty($form_text)) : ?>
          <div class="form__block-center-text"> <?= $form_text ?> </div>
      <?php endif; ?>

      <?php if (!empty($form_right_image)) : ?>
          <div class="form__block-center-right-image">
              <img src="<?= $form_right_image['url'] ?>" alt="">
			  
          </div>
      <?php endif; ?>
    </div>

    <div class="container">
      <?php if (!empty($form)) : ?>
          <div class="form__block-form"> <?= $form ?> </div>
      <?php endif; ?>
    </div>


</section>
