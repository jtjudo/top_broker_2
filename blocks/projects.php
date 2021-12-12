<?php
$project_headline = get_field('project_headline');
$projects = get_field('projects');
$background_image_for_project = get_field('background_image_for_project');
$btn_hover = get_field('btn_hover');
$btn_name_layout = get_field('btn_name_layout');
$btn_back = get_field('btn_back');
?>

<section class="projects">
    <div class="container">
        <div class="projects_wrapper">
            <?php if (!empty($project_headline)) : ?>
                <div class="projects_headline">
                    <h2> <?= $project_headline ?></h2>
                </div>
            <?php endif; ?>
            <?php if (!empty($projects)) : ?>
                <div class="projects_block">
                    <?php foreach ($projects as $key => $project) : ?>
                        <div class="complexes__block-wrapper-item"
                             style="background-image: url(<?= $project['background_image']['url'] ?>)">
                            <div class="item-bottom">
                                <?php if (!empty($project['headline'])) : ?>
                                    <div class="complexes__block-wrapper-title"> <?= $project['headline'] ?> </div>
                                <?php endif; ?>
                                <?php if (!empty($project['price'])) : ?>
                                    <div class="complexes__block-wrapper-price"> <?= $project['price'] ?> </div>
                                <?php endif; ?>
                                <?php if (!empty($project['developer'])) : ?>
                                    <div class="complexes__block-wrapper-developer"><?= $project['developer'] ?></div>
                                <?php endif; ?>
                            </div>
                            <button class="complexes__block-btn btn" data-key="<?=$key ?>" data-fancybox data-src="#modal-project-<?= $key ?>"
                                    href="javascript:;"> <?= $btn_hover ?? '' ?> </button>
                        </div>

                        <div class="modal-project" id="modal-project-<?= $key ?>"
                             style="background-image: url(<?= $background_image_for_project['url'] ?>)">
                            <div class="modal-project-block">
                                <div class="modal-project-block-left">
                                    <div class="swiper-container swiper-images-<?= $key ?>">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($project['gallery'] as $image) : ?>
                                                <div class="swiper-slide">
                                                    <img loading="lazy" src="<?= $image['url'] ?>" alt="">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                        <div class="swiper-button-next">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="64" viewBox="0 0 37 64" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.1949 31.529L8.25076 -9.91821e-05L0.000919342 -9.91821e-05L27.936 31.529L0.000919342 63.0581L8.25076 63.0581L36.1949 31.529Z" fill="#FEFEFE"/>
                                            </svg>
                                        </div>
                                        <div class="swiper-button-prev">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="64" viewBox="0 0 37 64" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 31.5291L27.9442 63.0582H36.194L8.25892 31.5291L36.194 0H27.9442L0 31.5291Z" fill="#FEFEFE"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-project-block-right">
                                    <?php if (!empty($project['headline'])) : ?>
                                        <div class="modal-project-block-right-title"> <?= $project['headline'] ?> </div>
                                    <?php endif; ?>
                                    <?php if (!empty($project['description'])) : ?>
                                        <div class="modal-project-block-right-description"> <?= $project['description'] ?> </div>
                                    <?php endif; ?>
                                    <?php if (!empty($project['advantage'])) : ?>
                                        <div class="modal-project-block-right-advantage"> <?= $project['advantage'] ?> </div>
                                    <?php endif; ?>
                                    <div class="modal-project__buttons">
                                        <button class="get-layout btn"> <?= $btn_name_layout ?> </button>
                                        <button class="btn-back btn back"> <?= $btn_back ?> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
