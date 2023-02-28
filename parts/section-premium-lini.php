<!-- section-premium-lini.php -->
<?php
$premium_lini = get_field('section_premium_lini');
$product = $premium_lini['premium_lini_post'];
$size = 'horizontal_thumb';

$price = get_post_meta( $product->ID, '_regular_price', true);
$thumb_id = get_post_meta( $product->ID, '_thumbnail_id', true);
$link = get_post_permalink($product->ID);
?>
<?php if($premium_lini['premium_lini_cutout']): ?>
<section class="premium-lini-section block-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12">
                <div class="wrap_plini_img">
                    <?= get_the_post_thumbnail($product->ID, $size)  ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6  col-12">
                <div class="wrap_plini_text">
                    <h2><?= $product->post_title ?></h2>
                    <p><?= $product->post_excerpt ?></p>
                    <span class="plini-price">$<?= $price ?></span>
                    <div class="wrap_btn_big btn-bg">
                        <a href="<?= $link ?>">Check availabilty</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- section-premium-lini.php /-->