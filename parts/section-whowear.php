<!-- section-whowear.php -->
<?php
$whowear = get_field('whowear')?? null;
$image_size = 'horizontal_thumb';
$whowear_image = $whowear['image']['sizes'][$image_size];
$whowear_image_alt = $whowear['image']['alt'];
$whowear_text = $whowear['text'];
?>
<?php if($whowear): ?>
<section class="whowear-section block-section">
    <div class="container">
        <div class="row row_header_section justify-content-center">
            <div class="col-lg-7 col-md-12 col-12">
                <div class="wrap_heaer_section">
                    <h2 class="pb-0">Who we are?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="wrap_whoware_img">
                    <img src="<?= $whowear_image ?>" alt="<?= $whowear_image_alt ?>" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="wrap_whoweare_text">
                        <?= $whowear_text ?>
                </div>
            </div>
        </div>

    </div>
</section>
<?php endif; ?>
<!-- section-whowear.php /-->