<!-- section-spring-special.php-->
<?php
$special_sutout = get_field('special_sutout');
$section_special = get_field('section_special');
$special_header = $section_special['special_header'];
$products = $section_special['special_repeater'];
$size = '';

?>
<?php if ($special_sutout):?>
<section class="spring-spcial-section block-section">
    <div class="container">
        <div class="row row_header_section justify-content-center">
            <div class="col-lg-7 col-md-12 col-12">
                <div class="wrap_heaer_section">
                <?= $special_header ?>
                </div>
            </div>
        </div>
        <div class="row row_spring_spcial justify-content-center ">
            <div class="col-lg-11 col-md-12">
                <div class="sspcials">

                    <?php foreach ($products as $special_proposal): $products_id = $special_proposal['special_proposal'] ?>
                    <div class="sspcial">
                        <div class="wrap_sspcial">
                            <?= get_the_post_thumbnail($products_id, $size)  ?>
                            <div class="wrap_sspcial_content d-flex">
                                <div class="sspcial_text">
                                    <h2><?= get_the_title($products_id) ?></h2>
                                    <?= get_the_excerpt($products_id) ?>
                                    <div class="wrap_btn_big btn-bg">
                                        <a href="<?= get_post_permalink($products_id);?>">Check availabilty</a>
                                    </div>
                                </div>
                                <span class="sspcial_price">$<?= get_post_meta( $products_id, '_regular_price', true) ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>

    </div>
</section>
<?php endif; ?>
<!-- section-spring-special.php /-->