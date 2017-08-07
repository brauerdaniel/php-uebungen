<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 07.08.2017
 * Time: 13:01
 */
$text = "Wir haben 13 Katzen";
$muster = "/1[0123456789]/";
if(preg_match($muster, $text))
{
    echo "Eingabe enthält das Muster";
}
else
{
    echo "Eingabe enthält nicht das Muster";
}
echo "<br /><br />";

$text = "Wir haben 133 Katzen";
$muster = "/[89][0123456789][13579]";
if(preg_match($muster, $text))
{
    echo "Eingabe enthält das Muster";
}
else
{
    echo "Eingabe enthält nicht das Muster";
}

echo "<br /><br />";
$text = "Wir haben 133 Katzen";
$muster = "/[aeiou]/"; //Überprüfung, ob in dem Text Vokale vorhanden sind
if(preg_match($muster, $text))
{
    echo "Eingabe enthält das Muster";
}
else
{
    echo "Eingabe enthält nicht das Muster";
}