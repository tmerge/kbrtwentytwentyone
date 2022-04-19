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
    <title>KBR | Bürgerpreis</title>
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
        <main class="page buergerpreis">
            <h3>Bürgerpreis</h3>
            
            <div class="b-img-container"><img class="b-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_BP22.png" alt="Bürgerpreis Logo"></div>
            <p class="b-info-text">In unserer Gemeinde gibt es zahlreiche Menschen, die sich ehrenamtlich und in vor­bildlicher Weise für das Gemeinwohl einsetzen. Sie sind unermüdlich für andere da und leisten damit einen unverzichtbaren Beitrag für unsere Gemeinschaft. Um dieses unentgeltliche Wirken anzuerkennen und das Bewusstsein um Wert und Wirkung des ehrenamtlichen Einsatzes zu stärken, verleiht das KommunalBündis Recke in 2022 zum 9. Mal den Bürgerpreis.</br></br> 

Der Bürgerpreis ist in Summe mit 1.000 Euro dotiert und kann an Einzelpersonen oder an örtliche Verbände, Vereine, Gruppen und Initiativen verliehen werden, die sich durch besondere Aktivitäten in den Bereichen Kultur, Soziales, Sport oder Umwelt­schutz engagieren und so herausragenden Gemeinsinn bewiesen haben. Auch können ortsansässige Personen oder Institutionen, die sich in besonderer Weise durch ihr ehrenamtliches Engagement im Katastrophenschutz oder Rettungsdienst oder bei der Unterstützung Hilfsbedürftiger, wie kranker, behinderter oder sozialbenachteiligter Menschen, verdient gemacht haben, ausgezeichnet werden. </br>

Meistens wirken Ehrenamtliche im Verborgenen und halten das, was sie tun, für selbst­verständlich – „keine große Sache“.</br> 
Aber das ist es eben doch. Wer sieht, wo Hilfe gebraucht wird und mit anpackt, hat Anerkennung verdient. Um diese Personen und Gruppen für ihr Engagement auszuzeichnen und unseren Dank auszusprechen, sind wir auf die Mithilfe der Recker Bürgerinnen und Bürger angewiesen. Kennen Sie eine Person oder eine Gruppe, die Ihrer Meinung nach die Gemeinde Recke lebendig hält und einen Bürgerpreis verdient hätte?</br>

</br>Dann reichen Sie Ihren Vorschlag oder Ihre Bewerbung bis zum <strong>xx. xx 2022</strong> mit einer kurzen Beschreibung des besonderen Engagements beim KommunalBündnis Recke ein!</br>
Sie können uns Ihren Vorschlag, Ihre Bewerbung wie folgt einreichen: </br>
<ul class="list-group ">
    <li class="list-group-item"><a href="#kontaktform">Kontaktformular</a></li>
    <li class="list-group-item">buergerpreis@kommunalbuendnis-recke.de</li>
    <li class="list-group-item">Ruth Meyer Tel.: 05453/99674</li>
    <li class="list-group-item">Sonja Wallmeyer Tel.: 05453/807944</li>
    <li class="list-group-item">Post: KommunalBündnis Recke, Buchholzstraße 18b, 49509 Recke</li>
</ul></br>
Über die Verleihung des Bürgerpreises entscheidet eine Jury, die sich aus den Preis­trägern des Vorjahres und drei Mitgliedern des KommunalBündnisses Recke zusam­mensetzt. Die Jury behält sich bei der Vergabe des Bürgerpreises vor, diesen entwe­der als Einzelpreis oder auch auf mehrere Personen bzw. Gruppen aufzuteilen.
            <p class="h4 mt-2">Wen möchten Sie für den Bürgerpreis des Jahres 2022 vorschlagen?</p>
            <form action="" method="post" id="kontaktform">
                <div class="form-group py-2">
                    <label for="Vorname">Vorname</label>
                    <input type="text" class="form-control" id="vorname"  placeholder="Vorname eintragen" name="vorname">
                </div>
                <div class="form-group py-2">
                    <label for="E-Mail">Nachname</label>
                    <input type="text" class="form-control" id="nachname"  placeholder="Nachnamen eintragen" name="nachname">
                </div>
                <div class="form-group py-2">
                    <label for="Anmerkung">Warum sollte ihr Vorschlag den Bürgerpreis 2022 gewinnen?</label>
                    <textarea class="form-control" id="anmekungen" rows="3" name="anmerkung"></textarea>
                </div>
                <p class="font-italic">Angaben zu Ihnen</p>
                <div class="form-group py-2">
                    <label for="Vorname">Vorname</label>
                    <input type="text" class="form-control" id="vorname"  placeholder="Vorname eintragen" name="s_vorname">
                </div>
                <div class="form-group py-2">
                    <label for="E-Mail">Nachname</label>
                    <input type="text" class="form-control" id="nachname"  placeholder="Nachnamen eintragen" name="s_nachname">
                </div>
                <div class="form-group py-2">
                    <label for="E-Mail">E-Mail Adresse</label>
                    <input type="text" class="form-control" id="e-mail" aria-describedby="emailHelp" placeholder="E-Mail eintragen" name="email">
                </div>
                <div class="form-group py-2">
                    <label for="Telefon">Telefon</label>
                    <input type="tel" class="form-control" id="telefon" aria-describedby="telefonHelp" placeholder="+49 5453 1020" name="telefon">
                </div>
            <button type="submit" name="submit" value="Submit" class="btn btn-light my-2">Absenden <i class="fas fa-arrow-right"></i></button>
            </form>
            <?php
if(isset($_POST['submit'])){
    $notfication = '<div class="alert alert-success alert-dismissible fixed-top">
  <strong>Erfolgreich!</strong> Vielen Dank für ihre Nominierung.
  <button type="button" class="btn-close" aria-label="Close"></button>
  </div>';
    echo $notfication;
    $to = "til.merge@live.de"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['vorname'];
    $last_name = $_POST['nachname'];
    $subject = "Bürgerpreis Nominierung";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['anmerkung'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
        <section class="col-md-7 col-sm-12 col-md-offset-5">
            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#h-container" aria-expanded="false" aria-controls="h-container">Historie</button>
            <div id="h-container" class="collapse py-2">
            <?php
            $args = array('numberposts' => '10',
        'category' => 7);
            $recent_posts = wp_get_recent_posts($args);
            foreach ($recent_posts as $recent) {
                printf(
                    '<article class="post">
                        <a class="" href="%1$s">%2$s</a>
                        <div class="mt-2 meta-data">%3$s</div>
                    </article>',
                    esc_url(get_permalink($recent['ID'])),
                    apply_filters('the_title', $recent['post_title'], $recent['ID']),
                    get_the_date('d.m.Y', $recent['ID']),
                );
            }
            ?></div>
        </section>
    </main>

    </div>
    <?php get_template_part( 'template-parts/social-bar'); ?>
    <?php get_footer(); ?>
    <div id="overlay" class="overlay"></div>
</body>
</html>

