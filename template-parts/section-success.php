<?php
/**
 * Template Part: Success Stories Section
 * Used on: front-page.php, about.php
 * Include with: get_template_part('template-parts/section-success');
 */
?>
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
                                    'launched' => '2026',
                                    'units_released' => '72',
                                    'units_sold' => '51 Units Sold in 5 Months'
                                ],
                                [
                                    'title' => 'MK Imperial',
                                    'image' => get_template_directory_uri() . '/assets/images/MK Imperial Thumbnail.png',
                                    'launched' => '2025',
                                    'units_released' => '84',
                                    'units_sold' => '60 Units Sold in 5 Months'
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
