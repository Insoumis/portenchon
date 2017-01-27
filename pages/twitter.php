<!DOCTYPE html>
<html>
    <head>
        <!-- Inclusion des headers communs -->
        <?php require_once 'includes/common-headers.php'; ?>
        
        <title>Twitter insoumis - Portail insoumis</title>
        <script src="/javascript/twitter.js"></script>
    </head>
    <body>
        <div class="column">
            <a name="top"></a>
            <h1>Twitter insoumis</h1>
            <?php
            // Integre la gestion du formulaire, désactivé en attente d'un captcha
            require_once('contact/send.php');
            ?>
            <!-- ----------------------------- -->
            <!-- --  Inclusion du top menu  -- -->
            <!-- ----------------------------- -->
            <?php
            $activeTab = [];
            $activeTab['twitter'] = true;
            require_once 'includes/top-menu.php';
            ?>
            <!-- ----------------------------- -->
            <!-- ---  Contenu de la page  ---- -->
            <!-- ----------------------------- -->
            <div class="header twitter">
                <div class="fi"></div>
            </div>
            <div class="content">
                <h2>Twitter</h2>
                <p class="description">Suivez les comptes Twitter des personnalités liées au programme de la France Insoumise ou d'initiatives de collectifs indépendants d'insoumis.</p>
                <div class="list js-twitter">
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