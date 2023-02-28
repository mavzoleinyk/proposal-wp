<!-- section-ppny.php -->
<?php
$num = $args['num']?? 1;
$num -= 1;
$section_ppny = get_field('section_ppny_repeater');
$section_ppny = $section_ppny[$num]?? null;
?>
<?php if($section_ppny): ?>
<section class=" block-section ppny-section">
    <div class="container">

        <div class="row row_header_section justify-content-center">
            <div class="col-lg-6 col-md-10 col-12">
                <div class="wrap_heaer_section">
                    <?= $section_ppny['description'] ?>
                    <div class="wrap_btn_big btn-bg">
                        <a href="<?= $section_ppny['link']['url'] ?>"><?= $section_ppny['link']['title'] ?></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php endif; ?>
<!-- section-ppny.php /-->