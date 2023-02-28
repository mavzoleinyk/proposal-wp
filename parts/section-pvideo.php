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
<!--                            <img src="--><?php //bloginfo('template_directory'); ?><!--/images/proposal_video.jpg" alt="" />-->
<!--                            <a class="play_video" data-video="">-->
<!--                                <svg width="45" height="52" viewBox="0 0 45 52" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                    <path d="M1.06557 25.8994L0.965705 0.0342946L44.563 25.7314L1.16543 51.7644L1.06557 25.8994Z" fill="white"/>-->
<!--                                </svg>-->
<!---->
<!--                            </a>-->
                            <div class="video_text">
                                <span><?php echo $slide['tiny_header']?></span>
                                <h2><?php echo $slide['header']?></h2>
                            </div>
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


