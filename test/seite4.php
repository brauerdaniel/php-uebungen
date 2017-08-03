<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 02.08.2017
 * Time: 11:15
 */
$username = $_POST["username"];
$passwort = $_POST["passwort"];

if($username=="Nils" && $passwort=="php-einfach")
{
    echo "Zugriff erlaubt";
}
else
{
    echo "Zugriff fehlgeschlagen";
}