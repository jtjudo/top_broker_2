<?php
$advantage_title = get_field('advantage_title');
$advantage_background_image = get_field('advantage_background_image');
$advantage_blocks = get_field('advantage_blocks');
?>

<section class="advantage" style="background-image: url(<?= $advantage_background_image['url'] ?>)">
    <div class="container">
        <div class="block__advantage">
          <?php if (!empty($advantage_title)) : ?>
              <div class="block__advantage-title"> <?= $advantage_title ?> </div>
          <?php endif; ?>

          <?php if (!empty($advantage_blocks)) : ?>
              <div class="block__advantage-wrapper">
                <?php foreach ($advantage_blocks as $key => $advantage_block) : ?>
                    <div class="block__advantage-item">
                        <div class="block__advantage-item-number"> <?= $key + 1 ?> </div>
                      <?php if (!empty($advantage_block['advantage_description'])) : ?>
                          <div class="block__advantage-item-description"> <?= $advantage_block['advantage_description'] ?> </div>
                      <?php endif; ?>
                    </div>
                <?php endforeach; ?>
              </div>
          <?php endif; ?>
            <div class="advantage__block-btn btn"> Скачать чек-лист по продажам квартиры в новостройке </div>
        </div>
    </div>
</section>

