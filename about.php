<?php
/* Template Name: About Page */
get_header();
?>
<main class="site-main">

    <!-- Unified GSAP Wrapper for Hero & Work -->
    <div class="about-hero-combined gsap-reveal-section">
        <!-- About Hero Section -->
        <section class="about-hero">
            <div class="about-hero-container">
                <div class="about-hero-text">
                    <div class="text-mask">
                        <div class="section-tag">
                            <span class="diamond-icon">◆</span> ABOUT S&S ASSOCIATES
                        </div>
                    </div>
                    <div class="text-mask">
                        <h1 class="hero-title fs-xxxl">Built on Mandates.<br>Driven by Execution.</h1>
                    </div>
                    <div class="text-mask">
                        <p class="about-hero-desc fs-md">
                            S&S Associates is a specialised real estate mandate advisory firm working closely with residential developers to deliver structured sales execution and market-aligned strategies. We operate as an extension of our partners’ teams—bringing clarity to positioning, discipline to execution, and consistency to outcomes across the sales lifecycle.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work With Us / Image Section -->
        <section class="work-with-us-section">
            <div class="container work-container">
                <div class="work-left">
                    <!-- Beige Floating Card -->
                    <div class="about-floating-card card-reveal">
                        <div class="text-mask"><p>We collaborate with select developers on exclusive mandates—aligning strategy, execution, and sales outcomes under one disciplined framework.</p></div>
                        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-discovery cta-inline-link">WORK WITH US <span class="arrow-up-right" style="margin-left:5px;"><svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;"><path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/></svg></span></a>
                    </div>
                </div>
                <div class="work-right">
                    <div class="about-hero-image-wrap img-reveal">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-hero-image.png' ); ?>" alt="Office Space">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Our Purpose Section -->
    <section class="our-purpose-section gsap-reveal-section">
        <div class="container">
            <div class="text-mask">
                <div class="section-tag">
                    <span class="diamond-icon">◆</span> OUR PURPOSE
                </div>
            </div>
            
            <div class="text-mask">
                <h2 class="section-title fs-xxl" style="max-width: 800px; margin-bottom: 2rem;">A Purpose Built on Clarity, Structure, and Disciplined Sales Execution</h2>
            </div>
            
            <div class="text-mask">
                <p class="section-desc fs-md" style="max-width: 700px; margin-bottom: 4rem;">
                    We operate with clear guidelines and deep strategic focus, building on over two decades of residential sales execution. At the core, we believe that focused execution and consistent market alignment drive true outcomes.
                </p>
            </div>
            
            <div class="purpose-grid">
                <!-- Card 1 -->
                <div class="purpose-card text-mask card-reveal">
                    <div class="purpose-card-inner">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/aim-icon.svg' ); ?>" alt="Aim" class="purpose-icon">
                        <h4 class="purpose-title">STRATEGIC MANDATE SALES CAPABILITIES</h4>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="purpose-card text-mask card-reveal">
                    <div class="purpose-card-inner">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/handshake-icon.svg' ); ?>" alt="Handshake" class="purpose-icon">
                        <h4 class="purpose-title">ALIGNING DEVELOPER GOALS & BUYER ASPIRATIONS</h4>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="purpose-card text-mask card-reveal">
                    <div class="purpose-card-inner">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/network-icon.svg' ); ?>" alt="Network" class="purpose-icon">
                        <h4 class="purpose-title">EXCLUSIVE NETWORK FOR REFINED HOME BUYING</h4>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="purpose-card text-mask card-reveal">
                    <div class="purpose-card-inner">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/uptrend.svg' ); ?>" alt="Uptrend" class="purpose-icon">
                        <h4 class="purpose-title">CONSISTENT <br> SALES EXECUTION</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/section-process'); ?>

    <?php get_template_part('template-parts/section-success'); ?>

    <?php get_template_part('template-parts/section-reviews'); ?>

    <?php get_template_part('template-parts/section-team'); ?>
</main>
<?php get_footer(); ?>
