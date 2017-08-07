<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 07.08.2017
 * Time: 12:23
 */
const VERSION = "1.0.5";
const MAX_EMAIL_LENGTH = 10;

$email = "info@php-einfach.de";

echo "Dies ist Version ".VERSION;

if( strlen($email) > MAX_EMAIL_LENGTH)
{
    echo "<br /> Die E-Mail darf maximal ".MAX_EMAIL_LENGTH." Zeichen lang sein.";
}

echo "<br /><br />";

class User
{
    const VERSION ="1.0.5";
    const MAX_EMAIL_LENGTH = 10;
    public function checkEmail($email)
    {
        if(strlen($email) > self::MAX_EMAIL_LENGTH)
        {
            return false;
        }
        return true;
    }
}
$user = new User();
echo "Die maximale Länge ist ".User::MAX_EMAIL_LENGTH."<br />";

if(!$user->checkEmail("info@php-einfach.de"))
{
    echo "Die E-Mail ist zu lang";
}

echo "<br /><br />";
echo "Aktuelle Programmzeile: ".__LINE__;
echo "<br /> Aktuelle Programmzeile: ".__LINE__;
echo "<br /> Aktueller Dateiname: ".__FILE__;
echo "<br /> Aktuelles Verzeichnis: ".__DIR__;