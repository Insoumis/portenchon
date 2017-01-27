<!DOCTYPE html>
<html>
    <head>
        <!-- Inclusion des headers communs -->
        <?php require_once 'includes/common-headers.php'; ?>
        
        <title>Ressources insoumises - Portail insoumis</title>
        <script src="/javascript/others.js"></script>
    </head>
    <body>
        <div class="column">
            <a name="top"></a>
            <h1>Ressources insoumises</h1>
            <?php
            // Integre la gestion du formulaire, désactivé en attente d'un captcha
            require_once('contact/send.php');
            ?>
            <!-- ----------------------------- -->
            <!-- --  Inclusion du top menu  -- -->
            <!-- ----------------------------- -->
            <?php
            $activeTab = [];
            $activeTab['others'] = true;
            require_once 'includes/top-menu.php';
            ?>
            <!-- ----------------------------- -->
            <!-- ---  Contenu de la page  ---- -->
            <!-- ----------------------------- -->
            <div class="header others">
                <div class="fi"></div>
            </div>
            <div class="content">
                <h2>Autres ressources</h2>
                <p class="description">Retrouvez-ici d'autres plates-formes spécifiques, mais aussi des contenus particuliers qui vont dans le sens du programme l'Avenir en Commun de la France Insoumise.</p>
                <div class="list js-others">
                    <img class="loader" src="/elements/loading.gif"/>
                </div>
                <hr />
                <div class="end">
                    <p><a href="/" title="Revenir à l'accueil">Revenir à l'accueil</a></p>
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