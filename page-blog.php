<!-- page-blog.php -->
<?php
/**
 * The template for displaying all single posts
 * Theme Proposal
 * Template Name: Page Blog
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
<?php get_template_part('parts/section', 'hero-blog'); ?>




<!--<section class="box-blogs-section block-section">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                --><?php //the_content(); ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!---->
<?php  $category = get_field('section_box-blogs')?? null; ?>
<?php get_template_part('parts/section', 'box-blogs', ['category'=>$category, 'num'=> 1, 'count'=>8]); ?>
<!---->
<?php  $category = get_field('section_box-blogs_2')?? null; ?>
<?php  get_template_part('parts/section', 'box-blogs_2', ['category'=>$category, 'num'=> 1, 'count'=>4]); ?>
<!---->
<?php get_template_part('parts/section', 'box-blogs-videos'); ?>
<!---->
<?php  $category = get_field('section_box-blogs')?? null; ?>
<?php get_template_part('parts/section', 'box-blogs', ['category'=>$category, 'num'=> 2, 'count'=>8]); ?>
<!---->
<?php get_template_part('parts/section', 'blogs-packes'); ?>




<?php
get_footer();



///* Start the Loop */
//while ( have_posts() ) :
//    the_post();
//
//
//// If comments are open or there is at least one comment, load up the comment template.
//    if ( comments_open() || get_comments_number() ) {
//        comments_template();
//    }
//endwhile; // End of the loop.