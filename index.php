<?php
if(isset($_POST['send'], $_POST['targetAdress'], $_POST['message'])){
    echo mail($_POST['targetAdress'], 'newsletter', $_POST['message'], 'heliosens59@gmail.com') ?
        "succès" : "Echec";
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire d'envoi</title>
</head>
<body>

    <form action="index.php" method="post">

        <input type="email" name="targetAdress" placeholder="votre mail">
        <div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="votre texte"></textarea>
        </div>
        <input type="submit" name="send">
    </form>

</body>
</html>

