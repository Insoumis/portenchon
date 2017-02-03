<!DOCTYPE html>
<!-- Inclusion des variables d'initialisation -->
<?php require_once 'includes/init.php'; ?>
<html>
	<head>
		<title>Nous contacter - Portail insoumis</title>
        <!-- Inclusion des headers communs -->
        <?php require_once 'includes/common-headers.php'; ?>
	</head>
	<body>
        <div class="column">
            <a name="top"></a>
            <h1>Ressources insoumises</h1>
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
            $activeTab['contact'] = true;
            require_once 'includes/top-menu.php';
            ?>
            <!-- ----------------------------- -->
            <!-- ---  Contenu de la page  ---- -->
            <!-- ----------------------------- -->
<?php		
// Integre le formulaire de contact, désactivé en attente d'un captcha
include('contact/form.php');
?>
		</div>
	</body>
</html> 