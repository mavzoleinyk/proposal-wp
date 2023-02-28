<!-- section-gifts.php -->
<?php
$size = 'woocommerce_thumbnail';
$args = $args?? [];
$args = array(
    'post_type'      => 'product',
    'product_cat'    => $args['category_slug']?? 'shop',
    'posts_per_page' => 8,
);
$loop = new WP_Query( $args );
if($loop->have_posts()):
?>


<section class="gifts-section">
    <div class="container">

        <div class="row row_header_section justify-content-center">
            <div class="col-lg-5 col-md-8 col-12">
                <div class="wrap_heaer_section">
                    <h2>Proposal gifts</h2>

                </div>
            </div>
        </div>


        <div class="row row_gifts">
            <div class="gifts">
                <?php

                    while ( $loop->have_posts() ) : $loop->the_post();
                    global $product;
                    ?>
                        <div class="gift">
                            <a href="<?php echo get_permalink(); ?>">
                                <?php  echo woocommerce_get_product_thumbnail($size)?>
                                <h2><?php echo get_the_title(); ?></h2>

                            </a>
                        </div>

                    <?php
                    endwhile;

                    wp_reset_query();
                ?>

            </div>
        </div>

    </div>
</section>
<?php endif; ?>
<!-- section-gifts.php /-->