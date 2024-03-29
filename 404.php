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
    <title>KBR | 404</title>
    <?php get_header(); ?>
</head>
<body id="body" class="desktop menu-mobile">
    <div class="mobile-menu-header">
        <div class="logo">
            <a href="https://wordpress.kbr.social"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/KBR_Logo.png" alt="KBR Logo"></a>
        </div>
        <div class="menu-toggle">
            <div></div>
        </div>
    </div>
    <div class="logo">
        <a href="https://wordpress.kbr.social"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/KBR_Logo_rotate.png" alt="KBR Logo"></a>
    </div>
    <div class="container-fluid">
        <div class="menu-header">
            <?php get_template_part( 'template-parts/nav'); ?>
        </div>
        <main>
            <p><?php echo stripslashes_from_strings_only($_SERVER["REQUEST_URI"]) . " konnte nicht gefunden werden." ?></p>
        </main>
    </div>
    <div class="social-bar align-items-center text-center mt-4" id="social">
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
    <div class="overlay"></div>
</body>
</html>

