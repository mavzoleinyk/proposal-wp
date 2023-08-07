<!-- section-pvideo.php -->
<?php
$slider = get_field('pvideo_section_repeater')?? get_field('pvideo_section_repeater', SETTING_PAGE)?? null;
?>

<?php if($slider): ?>
<section class="pvideo-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="videos-slider">

                    <?php foreach ($slider as $slide): ?>
                    <?php $slide = $slide['pvideo_block']?>
                    <div class="video_item">
                        <div class="wrap_video_item">
                            <?php echo $slide['video']?>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<style>
    .wrap_video_item {
        position: relative;
        padding-bottom: 56.25%;
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }

    .wrap_video_item iframe,
    .wrap_video_item object,
    .wrap_video_item embed {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<!-- section-pvideo.php /-->


