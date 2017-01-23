<!DOCTYPE html>
<html>
    <head>
        <title>Twitter insoumis - Portail insoumis</title>
        <link rel="stylesheet" type="text/css" media="screen" title="Default" href="/jlm2017/styles/v01b00.css" />
        <link rel="apple-touch-icon" sizes="180x180" href="/jlm2017/elements/favicon-apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/jlm2017/elements/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/jlm2017/elements/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/includes/manifest.json">
        <link rel="mask-icon" href="/jlm2017/elements/favicon-safari-pinned-tab.svg" color="#0198b5">
        <meta name="apple-mobile-web-app-title" content="Portail insoumis">
        <meta name="application-name" content="Portail insoumis">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <div class="column">
            <a name="top"></a>
            <h1>Twitter insoumis</h1>
            <hr />
            <?php
            // Integre la gestion du formulaire, désactivé en attente d'un captcha
//            include('includes/contact-send.php');
            ?>
            <ul class="menu">
                <li class="home"><a href="/jlm2017/" title="Accueil">Accueil</a></li>
                <li class="websites"><a href="/jlm2017/sites-internet/" title="Sites Internet">Sites Internet</a></li>
                <li class="youtube"><a href="/jlm2017/youtube/" title="YouTube">YouTube</a></li>
                <li class="twitter active"><a href="#top" title="Twitter">Twitter</a></li>
                <li class="facebook"><a href="/jlm2017/facebook/" title="Facebook">Facebook</a></li>
                <li class="others"><a href="/jlm2017/autres-ressources/" title="Autres ressources">Autres ressources</a></li>
                <li class="contact"><a href="#nous-contacter" title="Nous contacter">Nous contacter</a></li>
            </ul>
            <div class="header twitter">
                <div class="fi"></div>
            </div>
            <hr />
            <div class="content">
                <h2>Twitter</h2>
                <p class="description">Suivez les comptes Twitter des personnalités liées au programme de la France Insoumise ou d'initiatives de collectifs indépendants d'insoumis.</p>
                <div class="list">
                    <ul>
                        <?php
// Initialise les contenus a afficher
                        $file = '../contents/twitter.xml';
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
                                        <img src="/jlm2017/illustrations/<?php echo $file->content[$index]->img; ?>" alt="<?php echo $file->content[$index]->title; ?>" width="250" height="200" />
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
                    <p><a href="/jlm2017/" title="Revenir à l'accueil">Revenir à l'accueil</a></p>
                </div>
            </div>
            <hr />
            <?php
            // Integre le formulaire de contact, désactivé en attente d'un captcha
//            include('includes/contact-form.php');
            ?>
        </div>
    </body>
</html> 