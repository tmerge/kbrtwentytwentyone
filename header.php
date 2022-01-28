<!DOCTYPE html>
<html lang="en">
<?php wp_head(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/kbr_favicon.ico">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent mr-auto">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/KBR_Logo.png" class="img-responsive" height="45px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mr-auto" id="navbarToggler">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo home_url(); ?>">startseite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">blog</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            politik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Rat</a></li>
                            <li><a class="dropdown-item" href="#">Anträge</a></li>
                        </ul>
                    </li> -->
                </ul>
                <!-- <button class="btn rounded">Mitglied werden <i class="fas fa-checked"></i></button>-->
                
                <!-- <form class="d-flex">
                    <input class="form-control me-2 rounded" type="search" placeholder="Suche" aria-label="Suche">
                    <button class="btn" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form> -->
            </div>
        </div>
    </nav>
</body>

</html>