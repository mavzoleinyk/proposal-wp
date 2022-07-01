<?php
/*
Template Name: Шаблон Контакты
Template Post Type: page
*/
get_header();
?>
<section class="breadcrumbs-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Proposal packages</a></li>
                    <li><span>  Premium light the night    </span></li>
                </ul> -->
            </div>
        </div>
    </div>
</section>
<section class="contact-section">
    <div class="container">
        <div class="row row_map">
            <div class="col-12">
            <div class="wrap_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.8672273192537!2d-74.00510368473158!3d40.74294697932841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bed28a7941%3A0x741efe09a732b696!2s352%20W%2018th%20St%2C%20New%20York%2C%20NY%2010011%2C%20USA!5e0!3m2!1sen!2s!4v1647979219652!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            </div>
        </div>
        <div class="row row_contactus justify-content-between">
            <div class="col-lg-5 col-md-6">
                <div class="wrap_contact_data d-flex">
                    <div class="ct_address"><h2>New York</h2></div>
                    <div class="ct_data">
                        <p>head@proposal007.com</p>
                        <p>352 W 18th St, New York, NY 10011</p>
                        <p>+1(347)926-9458</p>
                        <p>9am – 10pm</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact_form">
                    <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="wrap_contact_field">
                                <input type="text" name="name" placeholder="Your name*" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="wrap_contact_field">
                                <input type="email" name="email" placeholder="Your email*" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="wrap_contact_field">
                                <input type="tel" name="phone" placeholder="Your phone" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="wrap_contact_field">
                                <textarea name="msg" placeholder="Your message"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="wrap_contact_field">
                                <button type="submit">Send</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

get_footer();

?>