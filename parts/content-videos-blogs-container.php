<!-- content-videos-blogs-container.php -->
<?php
    $videos = get_field('post_video_slider');
    if( $videos ):
        ?>
        <div class="videos-blogs-container block-section">
            <div class="videos-slider">
                    <?php foreach( $videos as $video ): ?>

                        <div class="video_item">
                            <div class="wrap_video_item">

                                <?php echo $video['video']; ?>

                            </div>
                        </div>

                    <?php endforeach; ?>
            </div>
        </div>
    <?php
    endif;
    ?>
<!-- content-videos-blogs-container.php /-->