<!-- section-providephoto.php -->
<?php
$size = 'vertical_thumb';
$args = array(

    'tax_query' => array(

        'relation' => 'AND',

        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'photo-and-video'
        ),
    ),

    'posts_per_page' => 3,
    'post_type' => 'product',
    'orderby' => 'date',
);

$loop = new WP_Query( $args );
?>
<?php if($loop): ?>
<section class="providephoto-section ">

    <div class="container">
        <div class="row row_header_section justify-content-center">

            <div class="col-lg-5 col-md-10 col-12">
                <div class="wrap_heaer_section">
                    <?php the_content();?>
                </div>
            </div>
        </div>

        <div class="row row_v_p_packages">
            <?php
            while ( $loop->have_posts() ) : $loop->the_post();
            global $product;
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="wrap_pv_content">
                    <a href="<?= get_permalink( $loop->post->ID ) ?>">
                        <?php // woocommerce_show_product_sale_flash( $post, $product ); ?>
                        <?php
                        // if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'big_thumb');
                        if (has_post_thumbnail( )) the_post_thumbnail($size);
                        else echo '<img src="'.wc_placeholder_img_src($size).'" alt="" />';
                        ?>
                        <div class="pv_text">
                            <h3><?php the_title(); ?></h3>
                            <span><?= $product->get_price_html() ?></span>
                        </div>
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
            <!-- Сброс данных запроса -->
            <?php wp_reset_query(); ?>

        </div>
    </div>

</section>
<?php endif; ?>


    <!-- section-providephoto.php /-->