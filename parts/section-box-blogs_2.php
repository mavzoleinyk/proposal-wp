<!-- section-box-blogs-2.php -->
<?php
// TODO: Сделать чтоб обрабатывалось без параметров, внутри
$args = $args ?? null;
if (!$args) {
    return;
};

$num = $args['num'] ?? 1;
$category = $args['category'] ?? null;
if (!$category) {
    return;
};
$count = $args['count'] ?? 4;
$posts = $args['blog_posts'] ?? null;

if (!$posts) {
    $posts = get_posts(array(
        'numberposts' => $count,
        'category' => $category->term_id,
        'orderby' => 'date',
        'order' => 'DESC',
        'include' => array(),
        'exclude' => array(),
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ));
}
$size = 'vertical_thumb';

?>
<?php if ($posts): ?>

    <section class="section-box-blogs-2 bridge">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap_heaer_section">
                        <h2><?= $category->name ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-5 col-lg-5 col-xl-6 col-xxl-5">
                    <div class="bridge__img">
                        <?php
                        foreach( $posts as $post ):
                            setup_postdata( $post );
                        ?>
                        <div class="bridge__img-slide">
                            <?php  the_post_thumbnail($size) ?>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="col-md-7 col-lg-7 col-xl-6 col-xxl-7">
                    <div class="bridge__articles">
                        <?php
                        foreach( $posts as $post ):
                            setup_postdata( $post );
                        ?>
                        <a href="<?php the_permalink();?>" class="bridge__article">
                            <span class="bridge__article-tag"><?php $rand_cat =  get_random_post_category_link()?></span>
                            <span class="bridge__article-title"><?php the_title()?></span>
                            <span class="bridge__article-text"><?php the_excerpt()?></span>
                            <span class="bridge__article-date"><?php the_date()?></span>
                        </a>
                        <?php endforeach;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>



<?php endif; ?>
<!-- section-box-blogs-2.php /-->


<?php //foreach( $posts as $post ){ setup_postdata($post); ?>
<!---->
<!--    <div class="post"> <div class="post-img">--><?php //the_post_thumbnail('thumbnail'); ?><!--</div>-->
<!---->
<!--        <div class="post-txt">-->
<!---->
<!--            <h3><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h3>-->
<!---->
<!--            <div class="post-date">--><?php //echo get_the_date('j F Y'); ?><!--</div>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!---->
<?php //}
//
//wp_reset_postdata();
//?>