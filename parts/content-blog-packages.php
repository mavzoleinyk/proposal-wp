<!-- content-blog-packages.php -->
<?php
    $packages = get_field('post_proposal_packages');
    if( $packages ):


    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 4,
        'product_cat'    => $packages->slug,
    );

    $loop = new WP_Query( $args );

?>

        <div class="custom-full-width blog-packages">
            <div class="container">
                <h2 class="block-title"><?php echo $packages->name ?></h2>
                <div class="row row-blog-packages">
                <?php
                    while ( $loop->have_posts() ) : $loop->the_post();
                        global $product;
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="wrap_sproposal">
                            <?php  the_post_thumbnail('horizon_thumb') ?>
                            <div class="sp_text d-flex">
                                <h3><a href="<?php the_permalink();?>"><?php the_title()?></a></h3>
                                <span> <?php echo $product->get_price_html(); ?></span><?php ?>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>

                </div>
            </div>
        </div>
    <?php

    endif;
    ?>
<!-- content-blog-packages.php /-->
