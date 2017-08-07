<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 07.08.2017
 * Time: 12:15
 */
setcookie("username", "Max",time()+(3600*24));
$cookie = $_COOKIE["username"];
echo "Der Inhalt des Cookies: $cookie";
//Cookie löschen
setcookie("username", "Max", time()-3600);