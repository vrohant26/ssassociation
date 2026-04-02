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
            <div class="work-container">
                <div class="work-left">
                    <!-- Beige Floating Card -->
                    <div class="about-floating-card card-reveal">
                        <div class="text-mask"><p>We collaborate with select developers on exclusive mandates—aligning strategy, execution, and sales outcomes under one disciplined framework.</p></div>
                        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-discovery cta-inline-link">WORK WITH US <span class="arrow-up-right" style="margin-left:5px;"><svg width="1em" height="1em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;"><path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/></svg></span></a>
                    </div>
                </div>
                <div class="work-right">
                    <div class="about-hero-image-wrap img-reveal">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about hero image.png' ); ?>" alt="Office Space">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Our Purpose Section -->
    <section class="our-purpose-section gsap-reveal-section">
        <div class="">
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

    <!-- Process Section -->
    <section class="process-section gsap-reveal-section">
        <div class="container">
            <div class="process-header">
                <div class="process-header-left">
                    <div class="text-mask">
                        <div class="section-tag">
                            <span class="diamond-icon">◆</span> OUR PROCESS
                        </div>
                    </div>
                    <div class="text-mask"><h2 class="section-title fs-xxl" style="margin-bottom: 0;">How We Deliver<br>Mandate Success</h2></div>
                </div>
                <div class="process-header-right">
                    <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary"><span class="arrow-up-right"><svg width="1.2em" height="1.2em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;"><path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/></svg></span> START YOUR JOURNEY</a>
                </div>
            </div>

            <div class="process-carousel-card">
                <?php
                $process_slides = [
                    [
                        'step' => 'STEP 01',
                        'title' => 'Mandate Evaluation & Strategic Alignment',
                        'desc' => 'We begin by evaluating the project’s market potential, defining positioning, pricing logic, and sales objectives to ensure complete alignment before execution begins.',
                        'img' => get_template_directory_uri() . '/assets/images/Step 1 process.png'
                    ],
                    [
                        'step' => 'STEP 02',
                        'title' => 'Strategy & Market Positioning',
                        'desc' => 'We define the project’s market positioning, pricing strategy, and buyer segmentation to create a clear, competitive, and demand-aligned sales approach.',
                        'img' => get_template_directory_uri() . '/assets/images/Step 1 process.png'
                    ],
                    [
                        'step' => 'STEP 03',
                        'title' => 'Sales Setup & Channel Alignment',
                        'desc' => 'We establish the sales infrastructure, onboard and align channel partners, and ensure consistent communication across all sales touchpoints.',
                        'img' => get_template_directory_uri() . '/assets/images/Step 1 process.png'
                    ],
                    [
                        'step' => 'STEP 04',
                        'title' => 'On-Ground Sales Execution',
                        'desc' => 'We deploy structured sales operations, manage the funnel, and drive consistent buyer engagement to maintain momentum and improve conversions.',
                        'img' => get_template_directory_uri() . '/assets/images/Step 1 process.png'
                    ],
                    [
                        'step' => 'STEP 05',
                        'title' => 'Performance Tracking & Optimisation',
                        'desc' => 'We continuously monitor sales performance, analyse buyer behaviour, and refine strategy to sustain velocity and maximise project outcomes.',
                        'img' => get_template_directory_uri() . '/assets/images/Step 1 process.png'
                    ]
                ];
                ?>
                <div class="swiper process-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($process_slides as $index => $slide) : ?>
                            <div class="swiper-slide process-slide">
                                <div class="slide-content">
                                    <div class="text-mask"><span class="slide-step"><?php echo esc_html($slide['step']); ?></span></div>
                                    <div class="text-mask"><h3 class="slide-title"><?php echo esc_html($slide['title']); ?></h3></div>
                                    <div class="text-mask"><p class="slide-desc"><?php echo esc_html($slide['desc']); ?></p></div>
                                </div>
                                <div class="slide-image img-reveal">
                                    <img src="<?php echo esc_url($slide['img']); ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="slide-controls">
                        <div class="slide-nav">
                            <button class="nav-btn prev-btn process-prev" aria-label="Previous">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 12H5M5 12L12 19M5 12L12 5" /></svg>
                            </button>
                            <button class="nav-btn next-btn process-next" aria-label="Next">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 12H19M19 12L12 19M19 12L12 5" /></svg>
                            </button>
                        </div>
                        <div class="slide-dots swiper-pagination process-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="success-stories-section gsap-reveal-section">
        <div class="container container-large">
            <div class="success-stories-wrapper">
                
                <!-- Left Content -->
                <div class="success-content">
                    <div class="text-mask">
                        <div class="section-tag">
                            <span class="diamond-icon">◆</span> SUCCESS STORIES
                        </div>
                    </div>
                    <div class="text-mask">
                        <h2 class="section-title fs-xxl" style="margin-bottom: 1.5rem;">Select Residential Projects Under Exclusive Mandates</h2>
                    </div>
                    <div class="text-mask">
                        <p class="section-desc fs-md">A curated portfolio of residential developments delivered through focused mandates and disciplined sales execution.</p>
                    </div>
                    
                    <div class="slide-nav success-nav">
                        <button class="nav-btn prev-btn success-prev" aria-label="Previous">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 12H5M5 12L12 19M5 12L12 5" /></svg>
                        </button>
                        <button class="nav-btn next-btn success-next" aria-label="Next">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 12H19M19 12L12 19M19 12L12 5" /></svg>
                        </button>
                    </div>
                </div>

                <!-- Right Carousel -->
                <div class="success-carousel">
                    <div class="swiper success-swiper">
                        <div class="swiper-wrapper">
                            <?php
                            $success_projects = [
                                [
                                    'title' => 'Elysium',
                                    'image' => get_template_directory_uri() . '/assets/images/Elysium Project Thumbnail.png',
                                    'launched' => '2025',
                                    'units_released' => 'XXX',
                                    'units_sold' => 'XXX+'
                                ],
                                [
                                    'title' => 'MK Imperial',
                                    'image' => get_template_directory_uri() . '/assets/images/MK Imperial Thumbnail.png',
                                    'launched' => '2025',
                                    'units_released' => 'XXX',
                                    'units_sold' => 'XXX+'
                                ],
                                [
                                    'title' => 'MK Imperial',
                                    'image' => get_template_directory_uri() . '/assets/images/MK Imperial Thumbnail.png',
                                    'launched' => '2025',
                                    'units_released' => 'XXX',
                                    'units_sold' => 'XXX+'
                                ]
                            ];
                            ?>
                            <?php foreach ($success_projects as $index => $project) : ?>
                            <div class="swiper-slide">
                                <div class="project-card card-reveal">
                                    <div class="project-image img-reveal">
                                        <img src="<?php echo esc_url($project['image']); ?>" alt="<?php echo esc_attr($project['title']); ?>">
                                    </div>
                                    <div class="project-details">
                                        <div class="project-header">
                                            <h3 class="project-title"><?php echo esc_html($project['title']); ?></h3>
                                            <span class="project-number fs-xxl"><?php echo sprintf('%02d', $index + 1); ?></span>
                                        </div>
                                        <div class="project-stats">
                                            <div class="stat-row">
                                                <span class="stat-label">LAUNCHED IN :</span>
                                                <span class="stat-value"><?php echo esc_html($project['launched']); ?></span>
                                            </div>
                                            <div class="stat-row">
                                                <span class="stat-label">UNITS RELEASED:</span>
                                                <span class="stat-value"><?php echo esc_html($project['units_released']); ?></span>
                                            </div>
                                            <div class="stat-row">
                                                <span class="stat-label">UNITS SOLD:</span>
                                                <span class="stat-value"><span class="trend-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/uptrend.svg' ); ?>" alt="Uptrend"></span> <?php echo esc_html($project['units_sold']); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews-section gsap-reveal-section">
        <div class="container container-large">
            <div class="reviews-header text-center" style="text-align: center; margin-bottom: 4rem;">
                <div class="text-mask" style="display: flex; justify-content: center;">
                    <div class="section-tag" style="justify-content: center;">
                        <span class="diamond-icon">◆</span> REVIEWS
                    </div>
                </div>
                <div class="text-mask">
                    <h2 class="section-title fs-xxxl" style="margin-bottom: 1rem;">Real people, lasting outcomes.</h2>
                </div>
                <div class="text-mask">
                    <p class="section-desc" style="max-width: 700px; margin: 0 auto 2rem auto; color: var(--text-dark); opacity: 0.8; font-size: 1.1rem; line-height: 1.6;">
                        Developers value our focused mandate approach, execution discipline, and market-driven sales strategies.
                    </p>
                </div>
                <div class="text-mask" style="display: flex; justify-content: center;">
                    <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn btn-primary" style="font-size: 0.8rem; padding: 1rem 2rem; border: none;"><span class="arrow-up-right"><svg width="1.2em" height="1.2em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;"><path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/></svg></span> START YOUR JOURNEY</a>
                </div>
            </div>

            <div class="reviews-grid">
                <!-- Large Review Card -->
                <div class="review-card large-card text-mask card-reveal">
                    <div class="quote-mark">”</div>
                    <div class="review-content" style="position: relative; z-index: 2;">
                        <p class="reviewer-meta"><span class="diamond-icon">◆</span> DEVELOPER PARTERN'S NAME, MK IMPERIALS</p>
                        <h3 class="review-quote-large">"Their mandate-led approach brought structure, clarity, and focused execution to our sales process."</h3>
                        <p class="review-desc">"S&S Associates brought structure and clarity to our sales process. Their mandate-led approach ensured focused execution and consistent buyer communication throughout the project lifecycle."</p>
                    </div>
                </div>

                <!-- Right Column (Stacked Cards) -->
                <div class="reviews-right-col">
                    <div class="review-card text-mask card-reveal">
                        <div class="quote-mark">”</div>
                        <div class="review-content" style="position: relative; z-index: 2;">
                            <p class="reviewer-meta"><span class="diamond-icon">◆</span> DEVELOPER PARTERN'S NAME, MK IMPERIALS</p>
                            <h3 class="review-quote">"Disciplined pricing, clear positioning, and execution that felt fully in-house."</h3>
                            <p class="review-desc">"What stood out was their discipline on pricing, positioning, and on-ground execution. They operated like an extension of our internal sales team."</p>
                        </div>
                    </div>

                    <div class="review-card text-mask card-reveal">
                        <div class="quote-mark">”</div>
                        <div class="review-content" style="position: relative; z-index: 2;">
                            <p class="reviewer-meta"><span class="diamond-icon">◆</span> DEVELOPER PARTERN'S NAME, MK IMPERIALS</p><br>
                            <h3 class="review-quote">Couldn't be happier!</h3>
                            <p class="review-desc">"Their understanding of the micro-market and buyer behaviour translated into steady sales momentum. The process was transparent, professional, and outcome-driven."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="team-section gsap-reveal-section">
        <div class="container text-center" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
            <div class="text-mask" style="display: flex; justify-content: center;">
                <div class="section-tag" style="justify-content: center;">
                    <span class="diamond-icon">◆</span> OUR TEAM
                </div>
            </div>
            <div class="text-mask">
                <h2 class="section-title fs-xxxl" style="margin-bottom: 2rem;">Meet the Director</h2>
            </div>
            <div class="text-mask">
                <p class="section-desc" style="max-width: 650px; margin: 0 auto 4rem auto; color: var(--text-dark); opacity: 0.8; font-size: 1.1rem; line-height: 1.6;">
                    For over 20 years, Craig has guided Australians through the complexities of property investment. Now a growing collective, our team is here to provide honest advice, practical strategies, and long-term support you can trust.
                </p>
            </div>
            
            <div class="director-profile" style="width: 100%; max-width: 450px; text-align: left;">
                <div class="director-image img-reveal" style="border-radius: 12px; overflow: hidden; aspect-ratio: 4/5; margin-bottom: 1.5rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ss associates director.jpeg' ); ?>" alt="Director" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(100%);">
                </div>
                <div class="text-mask">
                    <h4 class="director-name" style="font-size: 1rem; color: #1f1f1f; font-weight: 700; margin: 0; display: flex; align-items: center; gap: 0.5rem; letter-spacing: 0.05em;"><span style="color: black;">Prateek Ghag</span> <span style="font-size: 0.75rem; color: #666; font-weight: 600;">/ SALES REPRESENTATIVE</span></h4>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
