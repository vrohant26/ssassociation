<?php
/**
 * The template for displaying the footer
 */
?>

    <!-- CTA & Footer Section -->
    <footer class="site-footer">
        
        <!-- CTA Top Block -->
        <div class="cta-section gsap-reveal-section" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/CTA Footer Background.png' ); ?>');">
            <!-- <div class="cta-gradient-overlay"></div> -->
            <div class="container container-large" style="position: relative; z-index: 2;">
                <div class="cta-content text-mask">
                    <h2 class=" fs-xxxl section-title">Looking for a Focused<br>Sales Mandate?</h2>
                    <a href="#" class="btn btn-secondary cta-btn"><span class="arrow-up-right"><svg width="1.2em" height="1.2em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;"><g clip-path="url(#clip0_98_87)"><g clip-path="url(#clip1_98_87)"><path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/></g></g><defs><clipPath id="clip0_98_87"><rect width="20" height="20" fill="currentColor"/></clipPath><clipPath id="clip1_98_87"><rect width="20" height="20" fill="currentColor"/></clipPath></defs></svg></span> Let's talk</a>
                </div>
                
                <div class="cta-stats-overlay">
                    <div class="cta-stat">
                        <div class="text-mask"><h3 class="stat-number">10+</h3></div>
                        <div class="text-mask"><p class="stat-label">Years of Experience</p></div>
                    </div>
                    <div class="cta-stat">
                        <div class="text-mask"><h3 class="stat-number">10CR+</h3></div>
                        <div class="text-mask"><p class="stat-label">Closed sales</p></div>
                    </div>
                    <div class="cta-stat">
                        <div class="text-mask"><h3 class="stat-number">600+</h3></div>
                        <div class="text-mask"><p class="stat-label">Homes Sold</p></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer Block -->
        <div class="main-footer-block gsap-reveal-section">
            <div class="container container-large">
                <div class="footer-grid">
                    
                    <div class="footer-logo-col text-mask">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/coloured logo.png' ); ?>" alt="S&S Associates" class="footer-logo">
                        <p class="copyright">© <?php echo date('Y'); ?> S&S Associates. All rights reserved.</p>
                    </div>

                    <div class="footer-links-col">
                        <div class="footer-col text-mask">
                            <h4 class="footer-col-title">MENU</h4>
                            <ul class="footer-menu">
                                <li><a href="#">ABOUT</a></li>
                                <li><a href="#">SERVICES</a></li>
                                <li><a href="#">PROJECTS</a></li>
                                <li><a href="#">CONTACT</a></li>
                            </ul>
                        </div>
                        <div class="footer-col text-mask">
                            <h4 class="footer-col-title">SOCIAL</h4>
                            <ul class="footer-menu">
                                <li><a href="#">INSTAGRAM</a></li>
                            </ul>
                        </div>
                        <div class="footer-col text-mask">
                            <h4 class="footer-col-title">CONTACT</h4>
                            <ul class="footer-menu">
                                <li style="text-transform: uppercase;"><a href="mailto:INFO@SSASSOCIATES.COM">INFO@SSASSOCIATES.COM</a></li>
                                <li style="text-transform: uppercase;"><a href="mailto:SSASSOCIATES2317@GMAIL.COM">SSASSOCIATES2317@GMAIL.COM</a></li>
                                <li><a href="tel:8779776794">8779776794</a></li>
                            </ul>
                            
                            <h4 class="footer-col-title" style="margin-top: 2rem;">LEGAL</h4>
                            <ul class="footer-menu">
                                <li><a href="#">PRIVACY POLICY</a></li>
                                <li><a href="#">TERMS & CONDITIONS</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                
                <div class="footer-watermark text-mask">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/S&S ASSOCIATES.svg' ); ?>" alt="S&S Associates" class="footer-watermark-img">
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>
