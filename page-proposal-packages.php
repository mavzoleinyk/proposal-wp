<!-- page-proposal-packages.php -->
<?php
/**
 * The template for displaying all single posts
 * Theme Proposal
 * Template Name: Proposal Packages
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



//$term = get_queried_object();
$description_block_1 = get_field('description_block_1')?? '';
$category_block_1 = get_field('category_block_1')?? '';

$description_block_2 = get_field('description_block_2')?? '';
$category_block_2 = get_field('category_block_2')?? '';

$description_block_3 = get_field('description_block_3')?? '';
$category_block_3 = get_field('category_block_3')?? '';

$description_block_4 = get_field('description_block_4')?? '';
$category_block_4 = get_field('category_block_4')?? '';





?>


<?php get_template_part('parts/section', 'hero'); ?>


<?php get_template_part('parts/section', 'testmonail-parteners',['block'=>false,'testmonails'=>false]); ?>




<?php get_template_part('parts/section', 'sproposal', ['block_description'=>$description_block_1,'category_slug'=>$category_block_1->slug]); ?>

<?php get_template_part('parts/section', '4_thumb', ['block_description'=>$description_block_2,'category_slug'=>$category_block_2->slug]); ?>

<?php get_template_part('parts/section', '4_thumb', ['block_description'=>$description_block_3,'category_slug'=>$category_block_3->slug]); ?>

<?php get_template_part('parts/section', '4_thumb', ['block_description'=>$description_block_4,'category_slug'=>$category_block_4->slug]); ?>

<?php  get_template_part('parts/section', 'spring-special', ); ?>

<?php get_template_part('parts/section', 'testmonail-parteners', ['block'=>true, 'testmonails'=>true]); ?>

<?php get_template_part('parts/section', 'marriage', ['num'=>1]); ?>

<?php get_template_part('parts/section', 'pvideo'); ?>

<?php get_template_part('parts/section', 'marriage', ['num'=>2]); ?>
<?php //get_template_part('parts/section', 'mpnyc'); ?>

<?php get_template_part('parts/section', 'premium-lini', ); ?>

<?php get_template_part('parts/section', 'ptext5'); ?>
<?php get_template_part('parts/section', 'ptext6'); ?>
<?php get_template_part('parts/section', 'ptext7'); ?>
<?php get_template_part('parts/section', 'ptext8'); ?>
<?php get_template_part('parts/section', 'ptext9'); ?>
<?php get_template_part('parts/section', 'faq'); ?>
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



