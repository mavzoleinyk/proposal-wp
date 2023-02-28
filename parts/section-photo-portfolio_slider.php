<!-- section-photo-portfolio_slider.php -->
<?php
$slider = get_field('photo_portfolio');
$gallery = $slider['gallery'];
$size = $args['size']?? '';
?>
<?php if($gallery): ?>
<section class="block-section photo-portfolio">
    <div class="container">

        <div class="row row_header_section justify-content-center">
            <div class="col-lg-5 col-md-10 col-12">
                <div class="wrap_heaer_section">
                    <h2><?= $slider['slider_header'] ?></h2>
                </div>
            </div>
        </div>
        <div class="row_portfolio">
            <div class="portfolio">
                <?php foreach ($gallery as $slide): ?>
                <div class="portolio-item">
                    <div class="wrap_pitem">
                        <?= wp_get_attachment_image( $slide['id'], $size ); ?>
                        <p><?= $slide['caption']?? '' ?></p>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</section>
<?php endif; ?>
<!-- section-photo-portfolio_slider.php /-->