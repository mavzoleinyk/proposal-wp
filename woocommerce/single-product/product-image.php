<!-- product-image.php -->
<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;


$post_thumbnail_id = $product->get_image_id();
$post_gallery_thumbnail_ids = $product->get_gallery_image_ids();
$image_size = 'thumbnail';
$thumb_size = 'horizontal_thumb';
?>

<?php if($post_thumbnail_id): ?>
    <div class="pg-item" data-thumb="<?= wp_get_attachment_image_url($post_thumbnail_id , $image_size) ?>">
        <div class="wrap_p_img">
            <?= wp_get_attachment_image($post_thumbnail_id , $thumb_size); ?>
        </div>
    </div>

    <?php if($post_gallery_thumbnail_ids): ?>
        <?php foreach ($post_gallery_thumbnail_ids as $thumbnail_id ): ?>
            <div class="pg-item" data-thumb="<?= wp_get_attachment_image_url($thumbnail_id , $image_size) ?>">
                <div class="wrap_p_img">
                    <?= wp_get_attachment_image($thumbnail_id , $thumb_size); ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>

<!-- product-image.php /-->