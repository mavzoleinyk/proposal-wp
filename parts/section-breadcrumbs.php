<!-- section-breadcrumbs.php -->
<section class="breadcrumbs-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if(function_exists('woocommerce_breadcrumb')): ?>
                <?php woocommerce_breadcrumb([
                       // 'delimiter'   => '&nbsp;&#47;&nbsp;',
                        'delimiter'   => '',
                        'wrap_before' => '<ul class="woocommerce-breadcrumb">',
                        'wrap_after'  => '</ul>',
                        'before'      => '<li>',
                        'after'       => '</li>',
                        'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
                ]) ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- section-breadcrumbs.php / -->

<?php

//if ( function_exists('yoast_breadcrumb') ) {
//    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
//}