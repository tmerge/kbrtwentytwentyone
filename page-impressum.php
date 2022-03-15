<?php
/**
 * The impressum template file.
 *
 * This is the most generic template file in a WordPress theme
 * @link    https://tilmerge.xyz/
 */
?>
<?php $debug = false;
if ($debug) {
    wp_safe_redirect(home_url());
}
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

<body>
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
</body>
</html>