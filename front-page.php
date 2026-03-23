<?php
get_header();
?>

<div class="hero-about-wrapper">
    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/Mumbai Skyline.webp' ); ?>');">
        <div class="hero-overlay"></div>

        <div class="hero-content">
            <div class="hero-text-content">
                <div class="hero-brand">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/logo-white.svg' ); ?>" alt="S&S Associates Logo" class="hero-brand-img" >
                </div>
                
                <h1 class="hero-title fs-xxxl">Built for<br>Developers Who<br>Value Execution</h1>
                <p class="hero-subtitle fs-md">We take the stress out of investing in real estate, giving you a clear path to financial freedom.</p>
                
                <a href="#" class="hero-cta">
                    <span class="arrow-up-right"><svg width="1.2em" height="1.2em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;"><g clip-path="url(#clip0_98_87)"><g clip-path="url(#clip1_98_87)"><path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/></g></g><defs><clipPath id="clip0_98_87"><rect width="20" height="20" fill="white"/></clipPath><clipPath id="clip1_98_87"><rect width="20" height="20" fill="white"/></clipPath></defs></svg></span> <u>START YOUR JOURNEY</u>
                </a>
            </div>
            
            <div class="hero-scroll-indicator">
                <div class="mouse-icon"></div>
            </div>

            <div class="hero-featured-card">
                <div class="card-image-wrap">
                    <!-- Placeholder representing the project blueprint image in design -->
                   <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Elysium Project Thumbnail.png' ); ?>" alt="Elysium Project Thumbnail" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Elysium – Contemporary Urban Living</h3>
                    <p class="card-subtitle">Thoughtfully Designed Homes<br>in Prime Location</p>
                    <a href="#" class="card-link"><span class="arrow-up-right"><svg width="1.2em" height="1.2em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;"><g clip-path="url(#clip0_98_87)"><g clip-path="url(#clip1_98_87)"><path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/></g></g><defs><clipPath id="clip0_98_87"><rect width="20" height="20" fill="white"/></clipPath><clipPath id="clip1_98_87"><rect width="20" height="20" fill="white"/></clipPath></defs></svg></span> VIEW PROJECT</a>
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
                    We work with select residential developments to deliver disciplined sales execution, informed market positioning, and refined home-buying experiences through a focused, mandate-driven approach.
                </p>
            </div>

            <div class="stats-grid">
                <!-- Col 1 -->
                <div class="stat-card">
                    <div class="stat-image-wrap img-reveal">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about image 1.png' ); ?>" alt="Office Space">
                    </div>
                    <div class="stat-content">
                        <div class="text-mask"><h4 class="stat-heading fs-sm">10+ YEARS OF TRUSTED GUIDANCE</h4></div>
                        <div class="text-mask"><p class="stat-text fs-xs">Over a decade, S&S Associates has delivered consistent, disciplined mandate-led guidance across select residential real estate developments.</p></div>
                    </div>
                </div>
                
                <!-- Col 2 -->
                <div class="stat-card">
                    <div class="stat-image-wrap img-reveal">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about image 2.png' ); ?>" alt="Building">
                    </div>
                    <div class="stat-content">
                        <div class="text-mask"><h4 class="stat-heading fs-sm ">₹10 CR+ IN SUCCESSFULLY CLOSED RESIDENTIAL SALES</h4></div>
                        <div class="text-mask"><p class="stat-text fs-xs">This reflects disciplined mandate execution and focused sales strategies delivering steady residential closures.</p></div>
                    </div>
                </div>

                <!-- Col 3 -->
                <div class="stat-card">
                    <div class="stat-image-wrap img-reveal">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about image 3.png' ); ?>" alt="Apartment Complex">
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
        <div class="container">
            <div class="text-mask"><h3 class="trusted-title">Trusted by Builders.</h3></div>
            
            <div class="builders-grid">
                <div class="builder-logo-wrap img-reveal">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/elite.png' ); ?>" alt="Elite">
                </div>
                <div class="builder-logo-wrap img-reveal">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Matrix.png' ); ?>" alt="Matrix">
                </div>
                <div class="builder-logo-wrap img-reveal">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Kripa Elite Background Removed.png' ); ?>" alt="Kripa Elite">
                </div>
                <div class="builder-logo-wrap img-reveal">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/MK IMPERIAL LOGO.png' ); ?>" alt="MK Imperial">
                </div>
            </div>
        </div>
    </section>    <!-- Process Section -->
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
                    <a href="#" class="btn btn-primary"><span class="arrow-up-right"><svg width="1.2em" height="1.2em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;"><g clip-path="url(#clip0_98_87)"><g clip-path="url(#clip1_98_87)"><path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/></g></g><defs><clipPath id="clip0_98_87"><rect width="20" height="20" fill="white"/></clipPath><clipPath id="clip1_98_87"><rect width="20" height="20" fill="white"/></clipPath></defs></svg></span> START YOUR JOURNEY</a>
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
                                <div class="project-card">
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
                    <a href="#" class="btn btn-primary" style="font-size: 0.8rem; padding: 1rem 2rem; border: none;"><span class="arrow-up-right"><svg width="1.2em" height="1.2em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;"><g clip-path="url(#clip0_98_87)"><g clip-path="url(#clip1_98_87)"><path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/></g></g><defs><clipPath id="clip0_98_87"><rect width="20" height="20" fill="currentColor"/></clipPath><clipPath id="clip1_98_87"><rect width="20" height="20" fill="currentColor"/></clipPath></defs></svg></span> START YOUR JOURNEY</a>
                </div>
            </div>

            <div class="reviews-grid">
                <!-- Large Review Card -->
                <div class="review-card large-card text-mask">
                    <div class="quote-mark">”</div>
                    <div class="review-content" style="position: relative; z-index: 2;">
                        <p class="reviewer-meta"><span class="diamond-icon">◆</span> DEVELOPER PARTERN'S NAME, MK IMPERIALS</p>
                        <h3 class="review-quote-large">"Their mandate-led approach brought structure, clarity, and focused execution to our sales process."</h3>
                        <p class="review-desc">"S&S Associates brought structure and clarity to our sales process. Their mandate-led approach ensured focused execution and consistent buyer communication throughout the project lifecycle."</p>
                    </div>
                </div>

                <!-- Right Column (Stacked Cards) -->
                <div class="reviews-right-col">
                    <div class="review-card text-mask">
                        <div class="quote-mark">”</div>
                        <div class="review-content" style="position: relative; z-index: 2;">
                            <p class="reviewer-meta"><span class="diamond-icon">◆</span> DEVELOPER PARTERN'S NAME, MK IMPERIALS</p>
                            <h3 class="review-quote">"Disciplined pricing, clear positioning, and execution that felt fully in-house."</h3>
                            <p class="review-desc">"What stood out was their discipline on pricing, positioning, and on-ground execution. They operated like an extension of our internal sales team."</p>
                        </div>
                    </div>

                    <div class="review-card text-mask">
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

<?php get_footer(); ?>
