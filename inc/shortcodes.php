<?php
add_filter('widget-text', 'do_shortcode');


add_shortcode( 'foobar', 'foobar_shortcode' );
function foobar_shortcode( $atts ) {
    $atts = shortcode_atts( [
        'name' => 'Noname',
        'age'  => 18,
    ], $atts );

    return "Меня зовут {$atts['name']} мне {$atts['age']} лет";
}



function devise_rand_posts() {

    $args = array(
        'post_type' => 'post',
        'orderby'   => 'rand',
        'posts_per_page' => 5,
    );

    $the_query = new WP_Query( $args );
    $string = '';
    if ( $the_query->have_posts() ) {

        $string .= '<ul>';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $string .= '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>';
        }
        $string .= '</ul>';
        /* Восстанавливаем оригинальные Post Data */
        wp_reset_postdata();
    } else {

        $string .= 'записей не найдено';
    }

    return $string;
}

add_shortcode('devise-random-posts','devise_rand_posts');
###############################################################
function post_gallery($atts) {
    $atts = shortcode_atts( [
        'size' => 'horizon_thumb',
    ], $atts );
    $images = get_field('gallery');
    if( $images ):
    ob_start();
?>
        <div class="row row-gallery">
        <?php foreach( $images as $image ): ?>
        <div class="col-sm-6">
            <div class="img-caption">
                <img src="<?php echo esc_url($image['sizes'][$atts['size']]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <caption><?php echo esc_html($image['caption']); ?></caption>
            </div>
        </div>
        <?php endforeach; ?>
        </div>
<?php
    endif;
    return ob_get_clean();
}

add_shortcode('post_gallery','post_gallery');
###############################################################
function post_gallery_slider($atts) {
    $atts = shortcode_atts( [
        'size_b' => 'horizon_thumb',
        'size_t' => 'horizon_thumb',
    ], $atts );
    $images = get_field('gallery_slider');
    if( $images ):
        ob_start();
        ?>
        <div class="gallerys_slider row">
            <?php foreach( $images as $k=>$image ): ?>

                <?php if($k == 0): ?>
                    <div class="col-12 gallery-slide full-width">
                        <div class="gitem">
                            <img src="<?php echo esc_url($image['sizes'][$atts['size_b']]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    </div>
                <?php else:?>
                    <div class="col-sm-6 gallery-slide">
                        <div class="gitem">
                            <img src="<?php echo esc_url($image['sizes'][$atts['size_t']]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    </div>
                <?php endif;?>


            <?php endforeach; ?>
        </div>
    <?php
    endif;
    return ob_get_clean();
}

add_shortcode('post_gallery_slider','post_gallery_slider');
###############################################################
function post_video_slider($atts) {
    $atts = shortcode_atts( [
        'size' => 'horizon_thumb',
    ], $atts );
    $videos = get_field('post_video_slider');
    if( $videos ):
        ob_start();
        ?>
        <div class="videos-blogs-container block-section">
            <div class="videos-slider">
                    <?php foreach( $videos as $video ): ?>

                        <div class="video_item">
                            <div class="wrap_video_item">

                                <?php echo $video['video']; ?>

        <!--                        <img src="--><?php //bloginfo('template_directory'); ?><!--/images/proposal_video.jpg" alt="" />-->
        <!--                        <a class="play_video" data-video="">-->
        <!--                            <svg width="45" height="52" viewBox="0 0 45 52" fill="none" xmlns="http://www.w3.org/2000/svg">-->
        <!--                                <path d="M1.06557 25.8994L0.965705 0.0342946L44.563 25.7314L1.16543 51.7644L1.06557 25.8994Z" fill="white"/>-->
        <!--                            </svg>-->
        <!---->
        <!--                        </a>-->
        <!--                        <div class="video_text">-->
        <!--                            <span>Proposal video</span>-->
        <!--                            <h2>BRITTANY AND ARTUR BROOKLYN PROPOSAL</h2>-->
        <!--                        </div>-->

                            </div>
                        </div>

                    <?php endforeach; ?>
            </div>
        </div>
    <?php
    endif;
    return ob_get_clean();
}

add_shortcode('post_video_slider','post_video_slider');
###############################################################


function post_proposal_packages($atts) {
    $atts = shortcode_atts( [
        'count' => 4,
    ], $atts );
    $packages = get_field('post_proposal_packages');
    if( $packages ):

        ob_start();
//        ?>


        <?php
        $my_posts = get_posts( array(
            'numberposts' => $atts['count'],
            'category'    => $packages->term_id,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        global $post;
?>
        <div class="custom-full-width blog-packages">
            <div class="container">
            <?php the_title('<h2 class="block-title">', '</h2>',)?>
                <div class="row row-blog-packages">
                <?php
                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="wrap_sproposal">
                            <?php  the_post_thumbnail('horizon_thumb') ?>
                            <div class="sp_text d-flex">
                                <h3><a href="<?php the_permalink();?>"><?php the_title()?></a></h3>
                                <span> $1500</span><?php ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }

                wp_reset_postdata(); // сброс
                ?>

                </div>
            </div>
        </div>
    <?php

    endif;
    return ob_get_clean();
}

add_shortcode('post_proposal_packages','post_proposal_packages');
###############################################################

/*
function blogs_section($atts) {
    $atts = shortcode_atts( [
        'count' => 4,
        'category'=>1,
        'exclude'=>[],
    ], $atts );
    $category = get_field('blogs_section');
    $category = $category[$atts['category'] - 1]?? null;
    if( $category ):

    $blog_posts = get_posts( array(
        'numberposts' => $atts['count'],
        'category'    => $category['blog_category']->term_id,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'include'     => array(),
        'exclude'     => $atts['exclude'],
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

        global $post;
        ob_start();
        get_template_part('parts/section', 'box-blogs', [
                'category'=> $category['blog_category'],
                'blog_posts' =>$blog_posts
            ]);
    endif;
    return ob_get_clean();
}

add_shortcode('blogs_section','blogs_section');
*/
###############################################################


function blogs_section_2($atts) {
    //return;
    //TODO: Сделать вывод блока
    $atts = shortcode_atts( [
        'count' => 4,
        'category'=>1,
        'exclude'=>[],
    ], $atts );
    $category = get_field('blogs_section_2')?? null;
   // $category = $category[$atts['category'] - 1]?? null;
    // TODO: разобраться почему ob_start() ломает верстку
    //ob_start();



    return ob_get_clean();
}

add_shortcode('blogs_section_2','blogs_section_2');
###############################################################


function blogs_section_videos($atts) {
    //TODO: Сделать вывод
    $atts = shortcode_atts( [
        'count' => 4,
        'category'=>1,
        'exclude'=>[],
    ], $atts );
    $category = get_field('blogs_section');
    $category = $category[$atts['category'] - 1]?? null;
    if( $category ):

        $blog_posts = get_posts( array(
            'numberposts' => $atts['count'],
            'category'    => $category['blog_category']->term_id,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => $atts['exclude'],
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        global $post;
        ob_start();
        get_template_part('parts/section', 'box-blogs-videos', [
            'category'=> $category['blog_category'],
            'blog_posts' =>$blog_posts
        ]);
    endif;
    return ob_get_clean();
}

add_shortcode('blogs_section_videos','blogs_section_videos');
###############################################################
function box_blogs_videos($atts) {
    $atts = shortcode_atts( [
//        'count' => 4,
//        'category'=>1,
//        'exclude'=>[],
    ], $atts );
    $box_blogs_videos = get_field('section_box_blogs_videos')?? null;


        global $post;
        ob_start();
        get_template_part('parts/section', 'box-blogs-videos', [
            'box_blogs_videos'=> $box_blogs_videos
        ]);
    return ob_get_clean();
}

add_shortcode('box_blogs_videos','box_blogs_videos');
###############################################################


