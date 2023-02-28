<!-- section-planner.php -->
<?php
$section_planner_grop_one = get_field('section_planner_grop_one')?? null;
$section_planner_grop_two = get_field('section_planner_grop_two')?? null;
$size = '';
?>
<?php if($section_planner_grop_one || $section_planner_grop_two):?>
<section class="planner-section">
    <div class="container">

        <?php if($section_planner_grop_one):?>
        <div class="row row_planner align-items-center">
            <div class="col-md-6">
                <div class="wrap_planner_img">
                    <?= wp_get_attachment_image( $section_planner_grop_one['image']?? '', $size ) ?>
                </div>
            </div>
            <div class=" col-xl-4 col-lg-5 col-md-6">
                <div class="wrap_planner_text">
                    <h1><?= $section_planner_grop_one['header'] ?></h1>
                    <?= $section_planner_grop_one['text'] ?>
                    <div class="wrap_btn_big">
                        <a href="<?= $section_planner_grop_one['link']['url'] ?>"><?= $section_planner_grop_one['link']['title'] ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if($section_planner_grop_two): ?>
        <div class="row row_planner_planning">
            <div class="col-12">
                <div class="wrap_pplanning">
                    <?= wp_get_attachment_image( $section_planner_grop_two['image']?? '', $size ) ?>
                    <h2><?= $section_planner_grop_two['header'] ?></h2>

                </div>
            </div>
        </div>
        <div class="row row_pplanner_text justify-content-end">
            <div class="col-lg-4 col-md-5">
                <div class="wrap_pplanner_text">
                    <?= $section_planner_grop_two['text'] ?>
                    <div class="wrap_btn_big">
                        <a href="<?= $section_planner_grop_two['link']['url'] ?>"><?= $section_planner_grop_two['link']['title'] ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>
<!-- section-planner.php /-->