<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBR | <?php the_title(); ?></title>
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
            <div class="container-fluid">
                <div class="row my-5">
                    <div class="post-container">
                        <h2 class="display-4"><?php the_title(); ?></h2>
                        <p class="text-justify"><?php the_content(); ?></p>
                    </div>
                </div>
                    <div class="row">
                        <a href="<?php echo home_url() . "/blog"; ?>"><i class="fas fa-arrow-circle-left"></i></a>
                    </div>
                </div>
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