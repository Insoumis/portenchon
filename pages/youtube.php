<!DOCTYPE html>
<html>
    <head>
        <title>YouTube insoumis - Portail insoumis</title>
        <!-- Inclusion des headers communs -->
        <?php require_once 'includes/common-headers.php'; ?>
    </head>
    <body>
        <div class="column">
            <a name="top"></a>
            <h1>YouTube insoumis</h1>
            <hr />
            <?php
            // Integre la gestion du formulaire, désactivé en attente d'un captcha
            include('contact/send.php');
            ?>
            <!-- ----------------------------- -->
            <!-- --  Inclusion du top menu  -- -->
            <!-- ----------------------------- -->
            <?php
            $activeTab = [];
            $activeTab['youtube'] = true;
            require_once 'includes/top-menu.php';
            ?>
            <!-- ----------------------------- -->
            <!-- ---  Contenu de la page  ---- -->
            <!-- ----------------------------- -->
            <div class="header youtube">
                <div class="fi"></div>
            </div>
            <hr />
            <div class="content">
                <h2>YouTube</h2>
                <p class="description">Chaînes officielles, de decryptage politique ou stimulant la réflexion, YouTube est devenu une plate-forme alternative aux médias traditionnels pour s'exprimer sur les sujets qui préocuppent réellement les citoyens.</p>
                <div class="list">
                    <ul>
                        <?php
                        // Initialise les contenus a afficher
                        $file = '../contents/youtube.xml';
                        // Si le fichier existe
                        if (file_exists($file)) {
                            // Charge le fichier
                            $file = simplexml_load_file($file);
                            // Compte les contenus
                            $contents = count($file->content);
                            // Pour chaque contenu
                            for ($index = 0; $index < $contents; $index++) {
                                ?>
                                <li<?php if ($index % 3 == 0) : ?> class="break"<?php endif ?>>
                                    <a href="<?= $file->content[$index]->url ?>" title="<?= $file->content[$index]->title ?>" target="_blank">
                                        <img src="/images/<?= $file->content[$index]->img ?>" alt="<?= $file->content[$index]->title ?>" width="250" height="200" />
                                        <h3><?= $file->content[$index]->title ?></h3>
                                        <p><?= $file->content[$index]->description ?></p>
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
            include('contact/form.php');
            ?>
        </div>
    </body>
</html> 