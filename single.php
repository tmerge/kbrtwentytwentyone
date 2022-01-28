<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kommunal Bündnis Recke | ...weil es um Reck geht!</title>
    <?php get_header(); ?>
</head>

<body>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s.svg" class="bg img-responsive container-sm-auto">
    <div class="container container-md d-flex flex-column min-vh-100 justify-content-center align-items-center">
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
</body>