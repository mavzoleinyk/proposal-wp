<?php
/**
 * Single Product title
 * Theme Proposal
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
global $post;
?>

<?php the_title('<h1>','</h1>') ?>
<div class="desc">
    <?php echo $post->post_content; ?>
</div>

<!-- title.php /-->