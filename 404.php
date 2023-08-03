<?php
/**
 * The template for displaying 404 pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Proposal
 */

get_header();
?>
<?php get_template_part('parts/top', 'navigation'); ?>

<section class="page-404">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                <h1>404 - Page Not Found</h1>
                <p>We're sorry, but the page you are looking for does not exist. It may have been moved, deleted, or never existed in the first place.</p>
                <p>Please check the URL for any spelling mistakes or try navigating back to the homepage using the navigation menu or search bar.</p>
                <p>If you believe this is a mistake or you need further assistance, please contact our support team at HEAD@PROPOSAL007.COM.</p>
                <p>Thank you for your understanding.</p>
                <a href="/">Home</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
