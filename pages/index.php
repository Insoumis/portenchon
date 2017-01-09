<!DOCTYPE html>
<html>
    <head>
        <title>Portail insoumis</title>
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
            <h1>Portail insoumis</h1>
            <hr />
            <?php
// Integre la gestion du formulaire
            include('includes/contact-send.php');
            ?>
            <ul class="menu">
                <li class="home active"><a href="#top" title="Accueil">Accueil</a></li>
                <li class="websites"><a href="/jlm2017/sites-internet/" title="Sites Internet">Sites Internet</a></li>
                <li class="youtube"><a href="/jlm2017/youtube/" title="YouTube">YouTube</a></li>
                <li class="twitter"><a href="/jlm2017/twitter/" title="Twitter">Twitter</a></li>
                <li class="facebook"><a href="/jlm2017/facebook/" title="Facebook">Facebook</a></li>
                <li class="others"><a href="/jlm2017/autres-ressources/" title="Autres ressources">Autres ressources</a></li>
                <li class="contact"><a href="#nous-contacter" title="Nous contacter">Nous contacter</a></li>
            </ul>
            <div class="header home">
                <div class="fi"></div>
            </div>
            <hr />
            <div class="content websites">
                <h2>Sites Internet</h2>
                <p class="description">Retrouvez quelques sites, officiels ou non, sur le mouvement de la France Insoumise ou sur la politique en général. Ce sont les ressources idéales pour prendre connaissance du programme l'Avenir en Commun et de son positionnement.</p>
                <div class="list">
                    <ul>
                        <?php
// Initialise les contenus a afficher
                        $file = '../contents/websites.xml';
                        $maximum = 3;
// Si le fichier existe
                        if (file_exists($file)) {
                            // Charge le fichier
                            $file = simplexml_load_file($file);
                            // Compte les contenus
                            $contents = count($file->content);
                            // Determine le nombre d'affichages
                            $maximum = ($contents < $maximum) ? $contents : $maximum;
                            // Pour chaque contenu
                            for ($index = 0; $index < $maximum; $index++) {
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
                    <p><a href="/jlm2017/sites-internet/" title="Découvrir plus de sites">Découvrir plus de sites</a></p>
                </div>
            </div>
            <hr />
            <div class="content youtube">
                <h2>YouTube</h2>
                <p class="description">Chaînes officielles, de decryptage politique ou stimulant la réflexion, YouTube est devenu une plate-forme alternative aux médias traditionnels pour s'exprimer sur les sujets qui préocuppent réellement les citoyens.</p>
                <div class="list">
                    <ul>
                        <?php
// Initialise les contenus a afficher
                        $file = '../contents/youtube.xml';
                        $maximum = 3;
// Si le fichier existe
                        if (file_exists($file)) {
                            // Charge le fichier
                            $file = simplexml_load_file($file);
                            // Compte les contenus
                            $contents = count($file->content);
                            // Determine le nombre d'affichages
                            $maximum = ($contents < $maximum) ? $contents : $maximum;
                            // Pour chaque contenu
                            for ($index = 0; $index < $maximum; $index++) {
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
                    <p><a href="/jlm2017/youtube/" title="Découvrir plus de chaînes">Découvrir plus de chaînes</a></p>
                </div>
            </div>
            <hr />
            <div class="content twitter">
                <h2>Twitter</h2>
                <p class="description">Suivez les comptes Twitter des personnalités liées au programme de la France Insoumise ou d'initiatives de collectifs indépendants d'insoumis.</p>
                <div class="list">
                    <ul>
                        <?php
// Initialise les contenus a afficher
                        $file = '../contents/twitter.xml';
                        $maximum = 3;
// Si le fichier existe
                        if (file_exists($file)) {
                            // Charge le fichier
                            $file = simplexml_load_file($file);
                            // Compte les contenus
                            $contents = count($file->content);
                            // Determine le nombre d'affichages
                            $maximum = ($contents < $maximum) ? $contents : $maximum;
                            // Pour chaque contenu
                            for ($index = 0; $index < $maximum; $index++) {
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
                    <p><a href="/jlm2017/twitter/" title="Découvrir plus de comptes Twitter">Découvrir plus de comptes Twitter</a></p>
                </div>
            </div>
            <hr />
            <div class="content facebook">
                <h2>Facebook</h2>
                <p class="description">Abonnez-vous aux comptes Facebook des personnalités liées au programme de la France Insoumise ou aux pages administrées par des collectifs indépendants d'insoumis.</p>
                <div class="list">
                    <ul>
                        <?php
// Initialise les contenus a afficher
                        $file = '../contents/facebook.xml';
                        $maximum = 3;
// Si le fichier existe
                        if (file_exists($file)) {
                            // Charge le fichier
                            $file = simplexml_load_file($file);
                            // Compte les contenus
                            $contents = count($file->content);
                            // Determine le nombre d'affichages
                            $maximum = ($contents < $maximum) ? $contents : $maximum;
                            // Pour chaque contenu
                            for ($index = 0; $index < $maximum; $index++) {
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
                    <p><a href="/jlm2017/facebook/" title="Découvrir plus de pages Facebook">Découvrir plus de pages Facebook</a></p>
                </div>
            </div>
            <hr />
            <div class="content others">
                <h2>Autres ressources</h2>
                <p class="description">Retrouvez-ici d'autres plates-formes spécifiques, mais aussi des contenus particuliers qui vont dans le sens du programme l'Avenir en Commun de la France Insoumise.</p>
                <div class="list">
                    <ul>
                        <?php
// Initialise les contenus a afficher
                        $file = '../contents/others.xml';
                        $maximum = 3;
// Si le fichier existe
                        if (file_exists($file)) {
                            // Charge le fichier
                            $file = simplexml_load_file($file);
                            // Compte les contenus
                            $contents = count($file->content);
                            // Determine le nombre d'affichages
                            $maximum = ($contents < $maximum) ? $contents : $maximum;
                            // Pour chaque contenu
                            for ($index = 0; $index < $maximum; $index++) {
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
                    <p><a href="/jlm2017/autres-ressources/" title="Découvrir plus de ressources">Découvrir plus de ressources</a></p>
                </div>
            </div>
            <hr />
            <?php
// Integre le formulaire de contact
            include('includes/contact-form.php');
            ?>
        </div>
    </body>
</html> 