<!-- content-category.php -->
<?php
/**
 * Template part for displaying category content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
$thumb_size = 'horizontal_thumb';
?>



<div class="blog-itme col-md-4 col-sm-6">
    <div class="wrap_blog_item">
        <a href="<?php the_permalink();?>" class="blog-img">
            <?php the_post_thumbnail($thumb_size) ?>
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
<!-- content-category.php /-->












