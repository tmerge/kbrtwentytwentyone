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
    <title>KBR | Mitgliedsantrag</title>
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
        <main class="mitglied-wrapper">
            <h3 class="member-heading">Mitgliedsantrag</h3>
            <div class="content">
                <p>Möchten auch Sie mitgestalten, wenn es um Recke geht?</p>

                <p>Wir möchten in Recke eine transparente Politik, die bürgernah und demokratisch ist. Es geht darum, etwas auf den Weg zu bringen, das unserem Motto "Was gut für Recke ist" entspricht. Werden Sie Mitglied im KommunalBündnis Recke und gestalten Sie mit!</p>

                <p>Das KommunalBündnis Recke ist keine Partei, sondern eine Wählergemeinschaft (ein nicht eingetragener Verein).</p>

                <p>Sei dabei, wenn es um Recke geht!</p>

                <p>Hier können Sie sich unsere Mitglieddsantrag im PDF-Format herunterladen:</p>

                <a href="/">PDF Download</a>

                <p>Einfach ausfüllen und unterschreiben! Danach per Post oder E-Mail an:</p>

                <p>KommunalBündnis Recke</br>
                kbr@kommunalbuendnis-recke.de</br>
                Buchholzstraße 18b</br>
                49509 Recke</br></p>

                <p>Wir freuen uns auf Sie!</p>
    </div>
        </main>
    </div>
    <div class="social-bar" id="social">
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
    <div id="overlay" class="overlay"></div>
</body>
</html>

