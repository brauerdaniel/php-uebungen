<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 04.08.2017
 * Time: 12:24
 */
$text = "Dies ist ein kleines Beispiel zum Durchsuchen. Eine andere Möglichkeit lernen wir später.";
$position = strpos($text, "ein");
echo "Gefunden an Position: $position";
echo "<br />";

$text = "Dies ist ein kleines Beispiel zum Durchsuchen. Eine andere Möglichkeit lernen wir später.";
echo "'ein' gefunden an Position: ".strpos($text, "ein")."<br />"; //Ausgabe: 9
echo "'eine' gefunden an Position: ".strpos($text, "eine")."<br />"; //Ausgabe: 15
echo "'Ein' gefunden an Position: ".strpos($text, "Ein")."<br />"; //Ausgabe: 47
echo "'Eine' gefunden an Position: ".strpos($text, "Eine")."<br />"; //Ausgabe: 47

$text = "Dies ist ein kleines Beispiel zum Durchsuchen. Eine andere Möglichkeit lernen wir später.";
$suchwort = "Ich existiere nicht";
$position = strpos($text, $suchwort);

if($position === false) {
    echo "String wurde nicht gefunden";
} else {
    echo "Gefunden an Position: $position";
}
echo"<br /><br />";
$text = "Dies ist ein kleines Beispiel zum Durchsuchen. Eine andere Möglichkeit lernen wir später.";
$suchwort = "Dies";
$position = strpos($text, $suchwort);
echo "Mit zwei Gleichheitszeichen wurde das Suchwort '$suchwort': ";
if($position == false) { //Achtung, hier wurde fälschlicherweise nur 2 Gleichheitszeichen verwendet
    echo "nicht gefunden";
} else {
    echo "gefunden an Position: $position";
}
echo "<br />";

echo "Mit drei Gleichheitszeichen wurde das Suchwort '$suchwort': ";
if($position === false) {
    echo "nicht gefunden";
} else {
    echo "gefunden an Position: $position";
}
echo "<br /><br />";

$text = "Dies ist ein kleines Beispiel zum Durchsuchen. Eine andere Möglichkeit lernen wir später.";
echo substr($text, 9, 11)."<br />"; // Ausgabe: ein kleines
echo substr($text, 0, 15)."<br />"; //Gibt den Anfang des Textes aus
echo substr($text, 12 )."<br />"; //Gibt alles ab dem 12. Zeichen aus
echo substr($text, strlen($text)-15)."<br />"; //Gibt die letzten 15 Zeichen wieder.

$text = "Dies ist ein kleines Beispiel zum Durchsuchen. Eine andere Möglichkeit lernen wir später.";
echo substr($text, strlen($text)-15)."<br />"; //Gibt die letzten 15 Zeichen aus
echo substr($text, -15)."<br />"; //Gibt die letzten 15 Zeichen aus

echo substr($text, -20, 10)."<br />"; //Gibt 10 Zeichen zurück, beginnt 20 Zeichen vor Textende

echo substr($text, 5, -10)."<br />"; //Gibt alle Zeichen von Position 5 bis 10 Zeichen vor dem Ende zurück
echo substr($text, -25, -10)."<br />"; //Gibt alle Zeichen von 25 Zeichen vor dem Ende bis 10 Zeichen vor dem Ende zurück

echo "<br /><br />";

$suchwort = "Beispiel";
$position = strpos($text, $suchwort);

if($position === false)
{
    echo " Suchwort wurde nicht gefunden";
}
else
{
    $start_position =max(0, $position-10);
    $laenge = strlen($suchwort)+10+10;
    echo substr($text, $start_position, $laenge);
}
echo "<br /><br />";
$text = "Dies ist ein kleines Beispiel";
$text = str_replace("ist", "war", $text);
echo $text;

echo "<br /><br />";

$text = "Ersetze Peter und peteR durch ein anderes Wort";
$text = str_ireplace("Peter", "Max", $text);
echo $text."<br /><br />";

$text = "Wer war an der Tür? Peter und er hatte Beeren dabei.";
$text = str_replace("er", "sie", $text);
echo $text; //Ausgabe: Wsie war an dsie Tür? Petsie und sie hatte Besieen dabei.

echo "<br /><br />";

$text = "Wer war an der Tür? Peter und er hatte Beeren dabei.";
$text = str_replace(" er ", " sie ", $text);
echo $text; //Ausgabe: Wer war an der Tür? Peter und sie hatte Beeren dabei.

echo "<br /><br />";
$text= "Sie sollten täglich Früchte, Gemüse und Ballaststoffe essen.";
$gesund = array("Früchte", "Gemüse", "Ballaststoffe");
$lecker = array("Pizza", "Bier", "Eiscreme");

$new_text = str_replace($gesund, $lecker, $text);
echo $new_text; //Sie sollten täglich Pizza, Bier und Eiscreme essen.



