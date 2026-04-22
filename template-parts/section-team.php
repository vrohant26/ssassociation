<?php
/**
 * Template Part: Our Team Section
 * Used on: front-page.php, about.php
 * Include with: get_template_part('template-parts/section-team');
 */
?>
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
                    A focused and visionary leader, the Director brings over 4 years of experience in residential real estate, having successfully led teams of 30+ members and managed multiple projects simultaneously. With a strong emphasis on structured execution and strategic clarity, they have consistently driven disciplined sales performance across up to five projects at a time.
                </p>
            </div>
            
            <div class="director-profile" style="width: 100%; max-width: 450px; text-align: left;">
                <div class="director-image img-reveal" style="border-radius: 12px; overflow: hidden; aspect-ratio: 4/5; margin-bottom: 1.5rem;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ss-associates-director.jpeg' ); ?>" alt="Director" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(100%);">
                </div>
                <div class="text-mask">
                    <h4 class="director-name" style="font-size: 1rem; color: #1f1f1f; font-weight: 700; margin: 0; display: flex; align-items: center; gap: 0.5rem; letter-spacing: 0.05em;"><span style="color: black;">Prateek Ghag</span> <span style="font-size: 0.75rem; color: #666; font-weight: 600;">/ Director</span></h4>
                </div>
            </div>
        </div>
    </section>
