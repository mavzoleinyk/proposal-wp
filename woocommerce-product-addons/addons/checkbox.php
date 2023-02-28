<?php
/**
 * The Template for displaying checkbox field.
 *
 * @version 3.0.0
 */

$addon_required = WC_Product_Addons_Helper::is_addon_required( $addon );

if ( $addon_required ) {
	?>
	<div class="wc-pao-addon-checkbox-group-required">
	<?php
}
?>
<div class="checkbox-options ">
<?php
foreach ( $addon['options'] as $i => $option ) {
    $option_price      = ! empty( $option['price'] ) ? $option['price'] : '';
    $option_price_type = ! empty( $option['price_type'] ) ? $option['price_type'] : '';
    $price_prefix       = 0 < $option_price ? '+' : '';
    $price_type        = $option_price_type;
    $price_raw         = apply_filters( 'woocommerce_product_addons_option_price_raw', $option_price, $option );
    $field_name         = ! empty( $addon['field_name'] ) ? $addon['field_name'] : '';
    $option_label      = ( '0' === $option['label'] ) || ! empty( $option['label'] ) ? $option['label'] : '';
    $price_display     = WC_Product_Addons_Helper::get_product_addon_price_for_display( $price_raw );
    $required_html     = $addon_required ? 'required' : '';

    if ( 'percentage_based' === $price_type ) {
        $price_display = $price_raw;
        $price_for_display = apply_filters( 'woocommerce_product_addons_option_price',
            $price_raw ? '(' . $price_prefix . $price_raw . '%)' : '',
            $option,
            $i,
            'checkbox'
        );
    } else {
        $price_for_display = apply_filters( 'woocommerce_product_addons_option_price',
            $price_raw ? '(' . $price_prefix . wc_price( WC_Product_Addons_Helper::get_product_addon_price_for_display( $price_raw ) ) . ')' : '',
            $option,
            $i,
            'checkbox'
        );
    }

    $selected = isset( $_POST[ 'addon-' . sanitize_title( $field_name ) ] ) ? $_POST[ 'addon-' . sanitize_title( $field_name ) ] : array();
    if ( ! is_array( $selected ) ) {
        $selected = array( $selected );
    }

    $current_value     = ( in_array( sanitize_title( $option_label ), $selected ) ) ? 1 : 0;
    ?>

    <label class="form-row form-row-wide wc-pao-addon-wrap wc-pao-addon-<?php echo sanitize_title( $field_name ) . '-' . $i; ?>">
        <input  <?php echo $required_html; ?> type="checkbox" class="wc-pao-addon-field wc-pao-addon-checkbox" name="addon-<?php echo sanitize_title( $field_name ); ?>[]" data-raw-price="<?php echo esc_attr( $price_raw ); ?>" data-price="<?php echo esc_attr( $price_display ); ?>" data-price-type="<?php echo esc_attr( $price_type ); ?>" value="<?php echo sanitize_title( $option_label ); ?>" data-label="<?php echo esc_attr( wptexturize( $option_label ) ); ?>" >
        <span class="checkbox-btn"></span>
        <span class="name"><?= wptexturize( $option_label )?></span>
        <span class="price">&nbsp;&nbsp;<?= wptexturize(trim($price_for_display, '()+,+')) ?></span>
    </label>

    <?php
}
?>
</div>
<?php
// div wc-pao-addon-checkbox-group-required.
if ( $addon_required ) {
	?>
	</div>
	<?php
}

?>
