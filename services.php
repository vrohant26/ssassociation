<?php
/*
Template Name: Services Page
*/
get_header();
?>
<main class="site-main services-page">
    
    <!-- Services Hero Section -->
    <section class="services-hero gsap-reveal-section">
        <div class="container services-hero-container" style="justify-content: center; text-align: center;">
            <div class="services-hero-content" style="max-width: 1200px; display: flex; flex-direction: column; align-items: center;">
                <div class="text-mask">
                    <div class="section-tag" style="justify-content: center;"><span class="diamond-icon">◆</span> OUR SERVICES</div>
                </div>
                <div class="text-mask">
                    <h1 class="hero-title fs-xxxl">We turn uncertainty <br> into financial freedom.</h1>
                </div>
                <div class="text-mask">
                    <p class="services-hero-desc fs-md" style="margin: 2rem auto 0; text-align: center;">
                        We operate as an extension of our partners' teams—bringing clarity to positioning, discipline to execution, and consistency to outcomes across the entire sales lifecycle.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Full Width City Banner -->
    <section class="services-banner">
        <div class="banner-wrapper">
            <!-- Dark Cityscape Video Banner -->
            <video autoplay loop muted playsinline class="full-width-banner" style="object-fit: cover; width: 100%; height: 70vh;">
                <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/Night Skyline Cityscape Video.webm' ); ?>" type="video/webm">
            </video>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="services-stats-bar gsap-reveal-section">
        <div class="services-stats-grid">
            <div class="stat-item text-mask">
                <h3 class="stat-number">20+</h3>
                <p class="stat-label">Years of Combined<br>Market Experience</p>
            </div>
            <div class="stat-item text-mask">
                <h3 class="stat-number">500+</h3>
                <p class="stat-label">Successful Residential<br>Transactions</p>
            </div>
            <div class="stat-item text-mask">
                <h3 class="stat-number">85%</h3>
                <p class="stat-label">Exclusive Mandate<br>Clearance Rate</p>
            </div>
            <div class="stat-item text-mask">
                <h3 class="stat-number">100%</h3>
                <p class="stat-label">Commitment to Structured<br>Execution</p>
            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="services-process gsap-reveal-section">
        <div class="container container-large">
            <div class="text-mask">
                <h2 class="section-title fs-xxl" style="margin-bottom: 6rem; border-bottom: 1px solid rgba(0,0,0,0.1); padding-bottom: 2rem;">Our Process</h2>
            </div>
            
            <div class="process-zigzag-wrapper">
                <?php
                $process_slides = [
                    [
                        'step' => '01',
                        'title' => 'Mandate Evaluation & Strategic Alignment',
                        'desc' => 'We begin by evaluating the project’s market potential, defining positioning, pricing logic, and sales objectives to ensure complete alignment before execution begins.',
                        'result' => 'Clear alignment mapping before execution kicks off.',
                        'image' => 'process_evaluation.png'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Strategy & Market Positioning',
                        'desc' => 'We define the project’s market positioning, pricing strategy, and buyer segmentation to create a clear, competitive, and demand-aligned sales approach.',
                        'result' => 'A structured, high-demand competitive approach.',
                        'image' => 'process_strategy.png'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Sales Setup & Channel Alignment',
                        'desc' => 'We establish the sales infrastructure, onboard and align channel partners, and ensure consistent communication across all sales touchpoints.',
                        'result' => 'Seamless omnichannel alignment and distribution.',
                        'image' => 'process_setup.png'
                    ],
                    [
                        'step' => '04',
                        'title' => 'On-Ground Sales Execution',
                        'desc' => 'We deploy structured sales operations, manage the funnel, and drive consistent buyer engagement to maintain momentum and improve conversions.',
                        'result' => 'Strict buyer engagement resulting in high conversions.',
                        'image' => 'process_execution.png'
                    ],
                    [
                        'step' => '05',
                        'title' => 'Performance Tracking & Optimisation',
                        'desc' => 'We continuously monitor sales performance, analyse buyer behaviour, and refine strategy to sustain velocity and maximise project outcomes.',
                        'result' => 'Sustained velocity and mathematically maximised outcomes.',
                        'image' => 'process_tracking.png'
                    ]
                ];

                foreach($process_slides as $index => $slide):
                    $is_even = $index % 2 !== 0; 
                    $row_class = $is_even ? 'process-row row-reverse' : 'process-row';
                ?>
                <div class="<?php echo esc_attr($row_class); ?>">
                    <div class="process-img-col img-reveal">
                        <!-- Custom Generated Image -->
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $slide['image'] ); ?>" alt="Process Step <?php echo esc_attr($slide['step']); ?>">
                    </div>
                    <div class="process-text-col">
                        <div class="text-mask"><span class="process-number"><?php echo esc_html($slide['step']); ?></span></div>
                        <div class="text-mask"><h3 class="process-title fs-lg"><?php echo esc_html($slide['title']); ?></h3></div>
                        <div class="text-mask"><p class="process-desc fs-md"><?php echo esc_html($slide['desc']); ?></p></div>
                        
                        <div class="text-mask">
                            <div class="process-result-card">
                                <strong>RESULT</strong>
                                <p><?php echo esc_html($slide['result']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

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
</main>
<?php get_footer(); ?>
