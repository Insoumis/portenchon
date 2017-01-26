<?php
// Fonction de creation de liens pour les e-mails HTML
function regexp_http2($valeur,$http='',$fin=''){
	if(!preg_match("!^http!", strtolower($valeur[2]))){
		$http='http://';
	}
	if(preg_match("!([\.,\?\!]+)$!",$valeur[2],$match)){
		$fin=$match[1];
		$valeur[2]=preg_replace("!([\.,\?\!]+)$!","",$valeur[2]);
	}
	// Retourne le contenu modifie
	return $valeur[1].'<a href="'.$http.$valeur[2].'" style="color:[cl]">'.$http.$valeur[2].'</a>'.$fin;
}
// Initialise les variables
$contact_securite_1=0;
$contact_securite_2=0;
$contact_securite='';
$contact_e_mail='';
$contact_message='';
$contact_form='/nous-contacter';
// Si il y a un envoi de formulaire
if(isset($_POST['send_e_mail'])){
	// Recupere les valeurs envoyees
	$contact_e_mail=trim(strip_tags($_POST['e_mail']));
	$contact_message=trim(strip_tags($_POST['message']));
	$contact_securite=$_POST['securite'];
	// Si il  n'y a pas de texte
	if(!$contact_message){
		// Envoie un message d'alerte
		$_SESSION['alerte']['message']="Vous devez indiquer un message.";
		$_SESSION['alerte']['level']=1;
	// Sinon, le code indique est correct
	}elseif($_POST['securite']!=($_POST['securite_1']+$_POST['securite_2'])){
		// Envoie un message d'alerte
		$_SESSION['alerte']['message']="Le résultat de l'addition est incorrect.";
		$_SESSION['alerte']['level']=1;
	// Sinon
	}else{
		// Remplace les variables
		$e_mail="franceinsoumise@roomantic.fr";
		$sender=($contact_e_mail) ? $contact_e_mail : $e_mail;
		$subject=($sender) ? 'Contribution Portail' : 'Contribution Portail : '.$sender;
		// Genere une frontiere pour separer les contenus texte et HTML
		$line="-----=".md5(uniqid(mt_rand()));
		// Creation des entetes
		$header="From: ".$sender." <".$sender.">\n";
		$header.="Return-Path: ".$sender." <".$sender.">\n";
		$header.="MIME-Version: 1.0\n";
		$header.="Content-Type: multipart/alternative;\n boundary=\"".$line."\"\n";
		$content="\n--".$line."\n";
		// Ajout du message au format texte.
		$content.="Content-Type: text/plain; charset=\"utf-8\"\n";
		$content.="Content-Transfer-Encoding: 8bit\n";
		$content.="\n".$contact_message."\n";
		$content.="\n--".$line."\n";
		// Ajout du message au format HTML
		$content.="Content-Type: text/html; charset=\"utf-8\"\n";
		$content.="Content-Transfer-Encoding: 8bit\n\n";
		$content.=substr(preg_replace_callback("!([^href=\"])(https?://[^ \"\n\r\t<]*)!is","regexp_http2",' '.str_replace("\n",'<br />',$contact_message)),1);
		// Finalise le format HTML
		$content.="\n--".$line."--\n";
		$content.="\n--".$line."--\n";
		// Envoie l'e-mail
		$success=mail(
			$e_mail,'=?UTF-8?B?'.base64_encode($e_mail.$subject).'?=',
			wordwrap($content,350,"\n"),
			$header
		);
		// Si l'e-mail a ete expedie
		if($success){
			// Envoie un message d'alerte
			$_SESSION['alerte']['message']="Votre message a été envoyé. Merci pour votre contribution.";
			$_SESSION['alerte']['level']=0;
			// Recharge la page courante
			header('Location: '.$contact_form);
			// Termine l'execution
			exit();
		// Sinon
		}else{
			// Envoie un message d'alerte
			$_SESSION['alerte']['message']="Un erreur est survenue lors de l'envoi du message. Veuillez réessayer ou mentionnez le compte Twitter @Action_Insoumis.";
			$_SESSION['alerte']['level']=1;
		}
	}
}	
// Si un message est a afficher
if(isset($_SESSION['alerte']['message'])){
?>
<div class="message level_<?php echo $_SESSION['alerte']['level']; ?>"><p><?php echo $_SESSION['alerte']['message']; ?></p></div>
<hr />
<?php
	// Supprime la variable de session
	unset($_SESSION['alerte']);
}
?>