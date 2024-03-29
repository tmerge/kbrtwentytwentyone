<?php
/**
 * The impressum template file.
 *
 * This is the most generic template file in a WordPress theme
 * @link    https://tilmerge.xyz/
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBR | Impressum</title>
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
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/KBR_Logo_rotate.png" alt="KBR Logo" class="img-fluid"></a>
    </div>
    <div class="container-fluid">
        <div class="menu-header">
            <?php get_template_part( 'template-parts/nav'); ?>
        </div>
        <main>
            <div class="impressum">
                <h1 class="site-heading">Impressum</h1>
                <h2 className="heading-2">Kommunalbündnis Recke n.e.V.</h2>

                <p className="adress">
                    Buchholzstraße 18b <br></br>
                    49509 Recke
                </p>
                <p className="contact">
                    <i class="fas fa-envelope"></i> kbr@kommunalbuendnis-recke.de<br></br>
                    <i class="fas fa-phone-alt"></i> +49 (0) 5453 / 932470
                </p>
                <h2 className="heading-3">Vertretungsberechtigter Vorstand</h2>
                <p>Jürgen Visse</p>
                <p>Ole Stecker-Schürmann</p>
            </div>
            
            </div>
        </main>
    </div>
    <?php get_template_part( 'template-parts/social-bar'); ?>
    <?php get_footer(); ?>
</body>
</html>