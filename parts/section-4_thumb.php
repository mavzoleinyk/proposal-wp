<!-- section-4_thumb.php -->
<?php

//$num_tiles = get_option( 'number_of_slider_slides_'.$categories_item->term_id );

$thumb_size = 'horizontal_thumb';
// Выполнение запроса по категориям и атрибутам
$params = array(
    // Использование аргумента tax_query для установки параметров терминов таксономии
    'tax_query' => array(
        // Использование нескольких таксономий требует параметр relation
        'relation' => 'AND', // значение AND для выборки товаров принадлежащим одновременно ко всем указанным терминам
        // массив для категории имеющей слаг slug-category-1
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => $args['category_slug']
        ),
//                        // массив для категории имеющей слаг slug-category-2
//                        array(
//                            'taxonomy' => 'product_cat',
//                            'field' => 'slug',
//                            'terms' => 'slug-category-2'
//                        ),
//                        // массив для атрибута pa_attribute-1 имеющим значение attribute-1
//                        array(
//                            'taxonomy' => 'pa_attribute-1',
//                            'field' => 'slug',
//                            'terms' => 'attribute-1'
//                        )
    ),
    // Параметры отображения выведенных товаров
    'posts_per_page' => get_option( 'number_of_slider_slides_'.$args['category_slug']),//$num_tiles, // количество выводимых товаров
    'post_type' => 'product', // тип товара
    'orderby' => 'title', // сортировка
);

$loop = new WP_Query( $params );
?>

<?php if($loop->post_count): ?>
<?php  //echo $args['id'];?>
<section class="block-section">
    <div class="container">
        <div class="row row_header_section justify-content-center">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="wrap_heaer_section">
                    <?php echo $args['block_description']; ?>
                </div>
            </div>
        </div>

        <div class="row row_sproposal">

            <?php

            while ( $loop->have_posts() ) : $loop->the_post();
                global $product;
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="wrap_sproposal">
                        <?php // woocommerce_show_product_sale_flash( $post, $product ); ?>
                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
                        <?php
                        if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, $thumb_size);
                        else echo '<img src="'.wc_placeholder_img_src($thumb_size).'" alt="" />';
                        ?>
                        </a>
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
</section>
<?php endif; ?>
<!-- section-4_thumb.php /-->
