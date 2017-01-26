<!DOCTYPE html>
<html>
    <head>
        <!-- Inclusion des headers communs -->
        <?php require_once 'includes/common-headers.php'; ?>
        
        <title>Sites insoumis - Portail insoumis</title>
        <script src="/javascript/sites.js"></script>
    </head>
    <body>
        <div class="column">
            <a name="top"></a>
            <h1>Sites insoumis</h1>
            <hr />
            <?php
            // Integre la gestion du formulaire, désactivé en attente d'un captcha
            require_once('contact/send.php');
            ?>
            <!-- ----------------------------- -->
            <!-- --  Inclusion du top menu  -- -->
            <!-- ----------------------------- -->
            <?php
            $activeTab = [];
            $activeTab['websites'] = true;
            require_once 'includes/top-menu.php';
            ?>
            <!-- ----------------------------- -->
            <!-- ---  Contenu de la page  ---- -->
            <!-- ----------------------------- -->
            <div class="header websites">
                <div class="fi"></div>
            </div>
            <hr />
            <div class="content">
                <h2>Sites Internet</h2>
                <p class="description">Retrouvez quelques sites, officiels ou non, sur le mouvement de la France Insoumise ou sur la politique en général. Ce sont les ressources idéales pour prendre connaissance du programme l'Avenir en Commun et de son positionnement.</p>
                <div class="list js-sites">
                    <img class="loader" src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Gray_circles_rotate.gif"/>
                </div>
                <hr />
                <div class="end">
                    <p><a href="/" title="Revenir à l'accueil">Revenir à l'accueil</a></p>
                </div>
            </div>
            <hr />
            <?php
            // Integre le formulaire de contact, désactivé en attente d'un captcha
            require_once('contact/form.php');
            ?>
        </div>
        <li class="hidden js-modele-vignette"><a target="_blank" title=""><img class="vignette" width="250" height="200" alt="" src=""><h3></h3><p></p></a></li>
    </body>
</html> 