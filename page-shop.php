<!-- page-shop.php -->
<?php
/**
 * The template for displaying all single posts
 * Theme Proposal
 * Template Name: Proposal Packages shop
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
get_template_part('parts/top', 'navigation');
?>

<?php

//$description_block_1 = get_field('description_block_1')?? '';
//$category_block_1 = get_field('category_block_1')?? '';
//
//$description_block_2 = get_field('description_block_2')?? '';
//$category_block_2 = get_field('category_block_2')?? '';
//
//$description_block_3 = get_field('description_block_3')?? '';
//$category_block_3 = get_field('category_block_3')?? '';
//
//$description_block_4 = get_field('description_block_4')?? '';
//$category_block_4 = get_field('category_block_4')?? '';

?>


<?php get_template_part('parts/section', 'hero'); ?>

<?php get_template_part('parts/section', 'testmonail-parteners',['block'=>false,'testmonails'=>false]); ?>


<section class="merch-section block-section">
    <div class="container">
        <?php if($content = get_the_content()):?>
            <div class="row row_header_section justify-content-center">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="wrap_heaer_section">
                        <?= $content ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <?php echo do_shortcode('[product_category category="shop"]') //the_content(); ?>
        </div>
    </div>
</section>


<?php //get_template_part('parts/section', 'sproposal', ['block_description'=>$description_block_1,'category_slug'=>$category_block_1->slug]); ?>

<?php //get_template_part('parts/section', '4_thumb', ['block_description'=>$description_block_2,'category_slug'=>$category_block_2->slug]); ?>

<?php //get_template_part('parts/section', '4_thumb', ['block_description'=>$description_block_3,'category_slug'=>$category_block_3->slug]); ?>

<?php //get_template_part('parts/section', '4_thumb', ['block_description'=>$description_block_4,'category_slug'=>$category_block_4->slug]); ?>

<?php get_template_part('parts/section', 'testmonail-parteners', ['block'=>true, 'testmonails'=>true]); ?>

<?php get_template_part('parts/section', 'marriage', ['num'=>1]); ?>

<?php get_template_part('parts/section', 'pvideo'); ?>

<?php get_template_part('parts/section', 'marriage', ['num'=>2]); ?>
<?php //get_template_part('parts/section', 'mpnyc'); ?>

<?php get_template_part('parts/section', 'blog', ['header'=>'Proposal blog', 'params'=>['include'=>[10133, 10112, 10034, 9952]]]); ?>



<?php
//    /* Start the Loop */
//    while ( have_posts() ) :
//        the_post();
//
//        get_template_part( 'parts/content','page' );
//
//        // If comments are open or there is at least one comment, load up the comment template.
//        if ( comments_open() || get_comments_number() ) {
//            comments_template();
//        }
//    endwhile; // End of the loop.
//?>

<?php
get_footer();



