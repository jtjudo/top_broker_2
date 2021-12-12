<?php
$advantage_background_image = get_field('advantage_background_image');
$advantage_one = get_field('advantage_one');
$advantage_two = get_field('advantage_two');
$advantage_three = get_field('advantage_three');
$advantage_four = get_field('advantage_four');
?>

<section class="advantage" style="background-image: url(<?= $advantage_background_image['url'] ?>)">
    <div class="container">
        <div class="block__advantage">
            <div class="block__advantage-left">
                <?php if (!empty($advantage_one)) : ?>
                    <div class="advantage-left-one">
                        <?php if (!empty($advantage_one['headline'])) : ?>
                            <div class="headline-advantage">
                                <h6><span><?=$advantage_one['subheadline'] ?></span> </br> <?= $advantage_one['headline'] ?></h6>
                            </div>
                            <div class="text-advantage">
                                <p><?= $advantage_one['text'] ?></p>
                            </div>
                            <div class="btn-advantage btn"><?= $advantage_one['button'] ?></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($advantage_two)) : ?>
                    <div class="advantage-left-two">
                        <?php if (!empty($advantage_two['headline'])) : ?>
                            <div class="headline-advantage">
                                <h6><span><?=$advantage_two['subheadline'] ?></span> </br> <?= $advantage_two['headline'] ?></h6>
                            </div>
                            <div class="text-advantage">
                                <p><?= $advantage_two['text'] ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="block__advantage-right">
                <?php if (!empty($advantage_three)) : ?>
                    <div class="advantage-right-three">
                        <?php if (!empty($advantage_three['headline'])) : ?>
                            <div class="headline-advantage">
                                <h6> <span><?=$advantage_three['subheadline'] ?></span> </br> <?= $advantage_three['headline'] ?></h6>
                            </div>
                            <div class="text-advantage">
                                <p><?= $advantage_three['text'] ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($advantage_four)) : ?>
                    <div class="advantage-right-four">
                        <?php if (!empty($advantage_four['headline'])) : ?>
                            <div class="headline-advantage">
                                <h6><span><?=$advantage_four['subheadline'] ?></span> </br> <?= $advantage_four['headline'] ?></h6>
                            </div>
                            <div class="text-advantage">
                                <p><?= $advantage_four['text'] ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

