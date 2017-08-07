<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 07.08.2017
 * Time: 08:51
 */
function zusammenrechnen ($a, $b)
{
    $addition = $a+$b;
    $multiplikation = $a*$b;
    if($addition > $multiplikation)
    {
        return $addition;
    }
    else
    {
        return $multiplikation;
    }
}
echo zusammenrechnen(1,10)."<br />";
echo zusammenrechnen(2,3)."<br />";
echo zusammenrechnen(-5, 8)."<br />";

$name = "Klaus";

echo "Hallo, mein Name ist $name.";
function meineFunktion($neuer_name)
{
    if(strlen($neuer_name) < 3)
    {
        echo "Neuer Name zu Kurz";
    }
    else
    {
        $name = $neuer_name;
        echo " In der Funktion heißt du $name.";
    }
}


meineFunktion("Petra");
echo " Der Wert der Variable name ist: $name.";
echo "<br />";
$wochentag = "Sonntag";

function begruessung($name, $tag_in_der_woche)
{
    echo "Hallo $name, ich wünsche dir einen schönen $tag_in_der_woche";
}

begruessung("John", $wochentag);

echo "<br /><br />";

function meine_funktion($parameter1 = "Eins", $parameter2 = "Zwei", $parameter3 = "Drei")
{
    echo "Parameter1: $parameter1 <br />";
    echo "Parameter2: $parameter2 <br />";
    echo "Paramater3: $parameter3 <br />";
}

echo meine_funktion();
echo meine_funktion("Argument1");
echo meine_funktion("Argument1", "Argument2");
echo meine_funktion("Argument1", "Argument2", "Argument3");

function suchen_und_ersetzen($text, $suche, $ersetzen) {
    $anzahl = substr_count($text, $suche);
    $neuer_text = str_replace($suche, $ersetzen, $text);
    return array("anzahl" => $anzahl, "neuer_text" => $neuer_text);
}

$text = "Dies ist ein Beispiel und es ist ein ziehmlich einfaches Beispiel";
$ergebnis = suchen_und_ersetzen($text, "ist", "war");

echo "Anzahl: ".$ergebnis['anzahl']."<br />";
echo "Neuer Text: ".$ergebnis['neuer_text'];
