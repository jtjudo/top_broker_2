<?php
$questions_background_image = get_field('questions_background_image');
$questions_headline = get_field('questions_headline');
$create_a_questions = get_field('create_a_questions');

?>

<section class="questions" style="background-image: url(<?= $questions_background_image['url'] ?>)">
    <div class="container">
        <div class="questions-headline">
            <?= $questions_headline ?>
        </div>
        <div class="questions-content-wrapper">
            <?php foreach ($create_a_questions as $create_a_question): ?>
                <div class="questions-content-question">
                        <?= $create_a_question['enter_question'] ?>
                    <div class="questions-content-answer">
                        <div class="questions-content-answer-text">
                           <p><?= $create_a_question['enter_answer'] ?></p>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</section>
