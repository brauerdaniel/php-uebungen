<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 03.08.2017
 * Time: 15:17
 */
//$zitate = file_get_contents('zitate.txt');
//echo nl2br($zitate);
/*
$zitate = file("zitate.txt");
for($i=0;$i < count($zitate); $i++)
{
    echo $i.". ".$zitate[$i]."<br><br>";
}
$zitat_nummer = rand(0, count($zitate)-1);
echo $zitate[$zitat_nummer];

$name = $_GET["name"];
$zeile = "Per GET wurde der Name $name übergeben \r\n";
file_put_contents("zitat.txt", $zeile);
echo "zitat.txt wurde überschrieben";
*/
/*
$counter = file_get_contents("counter.txt"); //Einlesen des Wertes
$counter++; //Wert um 1 erhöhen
file_put_contents("counter.txt", $counter); //Abspeichern des Wertes
echo "Diese Datei wurde bereits $counter mal aufgerufen";*/


$name = $_GET["name"];
$zeile = "Per GET wurde der Name $name übergeben \r\n";
file_put_contents("beispiel.txt", $zeile, FILE_APPEND);
echo "beispiel.txt aktualisiert";