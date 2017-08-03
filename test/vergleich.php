<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 02.08.2017
 * Time: 11:45
 */
$int1 = 15;
$int2 = 20;

if($int1 < $int2)
    {
        echo "Int1 ist kleiner als int2 <br />";
    }
if($int <= 100)
    {
        echo "Int1 ist kleiner oder gleich 100 <br />";
    }
$tier = "Katze";
$string_vergleich = ($tier== "Katze" );
echo 'Der Wert der Variable $string_vergleich ist: ';
var_dump ($string_vergleich); // Asgabe welchen Wert die Variable hat

if($string_vergleich)
    {
        echo " --- Der String Vergleich hatte den Wert \"true\" --- <br />";
    }
$integer = 1;
$string = "1";

echo "Ergebnis von == :";
var_dump($integer == $string);
echo "<br /> Ergebnis von === :";
var_dump($integer === $string);
echo "<br /> Ergebnis von != :";
var_dump($integer != $string);
echo "<br /> Ergebnis von !== :";
var_dump($integer !== $string);

$text = "Dies ist ein Text";
$suchwort = "Dies";
$position = strpos($text, $suchwort);
if($position == false)
    {
        echo "Dein Suchwort wurde nicht gefunden";
    }
else
    {
        echo "Dein SUchwort wurde an Position $position gefunden";
    }
echo "<br />";
    if($position === false)
    {
        echo "Dein SUchwort wurde nicht gefunden";
    }
else
    {
        echo "Dein Suchwort wurde an Position $position gefunden";
    }
?>
