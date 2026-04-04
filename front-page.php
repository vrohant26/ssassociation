<?php
get_header();
?>
<main class="site-main">
<div class="hero-about-wrapper">
    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Hero Background Slider -->
        <div class="swiper hero-bg-swiper" style="position: absolute; top:0; left:0; width:100%; height:100%; z-index:0;">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/mumbai.webp' ); ?>'); background-size: cover; background-position: center;"></div>
                <div class="swiper-slide bg-slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-image-2.jpeg' ); ?>'); background-size: cover; background-position: center;"></div>
            </div>
        </div>

        <div class="hero-overlay" style="z-index:1;"></div>

        <div class="hero-content">
            <div class="hero-text-content">
                <div class="hero-brand">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/logo-white.svg' ); ?>" alt="S&S Associates Logo" class="hero-brand-img" >
                </div>
                
                <h1 class="hero-title fs-xxxl">Real Estate Advisory Focused on Execution and Results</h1>
                <p class="hero-subtitle fs-md">With 800+ channel partners associated with us, we deliver structured sales execution and consistent outcomes.</p>
                
                <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="hero-cta">
                    <span class="arrow-up-right"><svg width="1.2em" height="1.2em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;"><path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/></svg></span> <u>START YOUR JOURNEY</u>
                </a>
            </div>
            
            <div class="hero-scroll-indicator">
                <div class="mouse-icon"></div>
            </div>

            <div class="hero-featured-card">
                <div class="card-image-wrap">
                    <!-- Placeholder representing the project blueprint image in design -->
                   <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/elysium-thumbnail.png' ); ?>" alt="Elysium Project Thumbnail" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Elysium – Contemporary Urban Living</h3>
                    <p class="card-subtitle">Launched in : 2026<br>51 units sold in 5 months</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- About Section -->
    <section class="about-section gsap-reveal-section">
        <div class="container">
            <div class="text-mask">
                <div class="section-tag">
                    <span class="diamond-icon">◆</span> ABOUT S&S ASSOCIATES
                </div>
            </div>
            
            <div class="text-mask">
                <h2 class="section-title fs-xxl">S&S Associates is a specialised real estate mandate advisory firm focused on structured, intelligence-led residential sales execution.</h2>
            </div>
            
            <div class="text-mask">
                <p class="section-desc fs-md">
                   We work with select residential developments to deliver disciplined sales execution, informed market positioning, and refined home-buying experiences, ensuring both developers and buyers are satisfied through a focused, mandate-driven approach.
                </p>
            </div>

            <div class="stats-grid">
                <!-- Col 1 -->
                <div class="stat-card">
                    <div class="stat-image-wrap img-reveal">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-image-1.webp' ); ?>" alt="Office Space">
                    </div>
                    <div class="stat-content">
                        <div class="text-mask"><h4 class="stat-heading fs-sm">10+ YEARS OF TRUSTED GUIDANCE</h4></div>
                        <div class="text-mask"><p class="stat-text fs-xs">Over a decade, S&S Associates has delivered consistent, disciplined mandate-led guidance across select residential real estate developments.</p></div>
                    </div>
                </div>
                
                <!-- Col 2 -->
                <div class="stat-card">
                    <div class="stat-image-wrap img-reveal">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-image-2.webp' ); ?>" alt="Building">
                    </div>
                    <div class="stat-content">
                        <div class="text-mask"><h4 class="stat-heading fs-sm ">₹10 CR+ IN SUCCESSFULLY CLOSED RESIDENTIAL SALES</h4></div>
                        <div class="text-mask"><p class="stat-text fs-xs">This reflects disciplined mandate execution and focused sales strategies delivering steady residential closures.</p></div>
                    </div>
                </div>

                <!-- Col 3 -->
                <div class="stat-card">
                    <div class="stat-image-wrap img-reveal">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-image-3.webp' ); ?>" alt="Apartment Complex">
                    </div>
                    <div class="stat-content">
                        <div class="text-mask"><h4 class="stat-heading fs-sm">600+ HOMES SUCCESSFULLY SOLD</h4></div>
                        <div class="text-mask"><p class="stat-text fs-xs">This  reflects focused mandate execution, consistent buyer alignment, and disciplined sales processes across all projects.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> <!-- /hero-about-wrapper -->

    <!-- Trusted by Builders Section -->
    <section class="trusted-builders-section gsap-reveal-section">
        <div class="border-expand top"></div>
        <div class="border-expand bottom"></div>
        
        <div class="container">
            <div class="text-mask"><h3 class="trusted-title">Trusted by Builders.</h3></div>
            
            <div class="builders-grid">
                <div class="builder-logo-wrap img-reveal">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/elite.png' ); ?>" alt="Elite">
                </div>
                <div class="builder-logo-wrap img-reveal">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/matrix.png' ); ?>" alt="Matrix">
                </div>
                <div class="builder-logo-wrap img-reveal">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/kripa-elite-no-bg.png' ); ?>" alt="Kripa Elite">
                </div>
                <div class="builder-logo-wrap img-reveal">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/navrang-elite.png' ); ?>" alt="Navrang Elite">
                </div>
                <div class="builder-logo-wrap img-reveal">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mk-matrix.png' ); ?>" alt="MK Matrix">
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
