<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * @link    https://tilmerge.xyz/
 */
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>KBR | ...weil es um Recke geht!</title>
    <?php get_header(); ?>
</head>
<body id="body" class="desktop menu-mobile">
    <div class="mobile-menu-header">
        <div class="logo">
            <a href="https://wordpress.kbr.social"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/KBR_Logo.png" alt="KBR Logo"></a>
        </div>
        <div class="menu-toggle">
            <div></div>
        </div>
    </div>
    <div class="logo">
        <a href="https://wordpress.kbr.social"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/KBR_Logo_rotate.png" alt="KBR Logo"></a>
    </div>
    <div class="container-fluid">
        <div class="menu-header">
            <?php get_template_part( 'template-parts/nav'); ?>
        </div>
        <main>
            <div class="hero p-2">
                <div id="carouselKBRIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselKBRIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselKBRIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/rathaus.webp" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/kanal.JPG" alt="Second slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselKBRIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselKBRIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <section class="wp-section">
                <div class="wp-wrapper">
                    <div class="wp-content-wrapper">
                        <p class="wp-title">— Unsere Werte.</br>Bürgernah.Transparent.</p>
                        <p class="wp-text"></p>
                    </div>
                    <img class="wp-img" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/teamwork.webp"/>
                </div>
            </section>
            <section class="wp-section">
                <div class="wp-wrapper">
                    <img class="wp-img" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/philosophie.webp"/>
                    <div class="wp-content-wrapper">
                        <p class="wp-title">— Unsere Philosophie.</br>Qualität.Familiär.</p>
                        <p class="wp-text"></p>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php get_template_part( 'template-parts/social-bar'); ?>
    <?php get_footer(); ?>
    <div id="overlay" class="overlay"></div>
</body>
</html>

