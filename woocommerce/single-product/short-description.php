<!-- short-description.php -->
<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $post;;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
return;
}

?>

<div class="desc">
    <?php echo $short_description; ?>
</div>

<!-- short-description.php /-->
