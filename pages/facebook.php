<!DOCTYPE html>
<html>
    <head>
        <!-- Inclusion des headers communs -->
        <?php require_once 'includes/common-headers.php'; ?>
        
        <title>Facebook insoumis - Portail insoumis</title>
        <script src="/javascript/facebook.js"></script>
    </head>
    <body>
        <div class="column">
            <a name="top"></a>
            <h1>Facebook insoumis</h1>
            <?php
            // Integre la gestion du formulaire
            require_once('contact/send.php');
            ?>
            <!-- ----------------------------- -->
            <!-- --  Inclusion du top menu  -- -->
            <!-- ----------------------------- -->
            <?php
            $activeTab = [];
            $activeTab['facebook'] = true;
            require_once 'includes/top-menu.php';
            ?>
            <!-- ----------------------------- -->
            <!-- ---  Contenu de la page  ---- -->
            <!-- ----------------------------- -->
            <div class="header facebook">
                <div class="fi"></div>
            </div>
            <div class="content">
                <h2>Facebook</h2>
                <p class="description">Abonnez-vous aux comptes Facebook des personnalités liées au programme de la France Insoumise ou aux pages administrées par des collectifs indépendants d'insoumis.</p>
                <div class="list js-facebook">
                    <img class="loader" src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Gray_circles_rotate.gif"/>
                </div>
                <hr />
                <div class="end">
                    <p><a href="/" title="Revenir à l'accueil">Revenir à l'accueil</a></p>
                </div>
            </div>
            <?php
            // Integre le formulaire de contact
            require_once('contact/form.php');
            ?>
        </div>
        <li class="hidden js-modele-vignette"><a target="_blank" title=""><img class="vignette" width="250" height="200" alt="" src=""><h3></h3><p></p></a></li>
    </body>
</html>