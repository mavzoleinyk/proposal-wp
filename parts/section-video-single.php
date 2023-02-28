<!-- section-video-single.php -->
<?php
$single_video = get_field('single_video')?? null;
?>
<?php if($single_video): ?>
<section class="vabout-section block-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about_video_wrap">
                    <?= $single_video ?>
                    <span class="overlay-bg"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- section-video-single.php /-->