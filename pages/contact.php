<!DOCTYPE html>
<html>
	<head>
		<title>Nous contacter - Portail insoumis</title>
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
			<h1>Nous contacter</h1>
			<hr />
<?php
// Integre la gestion du formulaire
include('includes/send.php');			
?>
			<ul class="menu">
				<li class="home"><a href="/jlm2017/" title="Accueil">Accueil</a></li>
				<li class="websites"><a href="/jlm2017/sites-internet/" title="Sites Internet">Sites Internet</a></li>
				<li class="youtube"><a href="/jlm2017/youtube/" title="YouTube">YouTube</a></li>
				<li class="twitter"><a href="/jlm2017/twitter/" title="Twitter">Twitter</a></li>
				<li class="facebook"><a href="/jlm2017/facebook/" title="Facebook">Facebook</a></li>
				<li class="others"><a href="/jlm2017/autres-ressources/" title="Autres ressources">Autres ressources</a></li>
				<li class="contact active"><a href="#nous-contacter" title="Nous contacter">Nous contacter</a></li>
			</ul>
			<hr />
<?php
// Integre le formulaire de contact
include('includes/form.php');			
?>
		</div>
	</body>
</html> 