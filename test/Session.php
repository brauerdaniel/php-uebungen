<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 04.08.2017
 * Time: 16:53
 */
session_start();
$_SESSION['name'] = "wert";
$name = $_SESSION['name'];
echo $name."<br />" ;

if (!isset($_SESSION['visited'])) {
    echo "Du hast diese Seite noch nicht besucht";
    $_SESSION['visited'] = true;
} else {
    echo "Du hast diese Seite zuvor schon aufgerufen";
}
?>
