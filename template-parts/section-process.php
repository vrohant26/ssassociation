<?php
/**
 * Template Part: Our Process Section (Carousel)
 * Used on: front-page.php, about.php
 * Include with: get_template_part('template-parts/section-process');
 */
?>
    <!-- Our Process Section -->
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
                        'step'  => 'STEP 01',
                        'title' => 'Mandate Evaluation & Strategic Alignment',
                        'desc'  => 'We begin by evaluating the project\'s market potential, defining positioning, pricing logic, and sales objectives to ensure complete alignment before execution begins.',
                        'img'   => get_template_directory_uri() . '/assets/images/Step 1 process.png'
                    ],
                    [
                        'step'  => 'STEP 02',
                        'title' => 'Strategy & Market Positioning',
                        'desc'  => 'We define the project\'s market positioning, pricing strategy, and buyer segmentation to create a clear, competitive, and demand-aligned sales approach.',
                        'img'   => get_template_directory_uri() . '/assets/images/planning-optimized.jpg'
                    ],
                    [
                        'step'  => 'STEP 03',
                        'title' => 'Sales Setup & Channel Alignment',
                        'desc'  => 'We establish the sales infrastructure, onboard and align channel partners, and ensure consistent communication across all sales touchpoints.',
                        'img'   => get_template_directory_uri() . '/assets/images/marine-drive-optimized.jpg'
                    ],
                    [
                        'step'  => 'STEP 04',
                        'title' => 'On-Ground Sales Execution',
                        'desc'  => 'We deploy structured sales operations, manage the funnel, and drive consistent buyer engagement to maintain momentum and improve conversions.',
                        'img'   => get_template_directory_uri() . '/assets/images/people-meeting-optimized.jpg'
                    ],
                    [
                        'step'  => 'STEP 05',
                        'title' => 'Performance Tracking & Optimisation',
                        'desc'  => 'We continuously monitor sales performance, analyse buyer behaviour, and refine strategy to sustain velocity and maximise project outcomes.',
                        'img'   => get_template_directory_uri() . '/assets/images/blocks-optimized.jpg'
                    ]
                ];
                ?>
                <div class="swiper process-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($process_slides as $index => $slide) : ?>
                            <div class="swiper-slide process-slide card-reveal">
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
