<!-- section-mpnyc.php -->
<?php
$mpnyc_section = get_field('mpnyc_section', SETTING_PAGE) ;
$size = 'horizontal_thumb';
//$mpnyc_section_link = get_field('mpnyc_section_link')?? null;
?>
<?php if($mpnyc_section): ?>
<section class="mpnyc-section">
    <div class="container">
        <div class="row row_header_section justify-content-center">
            <div class="col-12">
                <div class="wrap_heaer_section">
                    <?= !empty($mpnyc_section['mpnyc_section_header']) ? '<h2>'.$mpnyc_section['mpnyc_section_header'] .'</h2>' : '' ?>

                </div>
            </div>
        </div>
        <div class="row rowmpnyc">
            <div class="col-md-6 col-12">
                <div class="wrap_mpny_image">
                    <?= wp_get_attachment_image( $mpnyc_section['mpnyc_section_image']?? '', $size ) ?>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 col-12">
                <div class="wrap_mpny_text">
                    <?= !empty($mpnyc_section['mpnyc_section_text']) ? $mpnyc_section['mpnyc_section_text'] : '' ?>
                    <div class="wrap_btn_big">
                        <a href="<?= $mpnyc_section['mpnyc_section_link']['url'] ?>"><?= !empty($mpnyc_section['mpnyc_section_link']['url']) ? $mpnyc_section['mpnyc_section_link']['title'] : 'Lets have a call, shall we?' ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- section-mpnyc.php -->
