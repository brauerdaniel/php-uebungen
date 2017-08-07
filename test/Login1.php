<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 07.08.2017
 * Time: 08:10
 */
session_start(); //Nicht vergessen
$name = $_POST['name'];

if(!isset($name) || empty($name))
{
    $name = "Gast";
}

//Session registrieren
$_SESSION['username'] = $name;

//Text ausgeben
echo "Hallo $name <br />
<a href=\"seite5.php\">Seite 2</a><br />
<a href=\"logout\">Logout</a>";

