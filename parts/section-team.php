<!-- section-team.php -->
<?php
$our_team = get_field('section_team')?? get_field('section_team', SETTING_PAGE)? : null;
$size = 'full';

?>
<?php if($our_team): ?>
<section class="team-section">
    <div class="container">
        <div class="row row_header_section justify-content-center">
            <div class="col-lg-5 col-md-8 col-12">
                <div class="wrap_heaer_section">
                    <h2><?= $our_team['section_team_header'] ?></h2>

                </div>
            </div>
        </div>
        <div class="row row_image_team">
            <div class="team_image">
                <?= wp_get_attachment_image( $our_team['section_team_image']?? '', $size ) ?>
            </div>
        </div>
        <div class="row row_team_features">
            <?php foreach ($our_team['section_team_text_thumbs'] as $text_thumb):?>
            <div class="col-md-3 col-12">
                <div class="wrap_team_f">
                    <div class="title"><?= $text_thumb['text_thumb_header']?></div>
                    <p><?= $text_thumb['text_thumb_content']?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- section-team.php -->