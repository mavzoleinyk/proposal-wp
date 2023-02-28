<!-- single.php -->
<?php
/**
 * The template for displaying all single posts
 * Theme Proposal
 * Template Name: Single
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
get_template_part('parts/top', 'navigation');
?>


<section class="blog-details">
    <div class="container">


    <?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'parts/content', get_post_type() );

//        the_post_navigation(
//            array(
//                'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'proposal' ) . '</span> <span class="nav-title">%title</span>',
//                'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'proposal' ) . '</span> <span class="nav-title">%title</span>',
//            )
//        );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

    </div>
</section>

<section class="blog-details">
    <div class="container">


        <?php get_template_part('parts/content', 'videos-blogs-container') ?>

        <?php
        $content = get_field('custom_text_block_1');
        if($content){
            get_template_part('parts/content', 'blog-custom-text', ['content'=>$content]);
        }
        ?>

        <?php get_template_part('parts/content', 'blog-packages') ?>

        <?php
        $content = get_field('custom_text_block_2');
        if($content){
            get_template_part('parts/content', 'blog-custom-text', ['content'=>$content]);
        }
        ?>

        <?php get_template_part('parts/content', 'blogs-portfolio') ?>


        <?php get_template_part('parts/content', 'related-blogs') ?>

    </div>
</section>


<?php
get_footer();



