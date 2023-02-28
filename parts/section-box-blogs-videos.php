<!-- section-box-blogs-videos.php -->
<?php
$section_box_blogs_videos = $section_box_blogs_videos??  get_field('section_box_blogs_videos')?? null;

?>
<?php if($section_box_blogs_videos && is_array($section_box_blogs_videos)): ?>
<section class="blog-blogs-videos box-blogs-section block-section">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="box-blog-title">
                    <h2><?= $section_box_blogs_videos['section_box_blogs_videos_header'] ?></h2>
                </div>
            </div>
        </div>

        <div class="row row_videos row_videos_slider">

            <?php foreach ($section_box_blogs_videos['section_box_blogs_videos_repeater'] as $box_videos):?>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="wrap_video_content">
                    <?= $box_videos['video'] ?>
                    <div class="wvideo_text">
                        <h2><?= $box_videos['text'] ?></h2>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>

</section>
<?php endif; ?>
<!-- section-box-blogs-videos.php /-->