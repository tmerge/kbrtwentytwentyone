<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBR | Blog</title>
    <?php get_header(); ?>
</head>

<body>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s.svg" class="bg img-responsive container-sm-auto">
    <main class="container d-flex flex-column min-vh-100 justify-content-center p-12">
        <h1 class="site-heading">blog</h1>
        <?php
        echo(get_the_author_meta('user_email', 2));
        $args = array('numberposts' => '20');
        $recent_posts = wp_get_recent_posts($args);
        foreach ($recent_posts as $recent) {
            printf(
                '<li class="blog d-flex flex-column list-group-item p-2 mt-4 rounded">
                    <a class="fs-4 fw-bold" href="%1$s">%2$s</a>
                    <div class="mt-2 meta-data">%3$s</div>
                </li>',
                esc_url(get_permalink($recent['ID'])),
                apply_filters('the_title', $recent['post_title'], $recent['ID']),
                get_the_date('d.m.Y', $recent['ID']),
            );
        }
        ?>
    </main>
    <?php get_footer(); ?>

</body>

</html>