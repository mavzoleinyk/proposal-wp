<!-- section-marriage.php -->
<?php
$num = $args['num']?? 1;
$smarriage_repeater = get_field('smarriage_repeater')?? null;
$block = $smarriage_repeater[$num-1]['block']?? null;
?>
<?php if($num && $block): ?>
<section class="block-section marriage-section">
    <div class="container">
        <div class="row row_header_section justify-content-center">
            <div class="col-lg-7 col-md-12 col-12">
                <div class="wrap_heaer_section">
                    <?= $block['content']?? '' ?>
                    <div class="wrap_btn_big">
                        <a href="<?= $block['link']['url']?? '' ?>">
                            <?= $block['link']['title'] != ''? $block['link']['title'] : 'Lets have a call, shall we?' ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- section-marriage.php /-->