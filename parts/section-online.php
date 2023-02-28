<!-- section-online.php -->
<?php
$section_online_consult = get_field('section_online_consult')?? null;
$size = '';
?>
<?php if($section_online_consult): ?>
<section class="onlinec-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="wrap_onlinec_text">
                    <h2> <?= $section_online_consult['header'] ?></h2>
                    <?= $section_online_consult['text'] ?>
                    <div class="wrap_btn_big">
                        <a href="<?= $section_online_consult['link']['url']?>"><?= $section_online_consult['link']['title']?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wrap_onlinec_img">
                    <?= wp_get_attachment_image( $section_online_consult['image']?? '', $size ) ?>
                </div>

            </div>
        </div>
    </div>
</section>
<?php endif;?>
<!-- section-online.php /-->