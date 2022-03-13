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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/assets/kbr_favicon.ico" />
    <title>Kommunal Bündnis Recke | ...weil es um Reck geht!</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="logo">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/KBR_Logo.png" alt="KBR Logo" class="img-fluid"></a>
    </div>
    <div class="container-fluid">
        <div class="header"><?php include(get_template_directory_uri() . '/template-parts/nav.php'); ?></div>
        <main class="min-vh-100 pt-4 bg-warning">
            <div class="hero"></div>
            testo
            <section class="min-vh-100">
                section1
            </section>
            <section class="min-vh-100">
                section2
            </section>
        </main>
    </div>
    <div class="social-bar align-items-center text-center" id="social">
        <ul>
            <li class="social-link">
                <a href="https://www.instagram.com/kommunalbuendnis_recke/"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="social-link">
                <a href="https://www.facebook.com/kommunalbuendnis/"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="social-link">
                <a href="https://www.youtube.com/channel/UCVna1ANc2cM1AZCeiz4_NQQ"><i class="fab fa-youtube"></i></a>
            </li>
        </ul>
    </div>
    <?php get_footer(); ?>
</body>
</html>

