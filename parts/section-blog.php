<!-- home-blog-section.php -->


<?php
global $post;
$size = 'horizontal_thumb';
$param = [
////'offset' => 1,
'numberposts'      => $args['numberposts']?? 4,
//'category'         => 0,
////'orderby'          => 'rand',
'orderby'          => 'date',
'order'            => 'DESC',
//'include'          => array(10133, 10112, 10034, 9952),
//'exclude'          => array(),
//'meta_key'         => '',
//'meta_value'       => '',
//'post_type'        => 'post',
//'suppress_filters' => true,
];

$posts = get_posts($param);
?>




<section class="blogs-section block-section">
    <div class="container">

        <div class="row row_header_section justify-content-center">
            <div class="col-12">
                <div class="wrap_heaer_section">
                    <h2><?php echo $args['header'] ?? ''?></h2>

                    <div class="header_link">
                        <a href="/blog">LEARN MORE</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blogs-slider">
                <?php
                 if( $posts ){
                    foreach($posts as $post ){
                        setup_postdata( $post );
                        ?>

                        <div class="blog-itme">
                            <div class="wrap_blog_item">
                                <a href="<?php the_permalink(); ?>" class="blog-img">
                                    <?php
                                    if (has_post_thumbnail()) echo get_the_post_thumbnail(null, $size);
                                    else echo '<img src="'.wc_placeholder_img_src().'" alt="" />';
                                    ?>
                                </a>
                                <div class="wrap_blog_text">
                                    <?php
                                        $categories = get_the_category();

                                        if ( ! empty( $categories ) ) {
                                            echo '<a  class="cat-blog" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                        }
                                    ?>
<!--                                    <a href="#" class="cat-blog">Proposal photo</a>-->
                                    <div class="title"><a href="<?php the_permalink(); ?>"><?php  the_title()?></a></div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "Nothing Show";
                }
                wp_reset_postdata(); // Сбрасываем $post
                  ?>


                </div>
            </div>
        </div>

    </div>
</section>
<!-- home-blog-section.php /-->

