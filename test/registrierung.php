<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 03.08.2017
 * Time: 16:31
 */
$name = $_POST['name'];
$email = $_POST['email'];
$passwort = $_POST['passwort'];
$user_info = array($email, $passwort, $name);

if(!empty($name) && !empty($email) && !empty($passwort))
{
    $eintrag = implode(";",$user_info). "\r\n";
    file_put_contents("users.txt", $eintrag, FILE_APPEND);
    echo "$email wurde erfolgreich registriert";
}
else
{
    echo "Bitte alle Felder ausfüllen";
}