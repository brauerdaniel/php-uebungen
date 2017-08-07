<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 04.08.2017
 * Time: 08:40
 */
$timestamp = time();
echo $timestamp;
echo "<br>";
$datum = date("d.m.Y - H:i");
echo $datum;
echo "<br />";

$timestamp = "10900";
echo round($timestamp / 60);
echo "<br />";
$tage = array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag");
$tag = date('w');
echo $tage[$tag];

$monatsnamen = array
(
    1=>"Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"
);
$monat = date("n");
echo ": ".$monatsnamen[$monat];
echo "<br /><br />";

echo strtotime("09 October 2015")."<br />";
echo strtotime("09.10.2015 14:03:02")."<br /><br />";

$inEinerStunde = time()+ 60*60;
echo "In einer Stunde ist es: ".date("H:i:s", $inEinerStunde);

echo "<br /><br />";
echo strtotime("+1 day")."<br />";
echo strtotime("+1 week")."<br />";
echo strtotime("+1 week 2 days 4 hours 2 seconds")."<br />";
echo strtotime("next Thursday")."<br />";
echo strtotime("last Monday")."<br /><br />";

$heute_in_einem_monat = strtotime("+1 month");
echo date("d.m.Y", $heute_in_einem_monat)."<br />";

?>

