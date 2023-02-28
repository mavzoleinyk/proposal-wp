<!-- content-blogs-portfolio.php -->
<?php
    $images = get_field('big_gallery');
    if( $images ):
        ?>
        <div class="blogs-portfolio block-section">
            <h2 class="block-title">Gallery</h2>

            <div class="row row_portfolio">
                <div class="portfolio">
                    <?php foreach( $images as $image ): ?>

                        <div class="portolio-item">
                            <div class="wrap_pitem">
                                <img src="<?php echo esc_url($image['sizes']['horizon_thumb']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <p><?php echo esc_textarea($image['description'])?></p>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php
    endif;
?>

<!-- content-blogs-portfolio.php /-->