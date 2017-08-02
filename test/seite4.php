<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 02.08.2017
 * Time: 11:15
 */
$passwort = $_POST["passwort"];

if($passwort=="geheim")
    {
        echo "Herzlich Willkommen im internen Bereich";
    }
else
    {
        echo "Das Passwort ist leider falsch";
    }
?>