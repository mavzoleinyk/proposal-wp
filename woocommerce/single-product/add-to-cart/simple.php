<!-- simple.php  -->
<?php
/**
 * Simple product add to cart
 * Theme Proposal
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>

        <!--div class="options">

        <?php // TODO: вставить обвертку над опциями в карточке ?>

        </div-->



        <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

        <?php do_action( 'woocommerce_before_add_to_cart_quantity' );  ?>

<?php
		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
				'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(),
			)
		);

		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>

        <div class="order-btns">
            <button
                    class="order-btn
                    single_add_to_cart_button
                    button alt" type="submit"
                    name="add-to-cart"
                    value="<?php echo esc_attr( $product->get_id() ); ?>"
            >
                <?php echo esc_html( $product->single_add_to_cart_text() ); ?>
            </button>
        </div>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form>

    <?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<!--    --><?php //get_template_part('parts/block', 'ask-form' ); ?>

    <?php // TODO: Разобраться с этими стилями ?>
    <style>
        div.product-addon-totals ul li{
            display: none;
        }
        div.product-addon-totals .wc-pao-subtotal-line{
            border-top: none;
            display: block;
        }
    </style>

<?php endif; ?>
<!-- simple.php  /-->