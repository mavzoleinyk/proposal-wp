<!-- section-builder.php -->
<?php
$tab_day = get_field('builder_tab_day')?? null;
$tab_night = get_field('builder_tab_night')?? null;
?>
<?php if($tab_day): ?>
<section class="builder-packages">
    <div class="container">
        <div class="row align-items-end row_builder_packages">




            <div class="col-lg-3 col-md-3">
                <div class="wrap_packages_price">
                    <span>Total price:</span>
                    <span class="bpprice">$<span id="total_price">0</span></span>
                </div>
            </div>



            <div class="col-lg-9 col-md-9">


                <div class="wrap_bp_tabs">




                    <div class="bp_tabs_title">
                        <a href="#daypackage" class="bpt_title active">Day</a>
                        <a href="#nightpackage" class="bpt_title">Night</a>
                    </div>



                    <div class="bp_tabs_content">





                        <div class="bpt_content active" id="daypackage">
                            <h3>Our packages</h3>
                            <form>
                                <div class="wrap_p_fields">


                                    <?php foreach($tab_day as $k=>$tab_row): ?>
                                    <?php $row = $tab_row['wrapper']; ?>
                                    <label>
                                        <input type="checkbox" name="package" value="pack_1" data-price="<?= $row['price'] ?>">

                                        <span class="wrap_bp_pack">
                                            <span class="pf_title">
                                                <span class="btn-checkbox"></span>
                                                <span><?= $row['light_header'] ?></span>
                                                <strong><?= $row['heder'] ?></strong>
                                            </span>
                                            <span class="pf_desc">
                                                <p><?= $row['description'] ?></p>
                                            </span>
                                            <span class="pf_price">$<?= $row['price'] ?></span>
                                        </span>
                                    </label>
                                    <?php endforeach;?>


<!--                                    <label>-->
<!--                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">-->
<!---->
<!--                                        <span class="wrap_bp_pack">-->
<!--                                            <span class="pf_title">-->
<!--                                                <span class="btn-checkbox"></span>-->
<!--                                                <span>Refined and Exclusive</span>-->
<!--                                                <strong>Inscription Expression</strong>-->
<!--                                            </span>-->
<!--                                            <span class="pf_desc">-->
<!--                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>-->
<!--                                            </span>-->
<!--                                            <span class="pf_price">$64,545</span>-->
<!--                                        </span>-->
<!--                                    </label>-->
<!--                                    <label>-->
<!--                                        <input type="checkbox" name="package" value="pack_1" data-price="64545" checked="checked">-->
<!---->
<!--                                        <span class="wrap_bp_pack">-->
<!--                                            <span class="pf_title">-->
<!--                                                <span class="btn-checkbox"></span>-->
<!--                                                <span>Refined and Exclusive</span>-->
<!--                                                <strong>Inscription Expression</strong>-->
<!--                                            </span>-->
<!--                                            <span class="pf_desc">-->
<!--                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>-->
<!--                                            </span>-->
<!--                                            <span class="pf_price">$64,545</span>-->
<!--                                        </span>-->
<!--                                    </label>-->
<!--                                    <label>-->
<!--                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">-->
<!---->
<!--                                        <span class="wrap_bp_pack">-->
<!--                                            <span class="pf_title">-->
<!--                                                <span class="btn-checkbox"></span>-->
<!--                                                <span>Refined and Exclusive</span>-->
<!--                                                <strong>Inscription Expression</strong>-->
<!--                                            </span>-->
<!--                                            <span class="pf_desc">-->
<!--                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>-->
<!--                                            </span>-->
<!--                                            <span class="pf_price">$64,545</span>-->
<!--                                        </span>-->
<!--                                    </label>-->
<!--                                    <label>-->
<!--                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">-->
<!---->
<!--                                        <span class="wrap_bp_pack">-->
<!--                                            <span class="pf_title">-->
<!--                                                <span class="btn-checkbox"></span>-->
<!--                                                <span>Refined and Exclusive</span>-->
<!--                                                <strong>Inscription Expression</strong>-->
<!--                                            </span>-->
<!--                                            <span class="pf_desc">-->
<!--                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>-->
<!--                                            </span>-->
<!--                                            <span class="pf_price">$64,545</span>-->
<!--                                        </span>-->
<!--                                    </label>-->
<!--                                    <label>-->
<!--                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">-->
<!---->
<!--                                        <span class="wrap_bp_pack">-->
<!--                                            <span class="pf_title">-->
<!--                                                <span class="btn-checkbox"></span>-->
<!--                                                <span>Refined and Exclusive</span>-->
<!--                                                <strong>Inscription Expression</strong>-->
<!--                                            </span>-->
<!--                                            <span class="pf_desc">-->
<!--                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>-->
<!--                                            </span>-->
<!--                                            <span class="pf_price">$64,545</span>-->
<!--                                        </span>-->
<!--                                    </label>-->
<!--                                    <label>-->
<!--                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">-->
<!---->
<!--                                        <span class="wrap_bp_pack">-->
<!--                                            <span class="pf_title">-->
<!--                                                <span class="btn-checkbox"></span>-->
<!--                                                <span>Refined and Exclusive</span>-->
<!--                                                <strong>Inscription Expression</strong>-->
<!--                                            </span>-->
<!--                                            <span class="pf_desc">-->
<!--                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>-->
<!--                                            </span>-->
<!--                                            <span class="pf_price">$64,545</span>-->
<!--                                        </span>-->
<!--                                    </label>-->
<!--                                    <label>-->
<!--                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">-->
<!---->
<!--                                        <span class="wrap_bp_pack">-->
<!--                                            -->
<!--                                            <span class="pf_title">-->
<!--                                                <span class="btn-checkbox"></span>-->
<!--                                                <span>Refined and Exclusive</span>-->
<!--                                                <strong>Inscription Expression</strong>-->
<!--                                            </span>-->
<!--                                            <span class="pf_desc">-->
<!--                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>-->
<!--                                            </span>-->
<!--                                            <span class="pf_price">$64,545</span>-->
<!--                                        </span>-->
<!--                                    </label>-->
<!--                                    <label>-->
<!--                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">-->
<!---->
<!--                                        <span class="wrap_bp_pack">-->
<!--                                            <span class="pf_title">-->
<!--                                                <span class="btn-checkbox"></span>-->
<!--                                                <span>Refined and Exclusive</span>-->
<!--                                                <strong>Inscription Expression</strong>-->
<!--                                            </span>-->
<!--                                            <span class="pf_desc">-->
<!--                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>-->
<!--                                            </span>-->
<!--                                            <span class="pf_price">$64,545</span>-->
<!--                                        </span>-->
<!--                                    </label>-->
<!--                                    <label>-->
<!--                                        <input type="checkbox" name="package" value="pack_1" data-price="64545" checked="checked">-->
<!---->
<!--                                        <span class="wrap_bp_pack">-->
<!--                                            <span class="pf_title">-->
<!--                                                <span class="btn-checkbox"></span>-->
<!--                                                <span>Refined and Exclusive</span>-->
<!--                                                <strong>Inscription Expression</strong>-->
<!--                                            </span>-->
<!--                                            <span class="pf_desc">-->
<!--                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>-->
<!--                                            </span>-->
<!--                                            <span class="pf_price">$64,545</span>-->
<!--                                        </span>-->
<!--                                    </label>-->
<!--                                    -->



                                </div>

                            </form>
                        </div>



                        <div class="bpt_content" id="nightpackage">
                            <h3>Our packages -Night</h3>
                            <form>
                                <div class="wrap_p_fields">

                                    <?php foreach($tab_night as $k=>$tab_row): ?>
                                        <?php $row = $tab_row['wrapper']; ?>
                                        <label>
                                            <input type="checkbox" name="package" value="pack_1" data-price="<?= $row['price'] ?>">

                                            <span class="wrap_bp_pack">
                                            <span class="pf_title">
                                                <span class="btn-checkbox"></span>
                                                <span><?= $row['light_header'] ?></span>
                                                <strong><?= $row['heder'] ?></strong>
                                            </span>
                                            <span class="pf_desc">
                                                <p><?= $row['description'] ?></p>
                                            </span>
                                            <span class="pf_price">$<?= $row['price'] ?></span>
                                        </span>
                                        </label>
                                    <?php endforeach;?>




<!--

                                    <label>
                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">

                                        <span class="wrap_bp_pack">
                                            <span class="pf_title">
                                                <span class="btn-checkbox"></span>
                                                <span>Refined and Exclusive</span>
                                                <strong>Inscription Expression</strong>
                                            </span>
                                            <span class="pf_desc">
                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>
                                            </span>
                                            <span class="pf_price">$64,545</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="package" value="pack_1" data-price="64545" checked="checked">

                                        <span class="wrap_bp_pack">
                                            <span class="pf_title">
                                                <span class="btn-checkbox"></span>
                                                <span>Refined and Exclusive</span>
                                                <strong>Inscription Expression</strong>
                                            </span>
                                            <span class="pf_desc">
                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>
                                            </span>
                                            <span class="pf_price">$64,545</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">

                                        <span class="wrap_bp_pack">
                                            <span class="pf_title">
                                                <span class="btn-checkbox"></span>
                                                <span>Refined and Exclusive</span>
                                                <strong>Inscription Expression</strong>
                                            </span>
                                            <span class="pf_desc">
                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>
                                            </span>
                                            <span class="pf_price">$64,545</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">

                                        <span class="wrap_bp_pack">
                                            <span class="pf_title">
                                                <span class="btn-checkbox"></span>
                                                <span>Refined and Exclusive</span>
                                                <strong>Inscription Expression</strong>
                                            </span>
                                            <span class="pf_desc">
                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>
                                            </span>
                                            <span class="pf_price">$64,545</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">

                                        <span class="wrap_bp_pack">
                                            <span class="pf_title">
                                                <span class="btn-checkbox"></span>
                                                <span>Refined and Exclusive</span>
                                                <strong>Inscription Expression</strong>
                                            </span>
                                            <span class="pf_desc">
                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>
                                            </span>
                                            <span class="pf_price">$64,545</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">

                                        <span class="wrap_bp_pack">
                                            <span class="pf_title">
                                                <span class="btn-checkbox"></span>
                                                <span>Refined and Exclusive</span>
                                                <strong>Inscription Expression</strong>
                                            </span>
                                            <span class="pf_desc">
                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>
                                            </span>
                                            <span class="pf_price">$64,545</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">

                                        <span class="wrap_bp_pack">
                                            
                                            <span class="pf_title">
                                                <span class="btn-checkbox"></span>
                                                <span>Refined and Exclusive</span>
                                                <strong>Inscription Expression</strong>
                                            </span>
                                            <span class="pf_desc">
                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>
                                            </span>
                                            <span class="pf_price">$64,545</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="package" value="pack_1" data-price="64545">

                                        <span class="wrap_bp_pack">
                                            <span class="pf_title">
                                                <span class="btn-checkbox"></span>
                                                <span>Refined and Exclusive</span>
                                                <strong>Inscription Expression</strong>
                                            </span>
                                            <span class="pf_desc">
                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>
                                            </span>
                                            <span class="pf_price">$64,545</span>
                                        </span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="package" value="pack_1" data-price="64545" checked="checked">

                                        <span class="wrap_bp_pack">
                                            <span class="pf_title">
                                                <span class="btn-checkbox"></span>
                                                <span>Refined and Exclusive</span>
                                                <strong>Inscription Expression</strong>
                                            </span>
                                            <span class="pf_desc">
                                                <p>The essence of refined elegance and responsible luxury. With exterior chrome detailing and our standard Momentum interior.</p>
                                            </span>
                                            <span class="pf_price">$64,545</span>
                                        </span>
                                    </label>

-->


                                </div>

                            </form>
                        </div>






                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- section-builder.php /-->

