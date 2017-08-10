<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 09.08.2017
 * Time: 14:50
 */
$pdo = new \PDO('mysql:host=mysql;dbname=test', 'root', 'root');

$statement = $pdo->prepare("SELECT * FROM users WHERE vorname = ?");
$statement->execute(array('Tobias'));
$anzahl_user = $statement->rowCount();
echo "Es wurden $anzahl_user benutzer gefunden";

echo "<br /><br />";
 $statement = $pdo->prepare("DELETE FROM users WHERE vorname = ?");
 $statement->execute(array('vorname1'));
 $anzahl_user = $statement->rowCount();
 echo "Es wurden $anzahl_user Benutzer gelöscht";

echo "<br /><br />";

$statement = $pdo->prepare("SELECT COUNT(*) AS anzahl FROM users");
$statement->execute();
$row = $statement->fetch();
echo "Es wurden ".$row['anzahl']." User gefunden";

$statement = $pdo->prepare("SELECT COUNT(DISTINCT vorname, nachname) AS anzahl FROM user");
$statement->execute();
$row = $statement->fetch();
echo "Es wurden".$row["anzahl"]." User gefunden";

$statement = $pdo->prepare("SELECT nachname, COUNT(*) AS anzahl FROM users Group by nachanme ORDER BY anzahl DESC");
$statement->execute();
while($row = $statement->fetch())
{
    echo $row['nachname'].": ".$row['anzahl']." User<br />";
}

$statement = $pdo->prepare("Select nachname, COUNT(*) AS anzahl FROM users WHERE vorname = ? GROUP BY nachname");
$statement->execute(array('Max'));
while($row = $statement->fetch())
{
    echo $row['nachname'].": ".$row['anzahl']."User<br />";
}
