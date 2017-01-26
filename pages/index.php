<!DOCTYPE html>
<html>
    <head>
        <!-- Inclusion des headers communs -->
        <?php require_once 'require_onces/common-headers.php'; ?>

        <title>Portail insoumis</title>
        <script src="/javascript/index.js"></script>
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
                <div class="list js-sites">                 
                    <img class="loader" src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Gray_circles_rotate.gif"/>
                </div>
                <div class="end">
                    <p><a href="/sites-internet" title="Découvrir plus de sites">Découvrir plus de sites</a></p>
                </div>
            </div>
            <div class="content youtube">
                <h2>YouTube</h2>
                <p class="description">Chaînes officielles, de décryptage politique ou stimulant la réflexion, YouTube est devenu une plate-forme alternative aux médias traditionnels pour s'exprimer sur les sujets qui préoccupent réellement les citoyens.</p>
                <div class="list js-youtube">
                    <img class="loader" src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Gray_circles_rotate.gif"/>
                </div>
                <div class="end">
                    <p><a href="/youtube" title="Découvrir plus de chaînes">Découvrir plus de chaînes</a></p>
                </div>
            </div>
            <div class="content twitter">
                <h2>Twitter</h2>
                <p class="description">Suivez les comptes Twitter des personnalités liées au programme de la France Insoumise ou d'initiatives de collectifs indépendants d'insoumis.</p>
                <div class="list js-twitter">
                    <img class="loader" src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Gray_circles_rotate.gif"/>
                </div>
                <div class="end">
                    <p><a href="/twitter" title="Découvrir plus de comptes Twitter">Découvrir plus de comptes Twitter</a></p>
                </div>
            </div>
            <div class="content facebook">
                <h2>Facebook</h2>
                <p class="description">Abonnez-vous aux comptes Facebook des personnalités liées au programme de la France Insoumise ou aux pages administrées par des collectifs indépendants d'insoumis.</p>
                <div class="list js-facebook">
                    <img class="loader" src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Gray_circles_rotate.gif"/>
                </div>
                <div class="end">
                    <p><a href="/facebook" title="Découvrir plus de pages Facebook">Découvrir plus de pages Facebook</a></p>
                </div>
            </div>
            <div class="content others">
                <h2>Autres ressources</h2>
                <p class="description">Retrouvez-ici d'autres plates-formes spécifiques, mais aussi des contenus particuliers qui vont dans le sens du programme l'Avenir en Commun de la France Insoumise.</p>
                <div class="list js-others">
                    <img class="loader" src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Gray_circles_rotate.gif"/>
                </div>
                <div class="end">
                    <p><a href="/autres-ressources" title="Découvrir plus de ressources">Découvrir plus de ressources</a></p>
                </div>
            </div>
            <?php
            // Integre le formulaire de contact, désactivé en attente d'un captcha
            require_once('contact/form.php');
            ?>
        </div>
        <li class="hidden js-modele-vignette"><a target="_blank" title=""><img class="vignette" width="250" height="200" alt="" src=""><h3></h3><p></p></a></li>
    </body>
</html> 