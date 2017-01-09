<a name="nous-contacter"></a>
<div class="content contact">
	<h2>Nous contacter</h2>
	<p class="description">Vous êtes à l'initiative d'un projet ou avez découvert un contenu susceptible de figurer sur ce site ? Contactez-nous pour l'y faire figurer et enrichir les sources disponibles.</p>
	<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
		<label for="e_mail"><p>Mon adresse e-mail</p></label>
		<input id="e_mail" name="e_mail" type="text" size="40" value="" />				
		<label for="message"><p>Mon message</p></label>
		<textarea id="message" name="message" rows="16" cols="40"></textarea>
		<input class="button" name="send_e_mail" type="submit" value="Envoyer" />	
	</form>
</div>
<hr />