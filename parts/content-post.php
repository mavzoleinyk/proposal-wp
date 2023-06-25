<!-- content-post.php -->
<div class="row">
    <div class="col-md-8 col-blog-details">


        <article  id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <div class="article-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <span><?php the_date()?></span>
            </div>
            <?php proposal_post_thumbnail(); ?>

            <!--                <img src="--><?php //bloginfo('template_directory'); ?><!--/images/blog-post.jpg" alt="" />-->

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'proposal' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div><!-- .entry-content -->
            <?php if ( get_edit_post_link() ) : ?>
                <div class="entry-footer">
                    <?php
                    edit_post_link(
                        sprintf(
                            wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Edit <span class="screen-reader-text">%s</span>', 'proposal' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        ),
                        '<span class="edit-link">',
                        '</span>'
                    );
                    ?>
                </div><!-- .entry-footer -->
            <?php endif; ?>

        </article>


    </div>

    <?php get_sidebar('content-blog') ?>

</div>
<!-- content-post.php /-->