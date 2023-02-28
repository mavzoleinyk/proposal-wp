<!-- section-pressaboutus.php -->
<?php
global $post;
$press_about = get_field('pressaboutus_group')?? null;
$thumb_size = 'horizontal_thumb';
?>
<?php if($press_about && is_array($press_about['article_repeater']?? null)): ?>
<section class="pressaboutus-section block-section">
    <div class="container">

        <div class="row row_header_section justify-content-center">
            <div class="col-12">
                <div class="wrap_heaer_section">
                    <h2><?= $press_about['header'] ?></h2>

                    <div class="header_link">
                        <a href="<?= $press_about['link']['link'] ?>"><?= $press_about['link']['link_title'] ?></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="press-slider">
                    
                    <?php foreach($press_about['article_repeater'] as $article):
                        $post = $article['article'];
                        setup_postdata( $post )?>
                    <div class="blog-itme">
                        <div class="wrap_blog_item">
                            <a href="<?php the_permalink(); ?>" class="blog-img">
                                <?php
                                if (has_post_thumbnail()) echo get_the_post_thumbnail(null, $thumb_size);
                                else echo '<img src="'.wc_placeholder_img_src($thumb_size).'" alt="" />';
                                ?>
                            </a>
                            <div class="wrap_blog_text">
                                <?php
                                $categories = get_the_category();

                                if ( ! empty( $categories ) ) {
                                    echo '<a  class="cat-blog" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                }
                                ?>
                                <h2><a href="<?php the_permalink(); ?>"><?php  the_title()?></a></h2>
                            </div>
                        </div>
                    </div>
                    <?php  wp_reset_postdata(); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</section>
<?php endif; ?>
<!-- section-pressaboutus.php /-->