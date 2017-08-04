<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 03.08.2017
 * Time: 16:31
 */
$email = $_POST["email"];
$passwort = $_POST["passwort"];

$users = file("users.txt");
foreach($users AS $line)
{
    $user_info = explode(";", $line);
    if($user_info[0] == $email && $user_info[1] == $passwort)
    {
        echo "Hallo ".$user_info[2];
    }
    else
    {
        echo "Zugriff verweigert";
        break;
    }
}