<!DOCTYPE html>
<html>
    <head>
        <!-- Inclusion des headers communs -->
        <?php require_once 'includes/common-headers.php'; ?>
        
        <title>YouTube insoumis - Portail insoumis</title>
        <script src="/javascript/youtube.js"></script>
    </head>
    <body>
        <div class="column">
            <a name="top"></a>
            <h1>YouTube insoumis</h1>
            <hr />
            <?php
            // Integre la gestion du formulaire
            require_once('contact/send.php');
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
            <div class="content">
                <h2>YouTube</h2>
                <p class="description">Chaînes officielles, de décryptage politique ou stimulant la réflexion, YouTube est devenu une plate-forme alternative aux médias traditionnels pour s'exprimer sur les sujets qui préocuppent réellement les citoyens.</p>
                <div class="list js-youtube">
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
        <li class="hidden js-modele-vignette"><a target="_blank" title=""><img width="250" height="200" alt="" src=""><h3></h3><p></p></a></li>
    </body>
</html> 