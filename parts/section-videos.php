<!-- section-videos.php-->
<?php
$videos  = get_field('videos')?? null;
?>




<?php if($videos): ?>
<section class=" block-section videos-section">
    <div class="container">
        <div class="row row_videos">





            <?php foreach( $videos as $video ):?>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="wrap_video_content">
                    <?= $video['video'] ?>
<!--                    <div class="wvideo_img">-->
<!--                        <a href="--><?php //the_permalink(); ?><!--" class="play_video_icon">-->
<!--                            <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M0.0683339 11L0.0683352 0.931665L16.8701 11L0.0683327 21.0683L0.0683339 11Z" fill="white"/>-->
<!--                            </svg>-->
<!--                        </a>-->
<!--                        --><?php //the_post_thumbnail('horizon_thumb'); ?>
<!--                    </div>-->
                 </div>
                <div class="wvideo_text">
                    <h2><?= $video['header']?? '' ?></h2>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<?php endif; ?>
<!-- section-videos.php /-->