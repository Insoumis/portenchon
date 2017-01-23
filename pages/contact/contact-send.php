<?php

// Fonction de creation de liens pour les e-mails HTML
function regexp_http2($valeur, $http = '', $fin = '') {
    if (!preg_match("!^http!", strtolower($valeur[2]))) {
        $http = 'http://';
    }
    if (preg_match("!([\.,\?\!]+)$!", $valeur[2], $match)) {
        $fin = $match[1];
        $valeur[2] = preg_replace("!([\.,\?\!]+)$!", "", $valeur[2]);
    }
    // Retourne le contenu modifie
    return $valeur[1] . '<a href="' . $http . $valeur[2] . '" style="color:[cl]">' . $http . $valeur[2] . '</a>' . $fin;
}

// Si il y a un envoi de formulaire
if (isset($_POST['send_e_mail'])) {
    // Remplace les variables
    $e_mail = "christophe.geoffroy@outlook.com";
    $subject = "Contribution";
    $message = strip_tags($_POST['message']);
    $sender = ($_POST['e_mail']) ? $_POST['e_mail'] : $e_mail;
    // Genere une frontiere pour separer les contenus texte et HTML
    $line = "-----=" . md5(uniqid(mt_rand()));
    // Creation des entetes
    $header = "From: " . $sender . " <" . $sender . ">\n";
    $header .= "Return-Path: " . $sender . " <" . $sender . ">\n";
    $header .= "MIME-Version: 1.0\n";
    $header .= "Content-Type: multipart/alternative;\n boundary=\"" . $line . "\"\n";
    $content = "\n--" . $line . "\n";
    // Ajout du message au format texte.
    $content .= "Content-Type: text/plain; charset=\"utf-8\"\n";
    $content .= "Content-Transfer-Encoding: 8bit\n";
    $content .= "\n" . $message . "\n";
    $content .= "\n--" . $line . "\n";
    // Ajout du message au format HTML
    $content .= "Content-Type: text/html; charset=\"utf-8\"\n";
    $content .= "Content-Transfer-Encoding: 8bit\n\n";
    $content .= substr(preg_replace_callback("!([^href=\"])(https?://[^ \"\n\r\t<]*)!is", "regexp_http2", ' ' . str_replace("\n", '<br />', $message)), 1);
    // Finalise le format HTML
    $content .= "\n--" . $line . "--\n";
    $content .= "\n--" . $line . "--\n";
    // Envoie l'e-mail
    $success = mail(
            $e_mail, '=?UTF-8?B?' . base64_encode($e_mail . $subject) . '?=', wordwrap($content, 350, "\n"), $header
    );
    // Si l'e-mail a ete expedie
    if ($success) {
        ?>
        <div class="message">
            <p>Votre message a été envoyé. Merci pour votre contribution.</p>
        </div>
        <hr />
        <?php
        // Sinon
    } else {
        ?>
        <div class="message">
            <p>Un erreur est survenue lors de l'envoi du message. Veuillez réessayer ou mentionner le compte Twitter @.</p>
        </div>
        <hr />
        <?php
    }
}
?>