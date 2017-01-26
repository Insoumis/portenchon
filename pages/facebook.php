<!DOCTYPE html>
<html>
    <head>
        <title>Facebook insoumis - Portail insoumis</title>
        <link rel="stylesheet" type="text/css" media="screen" title="Default" href="/styles/v01b00.css" />
        <link rel="apple-touch-icon" sizes="180x180" href="/elements/favicon-apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/elements/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/elements/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/includes/manifest.json">
        <link rel="mask-icon" href="/elements/favicon-safari-pinned-tab.svg" color="#0198b5">
        <meta name="apple-mobile-web-app-title" content="Portail insoumis">
        <meta name="application-name" content="Portail insoumis">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <div class="column">
            <a name="top"></a>
            <h1>Facebook insoumis</h1>
            <hr />
            <?php
            // Integre la gestion du formulaire, désactivé en attente d'un captcha
//            include('contact/contact-send.php');
            ?>
            <ul class="menu">
                <li class="home"><a href="/" title="Accueil">Accueil</a></li>
                <li class="websites"><a href="/sites-internet" title="Sites Internet">Sites Internet</a></li>
                <li class="youtube"><a href="/youtube" title="YouTube">YouTube</a></li>
                <li class="twitter"><a href="/twitter" title="Twitter">Twitter</a></li>
                <li class="facebook active"><a href="#top" title="Facebook">Facebook</a></li>
                <li class="others"><a href="/autres-ressources" title="Autres ressources">Autres ressources</a></li>
                <!--<li class="contact"><a href="#nous-contacter" title="Nous contacter">Nous contacter</a></li>-->
            </ul>
            <div class="header facebook">
                <div class="fi"></div>
            </div>
            <hr />
            <div class="content">
                <h2>Facebook</h2>
                <p class="description">Abonnez-vous aux comptes Facebook des personnalités liées au programme de la France Insoumise ou aux pages administrées par des collectifs indépendants d'insoumis.</p>
                <div class="list">
                    <ul>
                        <?php
// Initialise les contenus a afficher
                        $file = '../contents/facebook.xml';
// Si le fichier existe
                        if (file_exists($file)) {
                            // Charge le fichier
                            $file = simplexml_load_file($file);
                            // Compte les contenus
                            $contents = count($file->content);
                            // Pour chaque contenu
                            for ($index = 0; $index < $contents; $index++) {
                                ?>
                                <li<?php if ($index % 3 == 0) { ?> class="break"<?php } ?>>
                                    <a href="<?php echo $file->content[$index]->url; ?>" title="<?php echo $file->content[$index]->title; ?>" target="_blank">
                                        <img src="/images/<?php echo $file->content[$index]->img; ?>" alt="<?php echo $file->content[$index]->title; ?>" width="250" height="200" />
                                        <h3><?php echo $file->content[$index]->title; ?></h3>
                                        <p><?php echo $file->content[$index]->description; ?></p>
                                    </a>
                                </li>					
                                <?php
                            }
                        }
                        ?>
                    </ul>
                    <hr />
                </div>
                <div class="end">
                    <p><a href="/" title="Revenir à l'accueil">Revenir à l'accueil</a></p>
                </div>
            </div>
            <hr />
            <?php
            // Integre le formulaire de contact, désactivé en attente d'un captcha
//            include('contact/contact-form.php');
            ?>
        </div>
    </body>
</html>