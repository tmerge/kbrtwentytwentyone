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
    <title>KBR | Vorstand</title>
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
        <main class="page mx-auto">
            <h3>Vorstand</h3>
            <div class="card-wrapper">
                <div class="card">
                    <div class="card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mitglieder/jv.jpg" />
                    </div>
                    <div class="content">
                        <p class="name">Jürgen Visse</p>
                        <p>1. Vorsitzender</p>
                        <p>Beruf: Lehrer</p>
                        <p><i class="fas fa-envelope"></i> juergen@kbr.social</p>
                        <p><i class="fas fa-phone-alt"></i> +49 (0) 5453 / 0000</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mitglieder/os.jpg" />
                    </div>
                    <div class="content">
                        <p class="name">Ole Stecker-Schürmann</p>
                        <p>2. Vorsitzender</p>
                        <p>Beruf: Entwicklungsingenieur</p>
                        <p><i class="fas fa-envelope"></i> ole@kbr.social</p>
                        <p><i class="fas fa-phone-alt"></i> +49 (0) 5453 / 0000</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php get_template_part( 'template-parts/social-bar'); ?>
    <?php get_footer(); ?>
    <div id="overlay" class="overlay"></div>
</body>
</html>

