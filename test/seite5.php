<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 07.08.2017
 * Time: 08:10
 */
session_start();

if(!isset($_SESSION['username']))
{
    die("Bitte erst einloggen"); //Mit die beenden wir den weiteren Scriptablauf
}

//in $name den Wert der Session speichern
$name = $_SESSION['username'];

//Text ausgeben
echo " Du heißt immer noch: $name
<a href=\"logout.php\">Logout<a/>";
