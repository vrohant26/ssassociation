<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/favicon.ico' ); ?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Full Page Menu Overlay (Extracted from #page for independent tracking) -->
    <div class="full-page-menu" id="fullPageMenu">
        <div class="fp-menu-header">
            <div class="fp-logo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/logo-white.svg' ); ?>" alt="S&S Associates">
            </div>
            <div class="fp-header-right">
                <button class="btn btn-outline btn-close-menu" id="closeMenuBtn">
                    <span class="close-icon" style="font-size: 1em; margin-right : 0.5rem ; display: inline-block; vertical-align: middle; line-height: 1;">✕</span> CLOSE
                </button>
                <a href="#" class="btn btn-secondary btn-discovery">
                    <span class="arrow-up-right"><svg width="1.2em" height="1.2em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;"><path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/></svg></span> BOOK A DISCOVERY CALL
                </a>
            </div>
        </div>

        <div class="fp-menu-body">
            <div class="fp-links-col">
                <nav class="fp-nav">
                    <ul>
                        <li><div class="menu-text-mask"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">ABOUT</a></div></li>
                        <li><div class="menu-text-mask"><a href="#">SERVICES</a></div></li>
                        <li><div class="menu-text-mask"><a href="#">INSIGHTS</a></div></li>
                        <li><div class="menu-text-mask"><a href="#">CONTACT</a></div></li>
                    </ul>
                </nav>
            </div>
            
            <div class="fp-image-col">
                <div class="fp-image-wrapper menu-img-reveal">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Aerial Highway City Photo.webp' ); ?>" alt="City View">
                </div>
                <div class="fp-image-meta">
                    <div class="fp-socials">

                        <div class="menu-text-mask">
                            <a href="#" class="social-icon menu-reveal-item">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle;"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                            </a>
                        </div>

                    </div>
                    <div class="fp-address">
                        <div class="menu-text-mask"><div class="menu-reveal-item">LEVEL 4/459 CHURCH ST<br>CREMORNE VIC 3121</div></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fp-menu-footer">
            <div class="fp-footer-left">
                <div class="menu-text-mask"><div class="menu-reveal-item">© <?php echo date('Y'); ?> S&S ASSOCIATES</div></div>
            </div>
            <div class="fp-footer-center">
                <div class="menu-text-mask"><a href="mailto:ssassociates2317@gmail.com" class="menu-reveal-item">ssassociates2317@gmail.com</a></div>
            </div>
            <div class="fp-footer-right">
                <div class="menu-text-mask"><a href="#" class="menu-reveal-item">PRIVACY POLICY</a></div>
            </div>
        </div>
    </div>

<div id="page" class="site">
    <header class="site-header <?php echo is_page_template('about.php') ? 'is-stuck always-stuck' : ''; ?>" id="site-header">
        <div class="header-left">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/logo-white.svg' ); ?>" alt="S&S Associates Logo" class="header-logo-img">
            </a>
        </div>
        <div class="header-right">
            <button class="btn btn-primary btn-menu">
                <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24" style="vertical-align: middle;"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17h8M5 12h14m-8-5h8"/></svg></span> MENU
            </button>
            <a href="#" class="btn btn-secondary btn-discovery">
                <span class="arrow-up-right"><svg width="1.2em" height="1.2em" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;"><path d="M6.27241 6H14.0504V13.778M13.1704 6.879L6.02441 14.026" stroke="currentColor" stroke-width="2" stroke-linecap="square"/></svg></span> BOOK A DISCOVERY CALL
            </a>
        </div>
    </header>
