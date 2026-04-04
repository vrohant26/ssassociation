<?php
/*
Template Name: Services Page
*/
get_header();
?>
<main class="site-main services-page">
    
    <!-- Services Hero Section -->
    <section class="services-hero gsap-reveal-section">
        <div class="container services-hero-container">
            <div class="services-hero-content">
                <div class="text-mask">
                    <div class="section-tag" style="justify-content: center;"><span class="diamond-icon">◆</span> OUR SERVICES</div>
                </div>
                <div class="text-mask">
                    <h1 class="hero-title fs-xxxl">We turn uncertainty <br> into financial freedom.</h1>
                </div>
                <div class="text-mask">
                    <p class="services-hero-desc">
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
            <video autoplay loop muted playsinline class="banner-video-full">
                <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/Night Skyline Cityscape Video.webm' ); ?>" type="video/webm">
            </video>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="services-stats-bar gsap-reveal-section">
        <div class="services-stats-grid">
            <div class="stat-item text-mask">
                <h3 class="stat-number">4+</h3>
                <p class="stat-label">Years of Experience</p>
            </div>
            <div class="stat-item text-mask">
                <h3 class="stat-number">200CR+</h3>
                <p class="stat-label">Closed Sales</p>
            </div>
            <div class="stat-item text-mask">
                <h3 class="stat-number">200+</h3>
                <p class="stat-label">Homes Sold</p>
            </div>
            <div class="stat-item text-mask">
                <h3 class="stat-number">100%</h3>
                <p class="stat-label">Client Satisfaction</p>
            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="services-process gsap-reveal-section">
        <div class="container container-large">
            <div class="text-mask">
                <h2 class="section-title fs-xxl section-title-bordered">Our Process</h2>
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
                        'image' => 'planning-optimized.jpg'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Sales Setup & Channel Alignment',
                        'desc' => 'We establish the sales infrastructure, onboard and align channel partners, and ensure consistent communication across all sales touchpoints.',
                        'result' => 'Seamless omnichannel alignment and distribution.',
                        'image' => 'marine-drive-optimized.jpg'
                    ],
                    [
                        'step' => '04',
                        'title' => 'On-Ground Sales Execution',
                        'desc' => 'We deploy structured sales operations, manage the funnel, and drive consistent buyer engagement to maintain momentum and improve conversions.',
                        'result' => 'Strict buyer engagement resulting in high conversions.',
                        'image' => 'people-meeting-optimized.jpg'
                    ],
                    [
                        'step' => '05',
                        'title' => 'Performance Tracking & Optimisation',
                        'desc' => 'We continuously monitor sales performance, analyse buyer behaviour, and refine strategy to sustain velocity and maximise project outcomes.',
                        'result' => 'Sustained velocity and mathematically maximised outcomes.',
                        'image' => 'blocks-optimized.jpg'
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

    <?php get_template_part('template-parts/section-reviews'); ?>
</main>
<?php get_footer(); ?>
