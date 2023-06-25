<!-- page-photovideo.php -->
<?php
/**
 * The template for displaying all single posts
 * Theme Proposal
 * Template Name: Planner
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
get_template_part('parts/top', 'navigation');
?>


<?php get_template_part('parts/section', 'planner'); ?>

<?php get_template_part('parts/section', 'online'); ?>

<?php get_template_part('parts/section', 'nyc', ['num'=>1]); ?>

<?php get_template_part('parts/section', 'box'); ?>

<?php get_template_part('parts/section', 'team'); ?>

<?php get_template_part('parts/section', 'reviews'); ?>

<?php get_template_part('parts/section', 'how'); ?>

<?php get_template_part('parts/section', 'nyc', ['num'=>2]); ?>

<?php get_template_part('parts/section', 'marriage', ['num'=>'1']); ?>

<?php get_template_part('parts/section', 'pvideo'); ?>

<?php get_template_part('parts/section', 'ptext10'); ?>
<?php get_template_part('parts/section', 'ptext11'); ?>

<?php get_template_part('parts/section', 'faq'); ?>


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



