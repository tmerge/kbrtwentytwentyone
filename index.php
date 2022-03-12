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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/assets/kbr_favicon.ico" />
    <title>Kommunal Bündnis Recke | ...weil es um Reck geht!</title>
</head>
<body>
    <div class="logo">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/KBR_Logo.png" alt="KBR Logo" class="img-fluid"></a>
    </div>
    <div class="container-fluid">
        <div class="header"><?php get_header()?></div>
        <main>
            content
        </main>
    </div>
</body>
</html>

