<!-- page-about-us.php -->
<?php
/**
 * The template for displaying all single posts
 * Theme Proposal
 * Template Name: About Us
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
get_template_part('parts/top', 'navigation');
?>

<?php
//$post_id = false; // текущий пост
//$post_id = 1; // пост с ID = 1
//$post_id = "user_2"; // user ID = 2
//$post_id = "category_3"; // рубрика с ID = 3
//$post_id = "event_4"; // event (произвольная таксономия) с ID = 4
//$post_id = "option"; // страница с опциями
//$post_id = "options"; // тоже, что и выше
//
//$value = get_field( 'my_field', $post_id );


//$term = get_queried_object();
//$description_block_1 = get_field('description_block_1', $term);
//$category_block_1 = get_field('category_block_1', $term);
//
//$description_block_2 = get_field('description_block_2', $term);
//$category_block_2 = get_field('category_block_2', $term);
//
//$description_block_3 = get_field('description_block_3', $term);
//$category_block_3 = get_field('category_block_3', $term);
//
//$description_block_4 = get_field('description_block_4', $term);
//$category_block_4 = get_field('category_block_4', $term);



/*
$description_block_1 = get_field('description_block_1');
$category_block_1 = get_field('category_block_1');

$description_block_2 = get_field('description_block_2');
$category_block_2 = get_field('category_block_2');

$description_block_3 = get_field('description_block_3');
$category_block_3 = get_field('category_block_3');

$description_block_4 = get_field('description_block_4');
$category_block_4 = get_field('category_block_4');
*/





?>


<?php get_template_part('parts/section', 'hero'); ?>

<?php get_template_part('parts/section', 'whowear'); ?>

<?php get_template_part('parts/section', 'video-single'); ?>

<?php get_template_part('parts/section', 'steps'); ?>

<?php get_template_part('parts/section', 'pressaboutus'); ?>

<?php get_template_part('parts/section', 'team-2col'); ?>

<?php get_template_part('parts/section', 'blog', ['header'=>'Proposal blog', 'param'=>['include'=>[10133, 10112, 10034, 9952]]]); ?>


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



