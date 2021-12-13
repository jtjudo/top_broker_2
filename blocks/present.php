<?php
$present_background_image = get_field('present_background_image');
$present_subheadline = get_field('present_subheadline');
$present_headline = get_field('present_headline');
$present_btn = get_field('present_btn');
$present_text = get_field('present_text');
?>

<section class="present" style="background-image: url(<?= $present_background_image['url'] ?>)">
    <div class="container">
        <div class="present__block">
            <?php if (!empty($present_subheadline)) : ?>
                <div class="present__block-subheadline">
                    <h6><?= $present_subheadline ?></h6>
                </div>
            <?php endif; ?>
            <?php if (!empty($present_headline)) : ?>
                <div class="present__block-headline">
                    <h3><?= $present_headline ?></h3>
                </div>
            <?php endif; ?>
            <?php if (!empty($present_text)) : ?>
                <div class="present__block-text">
                    <p><?= $present_text ?></p>
                </div>
            <?php endif; ?>
            <?php if (!empty($present_btn)) : ?>
                <a href="javascript:;" data-fancybox="" data-src="#get-buy" class="present__block-btn btn"> <?= $present_btn ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>

