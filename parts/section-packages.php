<!-- section-packages.php -->
<?php
$header = get_field('header_block')?? null;
$images_block = get_field('images_block')?? null;
$learn_link = get_field('learn_link')?? null;
$size = 'large_thumb';
?>
<?php if($header || $images_block): ?>
<section class="packages-section">
    <div class="container">


        <?php if($header):?>
        <div class="row row_header_section justify-content-center">
            <div class="col-lg-6 col-md-10 col-12">
                <div class="wrap_heaer_section">
                        <?php echo $header ?>
                </div>
            </div>
        </div>
        <?php endif;?>


        <?php if($images_block[0] and $images_block[1] and $images_block[2]):?>
        <div class="row row_packages">

            <?php if($images_block[0]):?>
            <div class="block_1 col-12">
                <div class="wrap_package full_package">
                    <a href="<?php echo $images_block[0]['link']?>">
                        <?php echo wp_get_attachment_image($images_block[0]['image']['ID'], 'full' ); ?>

                        <h3><?php echo $images_block[0]['header'] ?></h3>
                    </a>
                </div>
            </div>
            <?php endif;?>
            <?php if($images_block[1]):?>
            <div class="block_2 col-lg-7 col-md-7 col-12">
                <div class="wrap_package half_big_package">
                    <a href="<?php echo $images_block[1]['link']?>">
                        <?php echo wp_get_attachment_image($images_block[1]['image']['ID'], 'full' ); ?>
                        <h3><?php echo $images_block[1]['header'] ?></h3>
                    </a>
                </div>

            </div>
             <?php endif;?>
            <?php if($images_block[2]):?>
            <div class="block_3 col-lg-5 col-md-5 col-12">
                <div class="wrap_package half_package">
                    <a href="<?php echo $images_block[2]['link']?>">
                        <?php echo wp_get_attachment_image($images_block[2]['image']['ID'], 'full' ); ?>
                        <h3><?php echo $images_block[2]['header'] ?></h3>
                    </a>
                </div>

            </div>
             <?php endif;?>
        </div>
        <?php endif;?>


        <div class="row">
            <div class="col-12">
                <div class="wrap_btn_big">
                    <a target="<?php echo $learn_link['target']?? '_self' ?>" href="<?php echo $learn_link['url']?? '' ?>"><?php echo $learn_link['title']?? '' ?></a>
                </div>
            </div>
        </div>


        <?php
        $rows_proposal = get_field('row_proposal')?? null;
        ?>

        <?php if($rows_proposal): ?>
        <div class="row row_proposal">


            <?php foreach ($rows_proposal as $block): ?>
                <?php $block = (object)$block['block']?>
                <div class="col-md-6 col-12">
                    <div class="wrap_proposal_content">
                        <p class="h2"><?php echo $block->header ?></p>
                        <div class="wrap_proposal_img">
                            <a href="<?= $block->link['url']?? '#'?>">
                                <?php echo wp_get_attachment_image($block->image['id']?? '', $size ); ?>
                            </a>
                        </div>
                        <div class="proposal_link header_link"><a href="<?= $block->link['url']?? '#'?>">LEARN MORE</a></div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>
<!-- section-packages.php -->
