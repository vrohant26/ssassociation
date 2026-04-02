<?php
/*
Template Name: Contact Page
*/

// Handle form submission
$form_success = false;
$form_error   = false;

if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['submit_contact'] ) ) {
    $name    = sanitize_text_field( $_POST['full_name'] );
    $email   = sanitize_email( $_POST['email_address'] );
    $phone   = sanitize_text_field( $_POST['phone_number'] );
    $message = sanitize_textarea_field( $_POST['message'] );

    if ( ! empty( $name ) && ! empty( $email ) && ! empty( $message ) ) {
        $to      = 'SSASSOCIATES2317@GMAIL.COM';
        $subject = 'New Contact Inquiry from: ' . $name;
        $headers = array(
            'Content-Type: text/html; charset=UTF-8',
            'Reply-To: ' . $name . ' <' . $email . '>',
        );
        $body = "<h2>New Contact Form Submission</h2>
                 <p><strong>Name:</strong> {$name}</p>
                 <p><strong>Email:</strong> {$email}</p>
                 <p><strong>Phone:</strong> {$phone}</p>
                 <br>
                 <p><strong>Message:</strong></p>
                 <p>" . nl2br( $message ) . "</p>";

        if ( wp_mail( $to, $subject, $body, $headers ) ) {
            $form_success = true;
        } else {
            $form_error = 'There was an issue sending your message. Please try again directly.';
        }
    } else {
        $form_error = 'Please fill in all the required fields.';
    }
}

get_header();
?>

<main class="site-main contact-page">

    <!-- Contact Hero Section -->
    <section class="contact-hero gsap-reveal-section">
        <div class="container">
            <div class="contact-hero-content">
                <div class="text-mask">
                    <div class="section-tag contact-section-tag">
                        <span class="diamond-icon">◆</span> GET IN TOUCH
                    </div>
                </div>
                <div class="text-mask">
                    <h1 class="hero-title fs-xxxl text-align-center contact-hero-title">Let's align on<br>your next project.</h1>
                </div>
                <div class="text-mask">
                    <p class="fs-md contact-hero-desc text-align-center">
                        Reach out to discuss focused sales mandates, market strategies, and real estate execution frameworks.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Details Section -->
    <section class="contact-form-section gsap-reveal-section">
        <div class="container">
            <div class="contact-grid">

                <!-- Left: Details -->
                <div class="contact-details">
                    <div class="text-mask">
                        <h2 class="contact-info-heading">Contact<br>Information</h2>
                    </div>

                    <div class="text-mask">
                        <div class="contact-info-block">
                            <h4 class="contact-info-label">Email Us</h4>
                            <a href="mailto:SSASSOCIATES2317@GMAIL.COM" class="contact-email-link">ssassociates2317@gmail.com</a>
                        </div>
                    </div>

                    <div class="text-mask">
                        <div class="contact-info-block">
                            <h4 class="contact-info-label">Corporate Office</h4>
                            <p class="contact-address">Level 4, Executive Block<br>Central Business District<br>Navi Mumbai, 400706</p>
                        </div>
                    </div>

                    <div class="text-mask">
                        <div class="contact-info-block">
                            <h4 class="contact-info-label">Socials : </h4>
                            <a href="#" style="color: var(--text-dark);"> Instagram </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="contact-form-wrapper card-reveal">
                    <?php if ( $form_success ) : ?>
                        <div class="form-success-message">
                            <h3>Message Sent Successfully!</h3>
                            <p>Thank you for reaching out. Our structured sales team will review your inquiry and get back to you shortly.</p>
                        </div>
                    <?php else : ?>
                        <form action="<?php echo esc_url( get_permalink() ); ?>" method="POST" class="custom-contact-form text-mask">

                            <?php if ( $form_error ) : ?>
                                <div class="form-error-message"><?php echo esc_html( $form_error ); ?></div>
                            <?php endif; ?>

                            <div class="form-group">
                                <label for="full_name" class="form-label">Full Name *</label>
                                <input type="text" id="full_name" name="full_name" required class="form-input" placeholder="John Doe">
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email_address" class="form-label">Email Address *</label>
                                    <input type="email" id="email_address" name="email_address" required class="form-input" placeholder="john@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="tel" id="phone_number" name="phone_number" class="form-input" placeholder="+91 000 000 0000">
                                </div>
                            </div>

                            <div class="form-group form-group--message">
                                <label for="message" class="form-label">Your Message *</label>
                                <textarea id="message" name="message" rows="4" required class="form-input form-textarea" placeholder="Tell us about your mandate..."></textarea>
                            </div>

                            <button type="submit" name="submit_contact" class="btn btn-primary form-submit-btn">
                                SUBMIT INQUIRY
                                <span class="arrow-up-right" style="margin-left: 10px;">
                                    <svg width="1.2em" height="1.2em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;">
                                        <path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                                    </svg>
                                </span>
                            </button>
                        </form>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="contact-map-section gsap-reveal-section card-reveal">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120638.16709848574!2d72.93291884589946!3d19.082522329384664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sNavi%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>

</main>

<?php get_footer(); ?>
