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
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Organization",
            "name": "Proposal007",
            "logo": "https://prop.ipapus.com/wp-content/uploads/2022/09/home-hero-1.jpg",
            "url": "https://proposal007.com/",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "United States"
            },
            "sameAs": ["https://www.instagram.com/proposal007/", "https://www.youtube.com/channel/UCl7o6tJeyKnf58zMF2FLDYw", "https://www.facebook.com/profile.php?id=100063615068407"]
        }
    </script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Is New York a good place to propose?","acceptedAnswer":[{"@type":"Answer","text":"Yes, New York is an excellent place to propose due to its iconic landmarks, picturesque skyline, and romantic settings. Best places to propose would be Central Park, Empire State Building and Dumbo, Brooklyn"}]},{"@type":"Question","name":"Should a proposal be a surprise?","acceptedAnswer":[{"@type":"Answer","text":"A surprise proposal can be a memorable and magical experience for both partners, but it's essential to know your partner's preferences. Make sure you both are looking forward to the new stage of your relationship. Keep your partner's personality in mind when choosing the type of proposal you want to do ( public or private)"}]},{"@type":"Question","name":"What not to do before a proposal?","acceptedAnswer":[{"@type":"Answer","text":"Avoid discussing the proposal with too many people, raising suspicion, proposing without a ring, proposing too soon, or proposing in a location or situation that your partner might not appreciate. Dont hint that something big is coming up. Dont offer her to do her nails."}]},{"@type":"Question","name":"Should a proposal be photographed?","acceptedAnswer":[{"@type":"Answer","text":"Yes absolutely. Capturing the proposal moment is a great way to preserve the memory. If you decide to hire a photographer, ensure they can be discreet to maintain the surprise element."}]}]}</script>
    <script type="application/ld+json">
        {
        "@context": "http://schema.org/",
        "@type": "LocalBusiness",
        "name": "Proposal007",
        "image": "https://prop.ipapus.com/wp-content/uploads/2022/09/home-hero-1.jpg",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "352 W 18th St",
            "addressLocality": "New York",
            "addressRegion": "NY",
            "postalCode": "10011",
            "addressCountry": "United States"
        },
        "founder": {
            "@type": "Person",
            "name": "Tatiana Caicedo",
            "gender": "Female",
            "jobTitle": "CEO, CO-FOUNDER",
            "image": "https://proposal007.com/wp-content/themes/proposal/images/team_1.jpg",
            "sameAs": [
            "https://www.linkedin.com/in/tatiana-caicedo-138736126",
            "https://www.instagram.com/tatiana_caiced/",
            "https://www.facebook.com/CaicedoTatiana/",
            "https://twitter.com/tatiana_caic?lang=en"
            ]
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1 (347) 926-9458",
            "contactType": "customer service",
            "areaServed": "USA"
        }
        }
    </script>
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