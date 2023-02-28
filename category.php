<!-- category.php -->
<?php
/**
 * The template for displaying category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Proposal
 */

get_header();
get_template_part('parts/top', 'navigation');
?>

<?php if ( have_posts() ) : ?>

<section class="sproposal-section block-section">
    <div class="container">
        <div class="row row_header_section justify-content-center">
        <div class="col-lg-8 col-md-12 col-12">
            <p class="wrap_heaer_section">
                <?php
                the_archive_title('<h2>', '</h2>');
                the_archive_description( '<p>', '</p>' );
                ?>
            </div>
        </div>

        <div class="row row_sproposal">
        <?php
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();

            get_template_part( 'parts/content', 'category' );

        endwhile;
        ?>
        </div>
    </div>
</section>

<?php
    //the_posts_navigation();
    echo paginate_links(
        array(
            'prev_text' => '&larr; Prev',
            'next_text' => 'Next &rarr;',
        )
    );
else :
    get_template_part( 'parts/content', 'none' );
endif;
?>

<?php
get_footer();