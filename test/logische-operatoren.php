<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 02.08.2017
 * Time: 13:52
 */
$username = "Nils";
$passwort = "php-einfach";
if($username == "Nils" && $passwort == "php-einfach")
{
    echo "Beide Bedingungen waren erfüllt - Zugriff erlaubt. <br />";
}
if($username == "Nils" || $passwort == "php-einfach");
{
    echo "Eine oder beide Bedingung waren erfüllt.";
}
echo "<br />";
$gehalt = 25000;
$vermoegen = 10000;
$erbschaft = 0;

if($gehalt > 10000 || $vermoegen > 50000 || $erbschaft > 1000000)
{
    echo "Wow, du bist reich!";
}
else if($gehalt < 1000 && $vermoegen < 10000 && $erbschaft == 0)
{
    echo "Kleines Gehalt, wenig Vermögen, keine Erbschaft, schade!";
}
else
{
    echo "keine der Bedingungen war erfüllt";
}

echo "<br />";

$username = "Nils";
$passwort = "php-einfach";

if( ($username == "Nils" && $passwort == "php-einfach") || ($username == "Paul" && $passwort == "geheim") )
{
    echo "Benutzername und Passwort passen zusammen. <br />";
}

if( $username == "Nils" && ($passwort == "php-einfach" || $passwort == "geheim") )
{
    echo "Der Benutzername war Nils und das Passwort entweder php-einfach oder geheim";
}

echo "<br />";

/*$zahl = 25;

if(zahl >= 10 && $zahl <=20)
{
    echo "Die Zahl ist zwischen 10 und 20. <br />";
}

if( !($zahl >= 10 && $zahl <= 20) )
{
    echo "Die Zhal war nicht zwischen 10 und 20 <br />";
}

echo "<br />"; */

$zahl = 25;

if($zahl >= 10 && $zahl <=20)
{
    echo "Die Zahl ist zwischen 10 und 20. <br />";
}

if( $zahl < 10 && $zahl >20)
{
    echo "Die Zhal war nicht zwischen 10 und 20 <br />";
}
?>