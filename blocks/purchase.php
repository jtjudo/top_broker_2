<?php
$purchase_background_image = get_field('purchase_background_image');
$purchase_title = get_field('purchase_title');
$purchase_image = get_field('purchase_image');
$purchase_text = get_field('purchase_text');
$purchase_red_text = get_field('purchase_red_text');
?>

<section class="purchase" style="background-image: url(<?= $purchase_background_image['url'] ?? '' ?>)">
    <div class="container">
        <div class="purchase__block">
          <?php if (!empty($purchase_title)) : ?>
              <div class="purchase__block-title"> <?= $purchase_title ?> </div>
          <?php endif; ?>
          <?php if (!empty($purchase_image)) : ?>
              <div class="purchase__block-image">
                  <img src="<?= $purchase_image['url'] ?>" alt="">
              </div>
          <?php endif; ?>
          <?php if (!empty($purchase_text)) : ?>
              <div class="purchase__block-text"> <?= $purchase_text ?> </div>
          <?php endif; ?>
          <?php if (!empty($purchase_red_text)) : ?>
              <div class="purchase__block-red-text"> <?= $purchase_red_text ?> </div>
          <?php endif; ?>
        </div>
    </div>
</section>
