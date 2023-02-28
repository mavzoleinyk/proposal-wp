<!-- content-shop-page.php -->
<?php
/**
 * Template part for displaying page content in content-shop-page.php
 * Theme Proposal
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

?>


<div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <div class="col-12">
        <div class="wrap_cart_page">
            <?php // woocommerce_breadcrumb(); ?>
<!--            <h1>--><?php //the_title(); ?><!--</h1>-->




        <?php
        the_content();

        wp_link_pages(
            array(
                'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
                'after'    => '</nav>',
                /* translators: %: Page number. */
                'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
            )
        );
        ?>
    <!-- .entry-content -->



    <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer default-max-width">
            <?php
            edit_post_link(
                sprintf(
                /* translators: %s: Post title. Only visible to screen readers. */
                    esc_html__( 'Edit %s', 'twentytwentyone' ),
                    '<span class="screen-reader-text">' . get_the_title() . '</span>'
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>
<!-- #post-<?php the_ID(); ?> -->
<!-- content-shop-page.php /-->














        </div>
    </div>
</div>



