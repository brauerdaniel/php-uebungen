<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 02.08.2017
 * Time: 15:45
 * Aufgabe 1
 */
/*$username = $_POST["username"];
$passwort = $_POST["passwort"];

$pass = sha1($passwort);

if($username == Daniel && $pass=="3d0f3b9ddcacec30c4008c5e030e6c13a478cb4f")
{
    echo "Herzlich Willkommen";
}
else
{
    echo "Login Fehlgeschlagen";
}
Aufgabe 2
$email = $_POST["email"];
$kommentar = $_POST["kommentar"];

if($email == "" || $kommentar == "")
{
    echo"Bitte füllen Sie alle Felder aus";
}
else
{
    echo "Ihr Eintrag wurde gespeichert";
}
*/
$seite = $_GET["seite"];
if(empty($seite))
{
    $seite="index";
}
if($seite == "index")
{
    echo "Herzlich WIllkommen auf der Indexseite";
    echo "<a href=\"http://uebungen.localhost/test/uebungsaufgaben-2.php?seite=start\"> <br /> startseite</a>";
}
if($seite == "start")
{
    echo "Startseite";
    echo "<a href=\"http://uebungen.localhost/test/uebungsaufgaben-2.php?seite=index\"> <br /> indexseite</a>";
}


