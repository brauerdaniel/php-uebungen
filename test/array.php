<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 03.08.2017
 * Time: 10:17
 */
/*$wochentage = array("Sonntag", "Montag","Dienstag","Mittwoch","Donnerstag","Freitag", "Samstag");
echo $wochentage[0];*/
/*
$wochentage = array
(
    "1" => "Sonntag", "Montag", "Dienstag..."
);
var_dump($wochentage);

echo $wochentage["mo"];

$mitarbeiter = array("Bob", "Peter");
var_dump($mitarbeiter);
$mitarbeiter[] = "Lisa";
var_dump($mitarbeiter);
$mitarbeiter = array();
$mitarbeiter[] = "Bob";
$mitarbeiter[] = "Peter";
$mitarbeiter[] = "Lisa";

echo $mitarbeiter[0];
$mitarbeiter = array
(
    "Bob" => "Bob Meier",
    "Peter" => "Peter Schröder"
);
$mitarbeiter["Lisa"] = "Lisa Müller";

echo $mitarbeiter ["Lisa <br /><br />"];

$name = array("Paul", "Max", "Hans");

echo "Name per Komma trennen: <br />";
$nameStr = implode(",",$name);
echo $nameStr;

echo "<br><br>";
echo "Ein Name pro Zeile: <br>";
echo implode("<br>", $name);

echo "<br><br>";

$text = "Paul,Max,Hannes";
$namen = explode(",", $text ); //Konvertierung des Strings in ein Array
echo "<pre>"; var_dump($namen); echo "</pre>"; //Formatierte Ausgabe des Arrays

//Ersetze die 1. Persron durch einen neuen Namen
$namen[1]= "Lisa";
//Verwandel des Array zurück in einen String
$text = implode(", ", $namen);
echo $text;
*/
/*
$mitarbeiter = array();
$mitarbeiter[] = array
(
    "Vorname" => "Klaus",
    "Nachname" => "Zabel"
);
$mitarbeiter[] = array
(
    "Vorname" => "Arnie",
    "Nachname" => "Meier"
);
$mitarbeiter[] = array
(
    "Vorname" => "Willi",
    "Nachname" => "Brand"
);
//Daten ausgeben
echo "Vorname: ".$mitarbeiter[0]["Vorname"] ;
echo " <br>Nachname: ".$mitarbeiter[0]["Nachname"];


$mitarbeiter = array();
$mitarbeiter["Klaus"]["Vorname"] = "Klaus";
$mitarbeiter["Klaus"]["Nachname"] = "Zebel";
$mitarbeiter["Klaus"]["Kinder"][] = "Klaus-Junior";
$mitarbeiter["Klaus"]["Kinder"][] = "Kind2";

//Daten ausgeben
echo "Vorname: ".$mitarbeiter["Klaus"]["Vorname"];
echo " Nachname: ".$mitarbeiter["Klaus"]["Nachname"];
echo "<br> Er hat ";
echo count($mitarbeiter["Klaus"]["Kinder"]). " Kinder";

//Ausgabe von Kind1
//$mitarbeiter["Klaus"]["Kinder"][0];

echo " <br> Kinder: <br>";
foreach($mitarbeiter["Klaus"]["Kinder"] AS $name) {
    echo $name . "<br>";
}
echo "<br>";

$mitarbeiter1 = array("Bob","Peter","Lisa");
$name = "Bob";
if(in_array($name,$mitarbeiter1))
{
    echo "Der Name $name ist in dem Array enthalten";
}


$namen = array("Klaus", "Anna", "Dieter");

echo "<br> Durchlaufen des Arrays mittels for-Schleifen: ";
for($i=0; $i<count($namen); $i++)
{
    echo $namen[$i].", ";
}

echo "<br> Durchlaufen des Arrays mittels foreach-Schleife: ";
foreach($namen AS $name)
{
    echo $name.", ";
}
*/
$name = array("Klaus", "Dieter", "Anna", "Melissa", "arne");

sort($name);
echo implode(", ", $name);


$mitarbeiter = array("Bob","Peter", "Josef");

echo "Letzter Eintrag des Arrays: ".$mitarbeiter[count($mitarbeiter)-1];
echo "<br><br> Ausgabe des Arrays mit einer for Schleife<br>";
for($i=0; $i < count($mitarbeiter); $i++)
{
    echo $mitarbeiter[$i]."<br>";
}
echo "<br><br>";
echo "Ausgabe eines Arrays mittels while-Schleife: <br>";

$i = 0;
while($i < count($mitarbeiter))
{
    echo $mitarbeiter[$i]."<br>";
    $i++;
}
echo "<br><br>";
echo "Array wird vom letzten zum ersten Element ausgegeben: <br>";
for($i=count($mitarbeiter)-1; $i >= 0; $i--) {
    echo $mitarbeiter[$i]."<br>";
}

