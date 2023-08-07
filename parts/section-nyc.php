<!-- section-nyc.php -->
<?php
$size = $args['size']?? 'vertical_thumb';
$num = $args['num']?? null;

if($num == 1){
    $proposal_guide_header      = get_field('proposal_guide_header')?? null;
    $proposal_guide_repeater    = get_field('proposal_guide_repeater')?? null ;
}elseif($num == 2){
    $proposal_guide_header      = get_field('proposal_guide_header_2')?? null;
    $proposal_guide_repeater    = get_field('proposal_guide_repeater_2')?? null ;
}else{
    $proposal_guide_header = null;
    $proposal_guide_repeater = null;
}

?>
<?php if ($num && ($proposal_guide_header?? null || $proposal_guide_repeater?? null) ): ?>
<section class="nyc-section">
    <div class="container">

        <?php if ($proposal_guide_header ): ?>
            <div class="row row_header_section justify-content-center">
                <div class="col-lg-7 col-md-8 col-12">
                    <div class="wrap_heaer_section">
                        <?= $proposal_guide_header;?>
                    </div>
                </div>
            </div>
        <?php endif;?>

        <?php if ($proposal_guide_repeater ): ?>
            <div class="row row_nyc_proposal">
            <div class="col-12">
                <div class="nycproposals">

                    <?php foreach($proposal_guide_repeater as $item): ?>
                    <?php $item = $item['proposal_guide_block']?>
                    <div class="nycproposal">
                        <a href="<?php echo $item['link']['url']?? '' ?>">
                            <?php echo wp_get_attachment_image( $item['image']['id']?? '', $size )?>
                        </a>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <?php endif; ?>

    </div>
</section>
<?php endif;?>
<!-- section-nyc.php /-->