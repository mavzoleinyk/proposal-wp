<!-- content-related-blogs.php -->

<?php
global $post;
$terms = get_the_category();
$cat_id_arr = [];
foreach ($terms as $term){
    $cat_id_arr [] = $term->term_id;
}
// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => 8,
    //'category'    => [22, 20, 29, 35, 21],
    'category'    => $cat_id_arr,
    'orderby'     => 'rand',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array($post->ID),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
?>
<div class="related-blogs block-section">
    <h2 class="block-title">Other idea</h2>
    <div class="related-blogs-slider row">

    <?php
foreach( $my_posts as $post ){
    setup_postdata( $post );
?>


    <div class="blog-itme col-md-3">
        <div class="wrap_blog_item">
            <a href="<?php the_permalink();?>" class="blog-img">
                <?php the_post_thumbnail('horizon_thumb') ?>
            </a>
            <div class="wrap_blog_text">
                <?php
                $category = get_the_category();
                $rand_cat = $category[rand(0, count($category)-1)];
                ?>
                <a href="<?php echo get_category_link( $rand_cat->term_id ); ?>" class="cat-blog"><?php echo $rand_cat->name; ?></a>
                <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                <span><?php the_date()?></span>
            </div>
        </div>
    </div>

    <?php
}

wp_reset_postdata(); // сброс


?>
    </div>
</div>

<!-- content-related-blogs.php /-->