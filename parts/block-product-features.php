<!-- block-product-features.php -->
<?php

$product_features = get_field('block_product_features')?? null;
$size = 'horizon_thumb';
?>


<?php
//print_r($product_features);
// if($product_features && count($product_features['repeater']?? 0) > 0) :

 if($product_features && $product_features['repeater'] > 0) :

//if($product_features) : ?>
<div class="custom-full-width blog-packages product-features">
    <div class="container">
        <h2 class="block-title"><?= $product_features['header'] ?></h2>

        <?php foreach ($product_features['repeater'] as $k=>$feature): ?>
            <?php if($k%2 == 0): ?>
                <div class="row row_pfeatrues justify-content-evenly align-items-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="wrap_pf_txt">
                            <h5><?= $feature['header'] ?></h5>
                            <p><?= $feature['text'] ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="wrap_pf_img">
                            <?= wp_get_attachment_image( $feature['image'], $size ); ?>

                        </div>
                    </div>

                </div>
            <?php else: ?>
                <div class="row row_pfeatrues justify-content-evenly align-items-center right_text">
                    <div class="col-lg-4 col-sm-6">
                        <div class="wrap_pf_img">
                            <?= wp_get_attachment_image( $feature['image'], $size ); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="wrap_pf_txt">
                            <h5><?= $feature['header'] ?></h5>
                            <p><?= $feature['text'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php if($product_features['footer']): ?>
        <div class="row row_pfeatrues justify-content-center row_pfeatures_one_column">
            <div class="col-lg-5 col-md-6">
                <div class="wrap_pf_txt ">
                    <?= $product_features['footer'] ?>
                </div>
            </div>

        </div>
        <?php endif; ?>

    </div>
</div>

<?php endif; ?>

<!-- block-product-features.php /-->
