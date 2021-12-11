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
			
			 <a href="javascript:;" data-fancybox data-src="#get-sell" class="advantage__block-btn btn"> Скачать чек-лист по продаже квартиры в новостройке </a>
			    <div class="layout-form-modal" id="get-sell" style="display:none;max-width:1140px;">
      		<?php echo do_shortcode('[contact-form-7 id="451" title="CheckListSell"]');	?>
			</div>
        </div>
    </div>
</section>

