<!-- content-row_toggle_features.php -->
<?php
$features_repeater = get_field('row_toggle_features_repeater')??
    get_field('row_toggle_features_repeater', SETTING_PAGE)?? null;
?>
<?php if($features_repeater): ?>
<div class="row row_toggle_features justify-content-center">
    <div class="col-lg-10 col-md-12 col-12">
        <div class="wrap_ccordions">

            <?php foreach ($features_repeater as $features): $row = $features['row_toggle_features'] ?>
            <div class="pcordion">
                <div class="acheader">
                    <h3><?= $row['header'] ?></h3>
                    <span>
                        <span class="abtn-close">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="8" x2="8" y2="14" stroke="black" stroke-width="2"/>
                            <line x1="15" y1="7" x2="1" y2="7" stroke="black" stroke-width="2"/>
                            <line x1="7" y1="1" x2="7" y2="15" stroke="black" stroke-opacity="0.19" stroke-width="2"/>
                            <line x1="14" y1="8" x2="9.53674e-07" y2="8" stroke="black" stroke-opacity="0.19" stroke-width="2"/>
                            </svg>
                        </span>
                        <span class="abtn-open">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="-1" x2="14" y2="-1" transform="matrix(0.707107 0.707107 -0.707166 0.707047 5 5.99963)" stroke="black" stroke-width="2"/>
                            <line y1="-1" x2="14" y2="-1" transform="matrix(-0.707107 0.707107 -0.707166 -0.707047 14.9995 4.00037)" stroke="black" stroke-width="2"/>
                            <line y1="-1" x2="14" y2="-1" transform="matrix(0.707107 0.707107 -0.707158 0.707056 5 8)" stroke="black" stroke-opacity="0.19" stroke-width="2"/>
                            <line y1="-1" x2="14" y2="-1" transform="matrix(-0.707107 0.707107 -0.707166 -0.707047 14.9995 6.00049)" stroke="black" stroke-opacity="0.19" stroke-width="2"/>
                            </svg>

                        </span>
                    </span>
                </div>
                <div class="acbody">
                    <?= $row['content'] ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<?php endif; ?>
<!-- content-row_toggle_features.php /-->