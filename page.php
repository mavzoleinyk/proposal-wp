<!-- page.php -->
<?php
/**
 * The template for displaying all single posts
 * Theme Proposal
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
get_template_part('parts/top', 'navigation');

if(is_cart()){
?>
    <section class="cart-section">
        <div class="container">

<?php
}else if(is_checkout()){
?>
        <section class="checkout-section">
            <div class="container">
<?php
}else{
?>

    <section class="block-section">
        <div class="container">
<?php
}


/* Start the Loop */
while ( have_posts() ) :
	the_post();

    if(is_cart() ){
        get_template_part( 'parts/content','shop-page' );

    }else if(is_checkout()){
        get_template_part( 'parts/content','shop-page' );
    }else{
        get_template_part( 'parts/content','page' );
    }


    // If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.


?>

</div>
</section>

<?php
get_footer();



