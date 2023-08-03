<!-- section-testmonail-parteners.php -->
<?php
$partners = get_field('partners')['partner_logo']?? get_field('partners', SETTING_PAGE)['partner_logo']?? null;
$testmonails = get_field('partners')['testmonail']?? get_field('partners', SETTING_PAGE)['testmonail']?? null;
// variable block is a block indent
$args['block'] = $args['block']?? null;
$args['testmonails'] = $args['testmonails']?? $testmonails;

$testmonails = !$args['testmonails']? false : $testmonails;
?>

<?php if($testmonails || $partners): ?>
<section class="<?php echo $args['block']?  'block-section' : ''?> testmonail-parteners">
    <div class="container">

        <?php if($partners): ?>
                    <div class="row row_parteners">
                        <div class="col-12">
                            <div class="wrap_parteners_logs">
                                <ul class="d-flex">
                                    <?php foreach ($partners as $partner): ?>
                                        <li>
                                            <a href="#"><img src="<?php echo $partner['partner']['url']; ?>" alt="<?php echo $partner['partner']['alt']; ?>" /></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

        <?php endif; ?>


        <?php if($testmonails): ?>
        <div class="row row_testmonail">
            <div class="col-12">
                <div class="wrap_testmonails">
                    <div class="testmonails">

                        <?php foreach ($testmonails as $testmonail): ?>
                        <div class="testmonail">
                            <div class="row row_t justify-content-center">
                                <div class="col-lg-7 col-md-10 col-10">
                                    <div class="wrap_testmonail">
                                        <p><?php echo $testmonail['testmonail']['testmonail']?></p>
                                        <span class="testmonail-name">
                                        <?php echo $testmonail['testmonail']['testmonail_name']?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>
<!-- section-testmonail-parteners.php /-->