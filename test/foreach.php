<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 03.08.2017
 * Time: 14:45
 */
$mitarbeiter = array("Bob","Peter","Lisa");

echo "Foreach-Schleife: <br>";
foreach($mitarbeiter AS $name) {
    echo $name."<br>";
}
$mitarbeiter = array("Klaus" => "Müller", "Bob" => "Baumeister");

foreach($mitarbeiter AS $vorname => $nachname) {
    echo "$vorname $nachname <br>";
}
$unternehmen = array(
    "Vertrieb" => array("Klaus", "Lisa", "Lea"),
    "Produktion" => array("Peter", "Max")
);

foreach($unternehmen AS $abteilung => $mitarbeiter_der_abteilung) {
    echo "Mitarbeiter der Abteilung: $abteilung <br>";
    foreach($mitarbeiter_der_abteilung AS $mitarbeiter) {
        echo "$mitarbeiter <br>";
    }
    echo "<br>";
}