<?php
/**
 * The blog template file.
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
    <title>KBR | Presse</title>
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
        <main class="blog-wrapper">
            <h3 class="blog-title">Presse</h3>
            <div clas="blog-container">
            <?php
            echo(get_the_author_meta('user_email', 2));
            $args = array('numberposts' => '30');
            $recent_posts = wp_get_recent_posts($args);
            foreach ($recent_posts as $recent) {
                printf(
                    '<li class="">
                        <a class="" href="%1$s">%2$s</a>
                        <div class="mt-2 meta-data">%3$s</div>
                    </li>',
                    esc_url(get_permalink($recent['ID'])),
                    apply_filters('the_title', $recent['post_title'], $recent['ID']),
                    get_the_date('d.m.Y', $recent['ID']),
                );
            }
            ?>
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
    <div id="overlay" class="overlay"></div>
</body>
</html>