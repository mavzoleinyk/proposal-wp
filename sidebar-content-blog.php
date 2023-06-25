<!-- sidebar-content-blog.php -->

<?php
global $post;
$size = 'vertical_thumb';
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
$category_name = $categories[0]->name;
$category_link = get_category_link($category_id);

$args = ['numberposts' => 6 , 'category' => $category_id, 'orderby' => 'date'] ;


$posts = get_posts( $args );


?>

<div class="col-md-3 offset-md-1 col-sidebar">
    <div class="sidebar">



        <div class="sidbar-blogs">


        <?php

        foreach( $posts as $post ){ setup_postdata($post); ?>
            <div class="wrap_blog_item">
                <a href="<?php the_permalink(); ?>" class="blog-img">
                    <?php the_post_thumbnail($size); ?>
                </a>
                <div class="wrap_blog_text">
                    <a href="<?= $category_link ?>" class="cat-blog"><?= $category_name?></a>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <span><?php echo get_the_date('j F Y'); ?></span>
                </div>
            </div>
        <?php }

        wp_reset_postdata();
        ?>

        </div>


<!--        <div class="adds-widget">-->
<!--            <div class="wrap_dds">-->
<!--                <img src="--><?php //bloginfo('template_directory'); ?><!--/images/adds_1.jpg" alt="" />-->
<!--                <p>Tiffany Celebration® rings </p>-->
<!--            </div>-->
<!--            <div class="wrap_dds">-->
<!--                <img src="--><?php //bloginfo('template_directory'); ?><!--/images/adds_2.jpg" alt="" />-->
<!--                <p>The bride's bouquet </p>-->
<!--            </div>-->
<!---->
<!--        </div>-->


    </div>
</div>

<!-- sidebar-content-blog.php /-->