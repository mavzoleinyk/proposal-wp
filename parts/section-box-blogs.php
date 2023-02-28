<!-- section-box-blogs.php -->
<?php
$thumb_size = 'horizontal_thumb';
$args = $args?? null;
if(!$args){ return; };

$num = $args['num']?? 1;
$category = $args['category'][$num-1]['blog_category']?? '';
$count = $args['count']?? 4;
$posts = $args['blog_posts']?? null;

if(!$posts){
    $posts = get_posts( array(
        'numberposts' => $count,
        'category'    => $category->term_id,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );
}


?>
<?php if($posts):?>
<section class="box-blogs-section block-section">
    <div class="container">
        <div class="row">
            <div class="col-12">




                <div class="box-blog-title">
                    <h2><?= $category->name ?></h2>
                </div>
                <div id="category-<?= $category->term_id ?>"
                     class="<?=  $category->slug ?> row row-box-blogs" data-category="<?php //echo esc_html(json_encode($category))?>">
                    <?php
                    foreach( $posts as $post ){
                        setup_postdata( $post );
                    ?>

                        <div class="blog-itme col-md-3 col-sm-6">
                            <div class="wrap_blog_item">
                                <a href="<?php the_permalink();?>" class="blog-img">
                                    <?php  the_post_thumbnail($thumb_size) ?>
                                </a>
                                <div class="wrap_blog_text">
                                    <?php $rand_cat =  get_random_post_category_link()?>
                                    <a href="<?php echo $rand_cat?? $rand_cat['url']? $rand_cat['url'] : '' ?>" class="cat-blog"><?php echo $rand_cat?? $rand_cat['name']? $rand_cat['name'] : '' ?></a>
                                    <h2><a href="<?php the_permalink();?>"><?php the_title()?></a></h2>
                                    <span><?php the_date()?></span>
                                </div>
                            </div>
                        </div>

                        <?php
                    }

                    wp_reset_postdata(); // сброс
                    ?>

                <div class="row loadmore-row">
                    <div class="col-12">
                        <div class="wrap_btn_big ">
                            <a href="<?php echo get_category_link($category->term_id)?>">load more</a>
                        </div>
                    </div>

                </div>

                </div>


            </div>
        </div>
    </div>
</section>

<?php endif;?>
<!-- section-box-blogs.php /-->



