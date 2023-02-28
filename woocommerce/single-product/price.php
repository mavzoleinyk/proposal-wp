<!-- price.php -->
<?php
/**
 * Single Product Price
 * Theme Propoasl
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<div class="pprice">
    <span>Total price:</span>
    <span class="tprice"><?php echo $product->get_price_html(); ?></span>
</div>

<!-- price.php /-->
