<!-- section-parteners.php -->
<?php
$partners = $args['partners']?? [];
?>
<?php if($partners): ?>
<section class="parteners-section">
    <div class="container">
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

    </div>
</section>
<?php endif; ?>
<!-- section-parteners.php /-->