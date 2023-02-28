<!-- section-steps.php -->
<?php
$steps = get_field('steps_repeater');
$steps_image = get_field('steps_image');
?>
<?php if($steps): ?>
<section class="steps-section block-section">
    <div class="container">
        <div class="row row_header_section justify-content-center">
            <div class="col-lg-7 col-md-12 col-12">
                <div class="wrap_heaer_section">
                    <h2 class="pb-0">How we work</h2>-
                </div>
            </div>
        </div>
        <div class="row row_steps">
            <div class="col-md-8">
                <div class="wrap_steps">

                    <?php foreach($steps as $k => $steps_repeater_string): ?>
                    <div class="step step-<?=  $k+1 ?>">
                        <div class="step_title">
                            <h3>Step <?=  $k+1 ?></h3>
                        </div>
                        <div class="step_content">
                            <p><?= $steps_repeater_string['steps_repeater_string']['steps_description'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
            <div class="col-md-4">
                <div class="wrap_steps_img">
                    <img src="<?= $steps_image['sizes']['vertical_thumb'] ?>" alt="<?= $steps_image['alt'] ?>" />
                </div>

            </div>
        </div>
        <div class="row steps_btn">
<!--            <div class="wrap_btn_big btn-bg">-->
<!--                <a href="/contacts/">Lets have a call, shall we?</a>-->
<!--            </div>-->
            <?php  get_template_part('parts/block', 'ask-form', ['button_text'=>'Lets have a call, shall we?']); ?>
        </div>

    </div>
</section>
<?php endif; ?>
<!-- section-steps.php /-->