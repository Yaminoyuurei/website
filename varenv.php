<?php
$date = date("d/m/Y");
$heure = date("H:i:s");
echo "Bienvenue sur ma page!<br>";
echo 'Voici le port utilisé cliente pour communiquer avec le serveur web : "';
echo $_SERVER['REMOTE_PORT'].'"<br>';
echo $_SERVER['REMOTE_ADDR']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['HTTP_ACCEPT_LANGUAGE']."<br>";
echo "Nous sommes le ".$date."<br>";
echo "Il est ".$heure." Heures <br>";
echo 'La racine des documents se trouvent dans le répertoire "'.$_SERVER['DOCUMENT_ROOT'].'"<br>';
echo $_SERVER['HTTP_USER_AGENT'];
?>