<?php
/**
 * Template Part: Reviews Section
 * Used on: front-page.php, about.php, services.php
 * Include with: get_template_part('template-parts/section-reviews');
 */
?>
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
                    <div class="quote-svg quote-svg-large"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6.938 4.501c2-.053 4.172 1.435 4.523 4.6l.027.313l.001.006c.191 3.319-2.124 7.857-7.181 10.039a.5.5 0 0 1-.631-.209l-1.11-1.919a.5.5 0 0 1 .188-.686c1.71-.962 3.043-2.471 3.845-4.302c-1.19-.21-2.045-.703-2.618-1.36c-.667-.766-.905-1.7-.905-2.517c0-2.214 1.703-4.005 3.86-3.965m10 0c2-.053 4.172 1.435 4.523 4.6l.027.313l.001.006c.191 3.319-2.124 7.857-7.181 10.039a.5.5 0 0 1-.631-.209l-1.11-1.919a.5.5 0 0 1 .188-.686c1.71-.962 3.043-2.471 3.845-4.302c-1.19-.21-2.045-.703-2.618-1.36c-.667-.766-.905-1.7-.905-2.517c0-2.214 1.704-4.005 3.86-3.965"/></svg></div>
                    <div class="review-content" style="position: relative; z-index: 2;">
                        <p class="reviewer-meta"><span class="diamond-icon">◆</span> Manish Asrani, Matrix Constructions</p>
                        <h3 class="review-quote-large">"Their mandate-led approach brought structure, clarity, and focused execution to our sales process."</h3>
                        <p class="review-desc">"S&S Associates brought structure and clarity to our sales process. Their mandate-led approach ensured focused execution and consistent buyer communication throughout the project lifecycle."</p>
                    </div>
                </div>

                <!-- Right Column (Stacked Cards) -->
                <div class="reviews-right-col">
                    <div class="review-card text-mask card-reveal">
                        <div class="quote-svg quote-svg-small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6.938 4.501c2-.053 4.172 1.435 4.523 4.6l.027.313l.001.006c.191 3.319-2.124 7.857-7.181 10.039a.5.5 0 0 1-.631-.209l-1.11-1.919a.5.5 0 0 1 .188-.686c1.71-.962 3.043-2.471 3.845-4.302c-1.19-.21-2.045-.703-2.618-1.36c-.667-.766-.905-1.7-.905-2.517c0-2.214 1.703-4.005 3.86-3.965m10 0c2-.053 4.172 1.435 4.523 4.6l.027.313l.001.006c.191 3.319-2.124 7.857-7.181 10.039a.5.5 0 0 1-.631-.209l-1.11-1.919a.5.5 0 0 1 .188-.686c1.71-.962 3.043-2.471 3.845-4.302c-1.19-.21-2.045-.703-2.618-1.36c-.667-.766-.905-1.7-.905-2.517c0-2.214 1.704-4.005 3.86-3.965"/></svg></div>
                        <div class="review-content" style="position: relative; z-index: 2;">
                            <p class="reviewer-meta"><span class="diamond-icon">◆</span> Pawan Tharwani, Elite Group</p>
                            <h3 class="review-quote">"Disciplined pricing, clear positioning, and execution that felt fully in-house."</h3>
                            <p class="review-desc">"What stood out was their discipline on pricing, positioning, and on-ground execution. They operated like an extension of our internal sales team."</p>
                        </div>
                    </div>

                    <div class="review-card text-mask card-reveal">
                        <div class="quote-svg quote-svg-small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6.938 4.501c2-.053 4.172 1.435 4.523 4.6l.027.313l.001.006c.191 3.319-2.124 7.857-7.181 10.039a.5.5 0 0 1-.631-.209l-1.11-1.919a.5.5 0 0 1 .188-.686c1.71-.962 3.043-2.471 3.845-4.302c-1.19-.21-2.045-.703-2.618-1.36c-.667-.766-.905-1.7-.905-2.517c0-2.214 1.703-4.005 3.86-3.965m10 0c2-.053 4.172 1.435 4.523 4.6l.027.313l.001.006c.191 3.319-2.124 7.857-7.181 10.039a.5.5 0 0 1-.631-.209l-1.11-1.919a.5.5 0 0 1 .188-.686c1.71-.962 3.043-2.471 3.845-4.302c-1.19-.21-2.045-.703-2.618-1.36c-.667-.766-.905-1.7-.905-2.517c0-2.214 1.704-4.005 3.86-3.965"/></svg></div>
                        <div class="review-content" style="position: relative; z-index: 2;">
                            <p class="reviewer-meta"><span class="diamond-icon">◆</span> Santosh Nankani, Kripa Elite</p><br>
                            <h3 class="review-quote">Couldn't be happier!</h3>
                            <p class="review-desc">"Their understanding of the micro-market and buyer behaviour translated into steady sales momentum. The process was transparent, professional, and outcome-driven."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
