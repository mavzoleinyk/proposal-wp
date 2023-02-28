<!-- section-blogs-packes.php -->
<?php

$query_args = array(
    'showposts'   => 4,
    'post_status' => 'publish',
    'post_type'   => 'product',
    'orderby'     => 'date',
    'order'       => 'DESC',
);
$loop = new WP_Query( $query_args );
?>

<?php if($loop): ?>
    <section class="blogs-packes-section">
        <div class="container">
            <div class="blog-packages">

                <h2 class="block-title">Proposal packages</h2>
                <div class="row row-blog-packages">
                    <?php
                    while ( $loop->have_posts() ) : $loop->the_post();
                        global $product;
                        ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="wrap_sproposal">
                                <?php // woocommerce_show_product_sale_flash( $post, $product ); ?>
                               <a href="<?php echo get_permalink( $loop->post->ID ) ?>"> <?php
                                // if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'big_thumb');
                                if (has_post_thumbnail( )) the_post_thumbnail('vertical_thumb');
                                else echo '<img src="'.wc_placeholder_img_src().'" alt="" />';
                                ?></a>
                                <div class="sp_text d-flex">
                                    <h3><a href="<?php echo get_permalink( $loop->post->ID ) ?>"><?php the_title(); ?></a></h3>
                                    <span><?php echo $product->get_price_html(); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- Сброс данных запроса -->
                    <?php wp_reset_query(); ?>
                </div>

            </div>
        </div>
    </section>
<?php endif; ?>
<!-- section-blogs-packes.php /-->





