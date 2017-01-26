<?php
// Initialise les valeurs de securite
$contact_securite_1=rand(1,10);
$contact_securite_2=rand(1,10);
?>
<a name="nous-contacter"></a>
<div class="content contact">
	<h2>Nous contacter</h2>
	<p class="description">Vous êtes à l'initiative d'un projet ou avez découvert un contenu susceptible de figurer sur ce site ? Contactez-nous pour l'y faire figurer et enrichir les sources disponibles.</p>
	<form action="<?php echo $contact_form; ?>" method="post">
		<label for="e_mail"><p>Votre adresse e-mail</p></label>
		<input name="e_mail" type="text" size="40" value="<?php if(isset($contact_e_mail)){ echo $contact_e_mail; } ?>" />				
		<label for="message"><p>Votre message</p></label>
		<textarea name="message" rows="16" cols="40"><?php if(isset($contact_message)){ echo $contact_message; } ?></textarea>
		<p>Additionnez les chiffres <strong><?php echo $contact_securite_1; ?></strong> et <strong><?php echo $contact_securite_2; ?> :</strong></p>
		<input name="securite" type="text" size="2" maxlength="2" value="<?php if(isset($contact_securite)){ echo $contact_securite; } ?>" /><input type="hidden" name="securite_1" value="<?php echo $contact_securite_1; ?>" /><input type="hidden" name="securite_2" value="<?php echo $contact_securite_2; ?>" />
		<input class="button" name="send_e_mail" type="submit" value="Envoyer" />	
	</form>
</div>
<hr />