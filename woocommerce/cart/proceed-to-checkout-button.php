<!-- proceed-to-checkout-button.php -->
<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 * Teheme Proposal
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!--<a href="--><?php //echo esc_url( wc_get_checkout_url() ); ?><!--" class="process-checkout checkout-button button alt wc-forward">-->
<!--	--><?php //esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
<!--</a>-->

<div class="process-checkout checkout-button button alt wc-forward">
    <button onclick="window.location.href = '<?php echo esc_url( wc_get_checkout_url() ); ?>';"><?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?></button>
</div>


<!-- proceed-to-checkout-button.php /-->

<!--                <div class="process-checkout">-->
<!--                    <button>Proceed to checkout</button>-->
<!--                </div>-->