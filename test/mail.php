<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 04.08.2017
 * Time: 12:09
 */
//mail($empfaenger_email, $betreff, $nachricht, "From Absender <absender@euredomain.de>");
$empfaenger = "empf@domain.de";
$betreff = "Die Mail-Funktion";
$from = "From: Nils Reimers <absender@domain.de>";
$text = "Hier lernt Ihr, wie man mit PHP Mails verschickt";

mail($empfaenger, $betreff, $text, $from);


$empfaenger = "empf@domain.de";
$betreff = "Die Mail-Funktion";
$from = "From: Nils Reimers <absender@domain.de>\n";
$from .= "Reply-To: antwort@domain.de\n";
$from .= "Content-Type: text/html\n";
$text = "Hier lernt Ihr, wie man mit <b>PHP</b> Mails
verschickt";

mail($empfaenger, $betreff, $text, $from);