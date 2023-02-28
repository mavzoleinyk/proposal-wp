<!-- loop-start.php -->
<?php
/**
 * Product Loop Start
 * Theme Proposal
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="row row_sproposal row-also-products products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">
    <!-- loop-start.php /-->