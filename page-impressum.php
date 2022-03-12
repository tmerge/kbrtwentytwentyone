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
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s.svg" class="bg img-responsive container-sm-auto">
    <main class="container d-flex flex-column vh-100 justify-content-center p-3">
        <div>
            <h1 class="site-heading">impressum</h1>
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
        <?php get_footer(); ?>
    </main>

</body>

</html>