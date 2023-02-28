<!-- cart-totals.php -->
<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 * Theme Proposal
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

?>


<table  class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

    <tbody class="shop_table shop_table_responsive">
<!--    <tr>-->
<!--        <td>-->
<!--            --><?php //do_action( 'woocommerce_before_cart_totals' ); ?>
<!--            <h2>--><?php //esc_html_e( 'Cart totals', 'woocommerce' ); ?><!--</h2>-->
<!--        </td>-->
<!--    </tr>-->
    </tbody>
    <tfoot>
    <tr>
        <td colspan="5" class="pcsummary">
            <div class="wrap_cart_summary">
                <div class="subtotal cart-subtotal">
                    <span><?php esc_html_e( 'Cart totals', 'woocommerce' ); ?></span>
                    <span data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>" class="subprice"><?php wc_cart_totals_subtotal_html(); ?></span>
                </div>

                <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
                    <div class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                        <div><?php wc_cart_totals_coupon_label( $coupon ); ?></div>
                        <div data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>"><?php wc_cart_totals_coupon_html( $coupon ); ?></div>
                    </div>
                <?php endforeach; ?>



                <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

                    <?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>

                    <?php wc_cart_totals_shipping_html(); ?>

                    <?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>

                <?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>

                <div class="shipping">
                    <span><?php esc_html_e( 'Shipping', 'woocommerce' ); ?></span>
                    <span class="shippingtext" data-title="<?php esc_attr_e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></span>
                </div>

                <?php endif; ?>


                <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
                    <div class="fee">
                        <span><?php echo esc_html( $fee->name ); ?></span>
                        <span data-title="<?php echo esc_attr( $fee->name ); ?>"><?php wc_cart_totals_fee_html( $fee ); ?></span>
                    </div>
                <?php endforeach; ?>


                <?php
                    if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
                        $taxable_address = WC()->customer->get_taxable_address();
                        $estimated_text  = '';

                        if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
                            /* translators: %s location. */
                            $estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
                        }

                        if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
                        foreach ( WC()->cart->get_tax_totals() as $code => $tax ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                        ?>
                        <div class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                            <span><?php echo esc_html( $tax->label ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
                            <span data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></span>
                        </div>
                        <?php
                        }
                        } else {
                            ?>
                            <div class="tax-total">
                                <span><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
                                <span data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></span>
                            </div>
                            <?php
                        }
                    }
                ?>



                <div><?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?></div>


                <div class="total order-total">
                    <span><?php esc_html_e( 'Total', 'woocommerce' ); ?></span>
                    <span class="totalprice" data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>"><?php wc_cart_totals_order_total_html(); ?></span>
                </div>

                <div><?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?></div>


                <div class="process-checkout wc-proceed-to-checkout">
                    <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
                </div>


                <div><?php do_action( 'woocommerce_after_cart_totals' ); ?></div>


                <!-- div class="cartlogos">
                                            <span><svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M47.0606 27H43.8142C43.6232 27 43.4322 27.1895 43.3368 27.3789L42 35.7158C42 35.9053 42.0955 36 42.2864 36H44.0051C44.1961 36 44.2916 35.9053 44.2916 35.7158L44.6735 33.3474C44.6735 33.1579 44.8645 32.9684 45.1509 32.9684H46.2012C48.3974 32.9684 49.6386 31.9263 49.9251 29.8421C50.116 28.9895 49.9251 28.2316 49.5431 27.7579C48.9703 27.2842 48.1109 27 47.0606 27ZM47.4425 30.1263C47.2516 31.2632 46.3922 31.2632 45.5329 31.2632H44.96L45.3419 29.0842C45.3419 28.9895 45.4374 28.8947 45.6284 28.8947H45.8193C46.3922 28.8947 46.9651 28.8947 47.2516 29.2737C47.4425 29.3684 47.4425 29.6526 47.4425 30.1263Z" fill="#139AD6"/>
                                                <path d="M22.9688 27H19.7812C19.5937 27 19.4062 27.1875 19.3125 27.375L18 35.625C18 35.8125 18.0938 35.9063 18.2813 35.9063H19.7812C19.9687 35.9063 20.1562 35.7188 20.25 35.5312L20.625 33.2813C20.625 33.0938 20.8125 32.9063 21.0938 32.9063H22.125C24.2812 32.9063 25.5 31.875 25.7812 29.8125C25.9688 28.9688 25.7812 28.2187 25.4062 27.75C24.8437 27.2812 24.0938 27 22.9688 27ZM23.3438 30.0937C23.1562 31.2188 22.3125 31.2188 21.4688 31.2188H21L21.375 29.0625C21.375 28.9687 21.4687 28.875 21.6562 28.875H21.8437C22.4062 28.875 22.9687 28.875 23.25 29.25C23.3437 29.3438 23.4375 29.625 23.3438 30.0937ZM32.625 30H31.125C31.0312 30 30.8437 30.0938 30.8437 30.1875L30.75 30.6562L30.6562 30.4687C30.2812 30 29.625 29.8125 28.875 29.8125C27.1875 29.8125 25.6875 31.125 25.4062 32.9063C25.2187 33.8438 25.5 34.6875 25.9687 35.25C26.4375 35.8125 27.0937 36 27.9375 36C29.3437 36 30.0937 35.1563 30.0937 35.1563L30 35.625C30 35.8125 30.0937 35.9063 30.2812 35.9063H31.6875C31.875 35.9063 32.0625 35.7188 32.1562 35.5312L33 30.2813C32.9062 30.1875 32.7187 30 32.625 30ZM30.4687 33C30.2812 33.8437 29.625 34.5 28.6875 34.5C28.2187 34.5 27.8438 34.3125 27.6562 34.125C27.4688 33.8438 27.375 33.4687 27.375 33C27.4687 32.1562 28.2188 31.5 29.0625 31.5C29.5312 31.5 29.8125 31.6875 30.0937 31.875C30.375 32.1563 30.4687 32.625 30.4687 33Z" fill="#263B80"/>
                                                <path d="M56.608 30.1818H55.0399C54.9418 30.1818 54.7458 30.2727 54.7458 30.3636L54.6478 30.8182L54.5498 30.6364C54.1578 30.1818 53.4717 30 52.6877 30C50.9235 30 49.3554 31.2727 49.0614 33C48.8654 33.9091 49.1594 34.7273 49.6494 35.2727C50.1395 35.8182 50.8255 36 51.7076 36C53.1777 36 53.9618 35.1818 53.9618 35.1818L53.8638 35.6364C53.8638 35.8182 53.9618 35.9091 54.1578 35.9091H55.6279C55.8239 35.9091 56.0199 35.7273 56.1179 35.5455L57 30.4545C56.902 30.3636 56.804 30.1818 56.608 30.1818ZM54.3538 33.0909C54.1578 33.9091 53.4717 34.5455 52.4917 34.5455C52.0016 34.5455 51.6096 34.3636 51.4136 34.1818C51.2176 33.9091 51.1196 33.5455 51.1196 33.0909C51.2176 32.2727 52.0016 31.6364 52.8837 31.6364C53.3737 31.6364 53.6677 31.8182 53.9618 32C54.3538 32.2727 54.4518 32.7273 54.3538 33.0909Z" fill="#139AD6"/>
                                                <path d="M41.7455 30H40.0355C39.8343 30 39.7337 30.092 39.6331 30.1839L37.4201 33.3103L36.4142 30.3678C36.3136 30.1839 36.213 30.092 35.9112 30.092H34.3018C34.1006 30.092 34 30.2759 34 30.4598L35.8106 35.3333L34.1006 37.5402C34 37.7241 34.1006 38 34.3018 38H35.9112C36.1124 38 36.213 37.908 36.3136 37.8161L41.8461 30.5517C42.1479 30.2759 41.9467 30 41.7455 30Z" fill="#263B80"/>
                                                <path d="M58.1667 27.2257L57 35.717C57 35.9057 57.0833 36 57.25 36H58.4167C58.5833 36 58.75 35.8113 58.8333 35.6226L60 27.3201C60 27.1314 59.9167 27.037 59.75 27.037H58.4167C58.3333 26.9427 58.25 27.037 58.1667 27.2257Z" fill="#139AD6"/>
                                                <path d="M11.1975 24.1831C10.5159 23.3944 9.25014 23 7.49748 23H2.62899C2.33688 23 2.04477 23.2958 1.9474 23.5915L0 36.507C0 36.8028 0.19474 37 0.389479 37H3.40794L4.1869 32.169V32.3662C4.28427 32.0704 4.57638 31.7746 4.86849 31.7746H6.32904C9.15277 31.7746 11.2949 30.5915 11.9765 27.338V27.0423C11.8791 27.0423 11.8791 27.0423 11.9765 27.0423C12.0739 25.7606 11.8791 24.9718 11.1975 24.1831Z" fill="#263B80"/>
                                                <path d="M12.8291 27V27.2773C12.1424 30.4202 9.98414 31.437 7.13922 31.437H5.66771C5.37341 31.437 5.07911 31.7143 4.98101 31.9916L4 37.6302C4 37.8151 4.0981 38 4.3924 38H6.94302C7.23732 38 7.53163 37.8151 7.53163 37.5378V37.4454L8.02213 34.5798V34.395C8.02213 34.1176 8.31643 33.9328 8.61073 33.9328H9.00314C11.4557 33.9328 13.4177 33.0084 13.9082 30.2353C14.1044 29.1261 14.0063 28.1092 13.4177 27.4622C13.3196 27.2773 13.1234 27.0924 12.8291 27Z" fill="#139AD6"/>
                                                <path d="M12.1111 26.3C12.0123 26.3 11.9136 26.2 11.8148 26.2C11.716 26.2 11.6173 26.2 11.5185 26.1C11.1235 26 10.7284 26 10.2346 26H6.38272C6.28395 26 6.18519 26 6.08642 26.1C5.88889 26.2 5.79012 26.4 5.79012 26.6L5 31.8V32C5.09877 31.7 5.39506 31.4 5.69136 31.4H7.17284C10.037 31.4 12.2099 30.2 12.9012 26.9C12.9012 26.8 12.9012 26.7 13 26.6C12.8025 26.5 12.7037 26.4 12.5062 26.4C12.2099 26.3 12.2099 26.3 12.1111 26.3Z" fill="#232C65"/>
                                                </svg>
                                                </span>
                    <span>
                                                <svg width="50" height="20" viewBox="0 0 50 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.22075 2.77502C9.73064 2.028 10.0766 1.02497 9.98539 0C9.23899 0.0434728 8.32815 0.57679 7.80082 1.32439C7.32733 1.9646 6.90826 3.00963 7.01751 3.99163C7.85538 4.07676 8.69248 3.50108 9.22075 2.77502Z" fill="black"/>
                                                    <path d="M10.4067 4.00519C8.99033 3.92765 7.78605 4.74403 7.10966 4.74403C6.43289 4.74403 5.39711 4.04427 4.27682 4.06313C2.8187 4.08281 1.46573 4.84055 0.7258 6.04571C-0.796118 8.45661 0.324166 12.0328 1.80415 13.9964C2.52287 14.9678 3.38904 16.0374 4.53036 15.999C5.60871 15.9601 6.03138 15.3572 7.34216 15.3572C8.65198 15.3572 9.03272 15.999 10.1742 15.9796C11.358 15.9601 12.098 15.0076 12.8168 14.0353C13.6413 12.9279 13.9788 11.8586 14 11.7999C13.9788 11.7805 11.7174 10.9831 11.6964 8.59227C11.675 6.59036 13.4719 5.63814 13.5564 5.57909C12.5417 4.19979 10.9563 4.04427 10.4067 4.00519Z" fill="black"/>
                                                    <path d="M22.8575 1C25.889 1 28 3.00626 28 5.92722C28 8.85861 25.8456 10.8753 22.7815 10.8753H19.425V16H17V1H22.8575V1ZM19.425 8.92096H22.2076C24.319 8.92096 25.5207 7.82961 25.5207 5.93764C25.5207 4.04588 24.319 2.96475 22.2185 2.96475H19.425V8.92096Z" fill="black"/>
                                                    <path d="M29 12.7981C29 10.9394 30.5772 9.79801 33.3739 9.65656L36.5952 9.48491V8.6668C36.5952 7.48493 35.7114 6.77787 34.2352 6.77787C32.8366 6.77787 31.9641 7.38381 31.7518 8.33343H29.4699C29.6041 6.41411 31.4161 5 34.3245 5C37.1768 5 39 6.36365 39 8.49495V15.8182H36.6845V14.0707H36.6288C35.9466 15.2526 34.4587 16 32.9152 16C30.6109 16 29 14.7071 29 12.7981ZM36.5952 11.8385V11.0001L33.6979 11.1617C32.2549 11.2527 31.4385 11.8284 31.4385 12.7375C31.4385 13.6667 32.2886 14.2728 33.5862 14.2728C35.2751 14.2728 36.5952 13.2222 36.5952 11.8385Z" fill="black"/>
                                                    <path d="M40.1463 19.9481V18.1302C40.3224 18.1717 40.7191 18.1717 40.9177 18.1717C42.0198 18.1717 42.6151 17.7355 42.9786 16.6136C42.9786 16.5928 43.1882 15.9488 43.1882 15.9384L39 5H41.5789L44.5111 13.892H44.5548L47.487 5H50L45.657 16.4992C44.6654 19.1482 43.5191 20 41.1162 20C40.9177 20 40.3224 19.9792 40.1463 19.9481Z" fill="black"/>
                                                    </svg>

                                            </span>
                </div -->

            </div>
        </td>
    </tr>
    </tfoot>
</table>
<!-- cart-totals.php /-->
