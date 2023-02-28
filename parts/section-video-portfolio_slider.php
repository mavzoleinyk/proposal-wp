<!-- section-video-portfolio_slider.php -->
<?php
$thumb_size = 'horizontal_thumb';
$slider = get_field('video_portfolio');
?>
<?php if($slider): $slider_length = count($slider['gallery_repeater']) ?>
    <section class="block-section video">
        <div class="container">

            <div class="row row_header_section justify-content-center">
                <div class="col-lg-5 col-md-10 col-12">
                    <div class="wrap_heaer_section">
                        <h2><?= $slider['slider_header'] ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="video__slider">
                        <?php foreach ($slider['gallery_repeater'] as $k=>$slide): ?>
                        <div class="video__slide">
                            <?= $slide['video_group']['video']?>
                            <div class="video__slide-info d-flex justify-content-between">
<!--                                <div class="video__slide-title">-->
<!--                                    --><?= $slide['video_group']['title'] ?>
<!--                                </div>-->
                                <div class="video__slide-number">
                                    <?= $k+1 ?> / <?= $slider_length ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                    <div class="video__dots">
                        <?php foreach ($slider['gallery_repeater'] as $k=>$slide): ?>
                        <div class="video__dot">
                            <?= wp_get_attachment_image( $slide['video_group']['thumb']?? '', $thumb_size ) ?>
                            <span><?= $slide['video_group']['title'] ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- section-video-portfolio_slider.php /-->