<?php
/*
Template Name: Шаблон Blog
Template Post Type: page
*/
get_header();
?>

<section class="breadcrumbs-section">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <!-- <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="index.html">Proposal packages</a></li>
                      <li><span>  Premium light the night    </span></li>
                  </ul> -->
              </div>
          </div>
      </div>
  </section>
  <section class="hero-blog">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="wrap_hero_blog">
                      <img src="<?php bloginfo('template_directory'); ?>/assets/images/hero-blog.jpg" alt="" />
                      <div class="wrap_hero_blog_content">
                          <span>23 July 2021</span>
                          <h2><a href="blog-post.html">Top 5 new secret marriage proposal locations in New York</a></h2>
                      </div>
                      <span class="custom-overlay-bg"></span>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="box-blogs-section block-section">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="box-blog-title">
                      <h2>Manhattan</h2>
                  </div>
                  <div class="row row-box-blogs">
                    <?php
                    
                        $query = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 16,
                            'category_name' => 'manhattan',
                        ));
                    
                    ?>
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="blog-itme col-md-3 col-sm-6">
                            <div class="wrap_blog_item" itemscope itemtype="http://schema.org/Article">
                                <a href="<?php the_permalink(); ?>" class="blog-img">
                                <?php
                                    if( has_post_thumbnail() ) {
                                        $img_url = get_the_post_thumbnail_url();
                                    }else{
                                        $img_url = 'https://picsum.photos/310/221';
                                    }
                                ?>
                                    <img src="<?php echo $img_url; ?>" itemprop="image" alt="<?php the_title(); ?> - фото">
                                </a>
                                <div class="wrap_blog_text">
                                    <?php the_category(); ?>
                                    <h2 itemprop="headline"><a href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></h2>
                                        <span itemprop="dateCreated"><?php echo get_the_date( 'j F Y' ); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; else: ?>
                    <?php endif; wp_reset_query(); ?>
                  </div>
                  <!-- <div class="row loadmore-row">
                      <div class="col-12">
                        <div class="wrap_btn_big ">
                            <a href="#">load more</a>
                        </div>
                      </div>
                  </div> -->
              </div>
          </div>
      </div>
  </section>

  <section class="box-blogs-section-2 box-blogs-section block-section">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="box-blog-title">
                      <h2>Brooklyn Bridge</h2>
                  </div>
              </div>
          </div>
          <div class="row row-box-blogs-2">
              <div class="col-lg-5 col-md-6">
                  <div class="wrap_box_blogs_2_imgs">
                      <div class="wboxblogs_2_big_img">
                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/bblog.jpg" alt="" />
                      </div>
                      <div class="wboxblogs_2_small_img">
                        <span><img src="<?php bloginfo('template_directory'); ?>/assets/images/bblog.jpg" alt="" /></span>
                        <span><img src="<?php bloginfo('template_directory'); ?>/assets/images/bblog.jpg" alt="" /></span>
                        <span><img src="<?php bloginfo('template_directory'); ?>/assets/images/bblog.jpg" alt="" /></span>
                        <span><img src="<?php bloginfo('template_directory'); ?>/assets/images/bblog.jpg" alt="" /></span>
                    </div>
                  </div>
              </div>
              <div class="col-lg-7 col-md-6">
                  <div class="wrap_blogs_box_2_blogs">
                    <?php
                        
                        $query = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'category_name' => 'brooklyn-bridge',
                        ));
                        
                    ?>
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="wrap_blog_text" itemscope itemtype="http://schema.org/Article">
                        <?php the_category(); ?>
                        <h2 itemprop="headline"><a href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></h2>
                        <div class="excerpt" itemprop="description">
                            <?php the_excerpt(); ?>
                        </div>
                        <span itemprop="dateCreated"><?php echo get_the_date( 'j F Y' ); ?></span>
                    </div>
                    <?php endwhile; else : ?>
                    <?php endif; wp_reset_query(); ?>
                  </div>
              </div>

          </div>
      </div>

  </section>

  <section class="blog-blogs-videos box-blogs-section block-section">
      <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box-blog-title">
                    <h2>Proposal video</h2>
                </div>
            </div>
        </div>
        <div class="row row_videos row_videos_slider">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="wrap_video_content">
                      <div class="wvideo_img">
                          <a href="#" class="play_video_icon">
                              <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.0683339 11L0.0683352 0.931665L16.8701 11L0.0683327 21.0683L0.0683339 11Z" fill="white"/>
                              </svg>
                          </a>
                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/video_1.jpg" alt="" />
                    </div>
                    <div class="wvideo_text">
                        <h2>Matt and Amy romantic proposal at the Rockefeller centrer</h2>
                    </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="wrap_video_content">
                      <div class="wvideo_img">
                          <a href="#" class="play_video_icon">
                              <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.0683339 11L0.0683352 0.931665L16.8701 11L0.0683327 21.0683L0.0683339 11Z" fill="white"/>
                              </svg>
                          </a>
                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/video_1.jpg" alt="" />
                    </div>
                    <div class="wvideo_text">
                        <h2>Matt and Amy romantic proposal at the Rockefeller centrer</h2>
                    </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
              <div class="wrap_video_content">
                    <div class="wvideo_img">
                        <a href="#" class="play_video_icon">
                            <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.0683339 11L0.0683352 0.931665L16.8701 11L0.0683327 21.0683L0.0683339 11Z" fill="white"/>
                            </svg>
                        </a>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/video_2.jpg" alt="" />
                  </div>
                  <div class="wvideo_text">
                      <h2>Matt and Amy romantic proposal at the Rockefeller centrer</h2>
                  </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-12">
              <div class="wrap_video_content">
                    <div class="wvideo_img">
                        <a href="#" class="play_video_icon">
                            <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.0683339 11L0.0683352 0.931665L16.8701 11L0.0683327 21.0683L0.0683339 11Z" fill="white"/>
                            </svg>
                        </a>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/video_3.jpg" alt="" />
                  </div>
                  <div class="wvideo_text">
                      <h2>Matt and Amy romantic proposal at the Rockefeller centrer</h2>
                  </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-12">
              <div class="wrap_video_content">
                    <div class="wvideo_img">
                        <a href="#" class="play_video_icon">
                            <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.0683339 11L0.0683352 0.931665L16.8701 11L0.0683327 21.0683L0.0683339 11Z" fill="white"/>
                            </svg>
                        </a>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/video_4.jpg" alt="" />
                  </div>
                  <div class="wvideo_text">
                      <h2>Matt and Amy romantic proposal at the Rockefeller centrer</h2>
                  </div>
            </div>
          </div>
        </div>
      </div>

  </section>

<section class="box-blogs-section block-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box-blog-title">
                    <h2>Central Park1</h2>
                </div>
                <div class="row row-box-blogs row-box-blogs-centeral">
                    <?php
                        
                        $query = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 16,
                            'category_name' => 'central-park',
                        ));
                    
                    ?>
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                      <div class="blog-itme col-md-3 col-sm-6">
                          <div class="wrap_blog_item" itemscope itemtype="http://schema.org/Article">
                              <a href="<?php the_permalink(); ?>" class="blog-img" itemprop="url">
                                <?php
                                    if( has_post_thumbnail() ) {
                                        $img_url = get_the_post_thumbnail_url();
                                    }else{
                                        $img_url = 'https://picsum.photos/540/250';
                                    }
                                ?>
                                <img src="<?php echo $img_url; ?>" itemprop="image" alt=" <?php the_title(); ?> - фото">
                              </a>
                              <div class="wrap_blog_text">
                                  <?php the_category(); ?>
                                  <h2 itemprop="headline"><a href="<?php the_permalink(); ?>" itemprop="url">Sunset penthouse marriage proposal</a></h2>
                                      <span itemprop="dateCreated"><?php echo get_the_date( 'Y-m-d' ); ?></span>
                              </div>
                          </div>
                      </div>
                    <?php endwhile; else :?>
                    <?php endif; wp_reset_query();?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blogs-packes-section">
    <div class="container">
        <div class="blog-packages">
            
                <h2 class="block-title">Proposal packages</h2>
                <div class="row row-blog-packages">
    
                    <div class="col-md-3 col-sm-6">
                        <div class="wrap_sproposal">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/ssp_1.jpg" alt="" />
                            <div class="sp_text d-flex">
                                <h3><a href="#">Premium Flower Heart</a></h3>
                                <span> $1500</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="wrap_sproposal">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/ssp_2.jpg" alt="" />
                            <div class="sp_text d-flex">
                                <h3><a href="#">Premium Flower Heart</a></h3>
                                <span> $1500</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="wrap_sproposal">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/ssp_3.jpg" alt="" />
                            <div class="sp_text d-flex">
                                <h3><a href="#">Premium Flower Heart</a></h3>
                                <span> $1500</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="wrap_sproposal">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/ssp_4.jpg" alt="" />
                            <div class="sp_text d-flex">
                                <h3><a href="#">Premium Flower Heart</a></h3>
                                <span> $1500</span>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
</section>

<?php

get_footer();

?>