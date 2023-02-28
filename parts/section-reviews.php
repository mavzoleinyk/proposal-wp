<!-- section-reviews.php -->
<?php
$section_review_header = get_field('section_review_header')?? get_field('section_review_header', SETTING_PAGE)?? null;
$section_reviews = get_field('section_review_repeater')?? get_field('section_review_repeater', SETTING_PAGE)?? null;
$size = 'thumbnail';
?>
<?php if($section_review_header && $section_reviews): ?>
<section class="reviews-section">
    <div class="container">
        <div class="row row_header_section justify-content-center">
            <div class="col-lg-5 col-md-8 col-12">
                <div class="wrap_heaer_section">
                    <h2><?= $section_review_header ?></h2>

                </div>
            </div>
        </div>
        <div class="row row_reviews">
            <div class="col-12">
                <div class="wrap_reviews">

                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 col-12">
                            <div class="reviews-nav">
                                <?php foreach($section_reviews as $review): ?>
                                <div class="wrap_review_nav">
                                    <div class="wrap_nimage">
                                        <?= wp_get_attachment_image( $review['icon']?? '', $size ) ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="reviews">

                        <?php foreach($section_reviews as $review): ?>
                        <div class="review">
                            <div class="review_content">
                                <?= $review['text'] ?>
                                <div class="review_name">
                                    <h4><?= $review['name'] ?></h4>
                                    <p><?= $review['vacancy'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- section-reviews.php /-->