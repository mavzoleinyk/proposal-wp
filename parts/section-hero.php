<!-- section-hero.php -->
<?php if(has_post_thumbnail()):?>
<section class="home-hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrap_home_hero"
                     style="background: url(<?= get_the_post_thumbnail_url() ?>) center center;">

                                         <?php // the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- section-home-hero.php /-->