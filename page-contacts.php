<!-- page-contacts.php -->
<?php
/**
 * The template for displaying all single posts
 * Theme Proposal
 * Template Name: Contacts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
get_template_part('parts/top', 'navigation');

$map = get_field('map')?? null;
$contacts = get_field('contacts', SETTING_PAGE)?? null;
?>

<section class="contact-section">
    <div class="container">

        <?php if($map): ?>
        <div class="row row_map">
            <div class="col-12">
                <div class="wrap_map">
<!--                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.8672273192537!2d-74.00510368473158!3d40.74294697932841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bed28a7941%3A0x741efe09a732b696!2s352%20W%2018th%20St%2C%20New%20York%2C%20NY%2010011%2C%20USA!5e0!3m2!1sen!2s!4v1647979219652!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                <?= $map ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="row row_contactus justify-content-between">

            <?php if($contacts): ?>
            <div class="col-lg-5 col-md-6">
                <div class="wrap_contact_data d-flex">
                    <div class="ct_address"><h2>New York</h2></div>
                    <div class="ct_data">
                        <p><?= $contacts['email'] ?></p>
                        <p>352 W 18th St, New York, NY 10011</p>
                        <p><?= $contacts['phone']['phone_for_interface'] ?></p>
                        <p>9am – 10pm</p>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="col-md-6">
                <div class="contact_form">
                    <?php echo do_shortcode( '[contact-form-7 id="16180" title="Contact Form"]' );?>
                </div>
            </div>

        </div>


    </div>
</section>


<?php
get_footer();


