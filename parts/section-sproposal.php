<!-- section-sproposal.php -->
<?php
$size = 'vertical_thumb';
$description    = $args['block_description']?? get_field('sproposal_header')?? null;
$category       =  get_field('sproposal_category')?? null;
$category_slug = $category? $category->slug : null;
$category_slug = $args['category_slug']?? $category_slug ;

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
            'terms' => $category_slug
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
    'posts_per_page' => 6, // количество выводимых товаров
    'post_type' => 'product', // тип товара
    'orderby' => 'title', // сортировка
);

$loop = new WP_Query( $params );
?>

<?php if($loop->post_count): ?>
<section class="sproposal-section block-section">
    <div class="container">

        <?php if($description):?>
        <div class="row row_header_section justify-content-center">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="wrap_heaer_section">
                    <?= $description ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if($category_slug): ?>
        <div class="row row_sproposal">

                <?php

                while ( $loop->have_posts() ) : $loop->the_post();
                    global $product;
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="wrap_sproposal">
                            <?php // woocommerce_show_product_sale_flash( $post, $product ); ?>
                            <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
                            <?php
                           // if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'big_thumb');
                           if (has_post_thumbnail( )) the_post_thumbnail($size);
                            else echo '<img src="'.wc_placeholder_img_src().'" alt="" />';
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
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>
<!-- section-sproposal.php /-->