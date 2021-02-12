<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
	<?php
    $retour = mail('lucie.cayment@gmail.com', 'Envoi depuis le site du TransD', $_POST['Message'], 'From : webmaster@monsite.fr');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    else
    {
        echo '<p>Votre message n\'a pas été envoyé.</p>';
    }
?>
</body>
</html>