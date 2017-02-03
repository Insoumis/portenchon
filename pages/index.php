<!DOCTYPE html>
<!-- Inclusion des variables d'initialisation -->
<?php require_once 'includes/init.php'; ?>
<html>
    <head>
        <!-- Inclusion des headers communs -->
        <?php require_once 'includes/common-headers.php'; ?>
        <title>Portail insoumis</title>
    </head>
    <body>
        <div class="column">
            <a name="top"></a>
            <h1>Portail insoumis</h1>
            <?php
            // Integre la gestion du formulaire, désactivé en attente d'un captcha
            require_once('contact/send.php');
            ?>
            <!-- ----------------------------- -->
            <!-- --  Inclusion du top menu  -- -->
            <!-- ----------------------------- -->
            <?php
            $activeTab = [];
            $activeTab['home'] = true;
            require_once 'includes/top-menu.php';
            ?>
            <!-- ----------------------------- -->
            <!-- ---  Contenu de la page  ---- -->
            <!-- ----------------------------- -->
            <div class="header home">
                <div class="fi"></div>
            </div>
            <div class="content websites">
                <h2>Sites Internet</h2>
                <p class="description">Retrouvez quelques sites, officiels ou non, sur le mouvement de la France Insoumise ou sur la politique en général. Ce sont des ressources idéales pour prendre connaissance du programme l'Avenir en Commun et de son positionnement.</p>
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
                                <li<?php if ($index % 3 == 0): ?> class="break"<?php endif ?>>
                                    <a href="<?= $file->content[$index]->url; ?>" title="<?= $file->content[$index]->title; ?>" target="_blank">
                                        <img src="<?php echo $root; ?>illustrations/<?= $file->content[$index]->img; ?>" alt="<?= $file->content[$index]->title; ?>" width="250" height="200" />
                                        <h3><?= $file->content[$index]->title; ?></h3>
                                        <p><?= $file->content[$index]->description; ?></p>
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
                    <p><a href="<?php echo $root; ?>sites-internet" title="Découvrir plus de sites">Découvrir plus de sites</a></p>
                </div>
            </div>
            <hr />
            <div class="content youtube">
                <h2>YouTube</h2>
                <p class="description">Chaînes officielles, de décryptage politique ou stimulant la réflexion, YouTube est devenu une plate-forme alternative aux médias traditionnels pour s'exprimer sur les sujets qui préoccupent réellement les citoyens.</p>
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
                                <li<?php if ($index % 3 == 0): ?> class="break"<?php endif ?>>
                                    <a href="<?= $file->content[$index]->url; ?>" title="<?= $file->content[$index]->title; ?>" target="_blank">
                                        <img src="<?php echo $root; ?>illustrations/<?= $file->content[$index]->img; ?>" alt="<?= $file->content[$index]->title; ?>" width="250" height="200" />
                                        <h3><?= $file->content[$index]->title; ?></h3>
                                        <p><?= $file->content[$index]->description; ?></p>
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
                    <p><a href="<?php echo $root; ?>youtube" title="Découvrir plus de chaînes">Découvrir plus de chaînes</a></p>
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
                                <li<?php if ($index % 3 == 0): ?> class="break"<?php endif ?>>
                                    <a href="<?= $file->content[$index]->url; ?>" title="<?= $file->content[$index]->title; ?>" target="_blank">
                                        <img src="<?php echo $root; ?>illustrations/<?= $file->content[$index]->img; ?>" alt="<?= $file->content[$index]->title; ?>" width="250" height="200" />
                                        <h3><?= $file->content[$index]->title; ?></h3>
                                        <p><?= $file->content[$index]->description; ?></p>
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
                    <p><a href="<?php echo $root; ?>twitter" title="Découvrir plus de comptes Twitter">Découvrir plus de comptes Twitter</a></p>
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
                                <li<?php if ($index % 3 == 0): ?> class="break"<?php endif ?>>
                                    <a href="<?= $file->content[$index]->url; ?>" title="<?= $file->content[$index]->title; ?>" target="_blank">
                                        <img src="<?php echo $root; ?>illustrations/<?= $file->content[$index]->img; ?>" alt="<?= $file->content[$index]->title; ?>" width="250" height="200" />
                                        <h3><?= $file->content[$index]->title; ?></h3>
                                        <p><?= $file->content[$index]->description; ?></p>
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
                    <p><a href="<?php echo $root; ?>facebook" title="Découvrir plus de pages Facebook">Découvrir plus de pages Facebook</a></p>
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
                                <li<?php if ($index % 3 == 0): ?> class="break"<?php endif ?>>
                                    <a href="<?= $file->content[$index]->url; ?>" title="<?= $file->content[$index]->title; ?>" target="_blank">
                                        <img src="<?php echo $root; ?>illustrations/<?= $file->content[$index]->img; ?>" alt="<?= $file->content[$index]->title; ?>" width="250" height="200" />
                                        <h3><?= $file->content[$index]->title; ?></h3>
                                        <p><?= $file->content[$index]->description; ?></p>
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
                    <p><a href="<?php echo $root; ?>autres-ressources" title="Découvrir plus de ressources">Découvrir plus de ressources</a></p>
                </div>
            </div>
            <hr />
            <?php
            // Integre le formulaire de contact, désactivé en attente d'un captcha
            include('contact/form.php');
            ?>
        </div>
    </body>
</html> 