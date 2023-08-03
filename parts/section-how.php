<!-- section-how.php -->
<?php
$section_how_header = get_field('section_how_header')?? get_field('section_how_header', SETTING_PAGE)?? null ;
$section_how_repeater = get_field('section_how_repeater')?? get_field('section_how_repeater', SETTING_PAGE)?? null ;
?>
<?php if($section_how_repeater): ?>
<section class="how-section">
    <div class="container">
        <div class="row row_header_section justify-content-center">
            <div class="col-12">
                <div class="wrap_heaer_section">
                    <h2><?= $section_how_header ?></h2>
                </div>
            </div>
        </div>
        <div class="row row_how_properties">

            <?php foreach ($section_how_repeater as $how_thumb): ?>
            <div class="col-md-4 col-12">

                <div class="wrap_col_property">
                    <div class="pro_icon">
                        <?= $how_thumb['ico'] ?>
                    </div>
                    <p class="title"><?= $how_thumb['header'] ?></p>
                    <?= $how_thumb['text'] ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<?php endif; ?>
<!-- section-how.php / -->