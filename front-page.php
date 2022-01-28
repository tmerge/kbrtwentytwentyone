<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBR | ...weil es um Recke geht!</title>
    <?php get_header(); ?>
</head>

<body>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s.svg" class="bg img-responsive container-sm-auto">
    <div class="container-fluid container-md d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="row my-3">
            <div class="col my-5 align-self-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/KBR_Logo.png" alt="KBR Logo" class="img-fluid">
            </div>
        </div>
        <div class="row my-5">
            <div class="col col-sm text-center text-center-md">
                <h1 class="display-3 text-warp">Wartungsarbeiten</h1>
                <h3 class="display-5 text-warp">Wir sind bald wieder für Euch da!</h3>
            </div>
        </div>
        <div class="row my-2">
            <div class="col d-block">
                <div class="card">
                    <div class="card-header">
                        Letzte Beiträge
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php
                        $args = array('numberposts' => '3');
                        $recent_posts = wp_get_recent_posts($args);
                        foreach ($recent_posts as $recent) {
                            printf(
                                '<li class="list-group-item"><a href="%1$s">%2$s</a></li>',
                                esc_url(get_permalink($recent['ID'])),
                                apply_filters('the_title', $recent['post_title'], $recent['ID'])
                            );
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row my-3" id="social">
            <div class="col col-md-3 align-self-center">
                <a class="social-link" href="https://www.instagram.com/kommunalbuendnis_recke/"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col col-md-3 align-self-center">
                <a class="social-link" href="https://www.facebook.com/kommunalbuendnis/"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="col col-md-3 align-self-center">
                <a class="social-link" href="https://www.youtube.com/channel/UCVna1ANc2cM1AZCeiz4_NQQ"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        
        <?php get_footer(); ?>

    </div>

</body>

</html>