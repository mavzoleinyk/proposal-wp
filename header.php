<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proposal 007</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&family=Roboto:ital,wght@0,300;0,400;0,700;1,500&display=swap" rel="stylesheet">


    <!--link rel="stylesheet" href="css/main.css" media="all">
    <link rel="stylesheet" href="css/media.css" media="all"-->
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5 col-12 col-covid-19">
                    <div class="wrap_covid_info">
                        We are open. <a href="<?php the_permalink(7493);?>">View current Covid-19 info.</a>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-7">
                    <div class="header_contact_phone">
                        Contact us <?php echo get_contact_phone();?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-5">
                    <?php get_template_part('parts/block', 'social'); ?>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header.php /-->
<?php do_action( 'proposal_init' ); ?>