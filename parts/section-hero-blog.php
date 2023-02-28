<!-- section-hero-blog.php -->

<?php
$thumb_size = 'big_slider';
$post = get_field('sticked_post');
if( $post ):
    setup_postdata($post);
?>

<section class="hero-blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrap_hero_blog">

                    <?php the_post_thumbnail($thumb_size);?>

                    <div class="wrap_hero_blog_content">
                        <span><?php the_date()?></span>
                        <h2><a href="<?php the_permalink();?>"><?php the_title()?></a></h2>
                    </div>
                    <span class="custom-overlay-bg"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    wp_reset_postdata();
endif; ?>
<!-- section-hero-blog.php /-->