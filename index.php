<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header();
?>

<main id="primary" class="site-main generic-page container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header text-mask">
                    <?php the_title( '<h1 class="entry-title section-title fs-xxl">', '</h1>' ); ?>
                </header>

                <div class="entry-content section-desc fs-md">
                    <?php
                    the_content();
                    ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</main>

<?php
get_footer();
