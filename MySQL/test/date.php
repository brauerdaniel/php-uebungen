<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10.08.2017
 * Time: 08:30
 */
$pdo = new \PDO('mysql:host=mysql;dbname=test', 'root', 'root');

$statement = $pdo->prepare("UPDATE tabelle Set zeitpunkt = ? WHERE id = 1");
$statement->execute(array(date('Y-m-d H:i:s')));
// Mit PHP formatieren
$statement = $pdo->prepare("SELECT zeitpunkt FROM tabelle");
$statement->execute(array());
while($row = $statement->fetch())
{
    $date = new DateTime($row['zeitpunkt']);
    echo $date->format('d.m.y H:i:s')."<br />";
}
//Mit SQL formatieren 1970-2038
$statement = $pdo->prepare(("SELECT UNIX_TIMESTAMP(zeitpunkt) AS zeitpunkt FROM tabelle"));
$statement->execute(array());
while($row = $statement->fetch())
{
    echo date('d.m.y H:i:s', $row['zeitpunkt'])."<br />";
}
//Mit SQL formatieren mit Datetime anstatt mit unix_timestamp
$statement = $pdo->prepare(("SELECT DATE_FORMAT(zeitpunkt, '%d.%m.%Y %H:%i:%s') AS zeitpunkt FROM tabelle"));
$statement->execute(array());
while($row = $statement->fetch())
{
    echo date('d.m.y H:i:s', $row['zeitpunkt']) . "<br />";
}

//SELECT * FROM tabelle WHERE created_at >= '2015-01-01 00:00:00' AND created_at <= '2015-12-31 23:59:49' <- Alle Daten die in der Zeitspanne liegen, werden ausgegeben
//SELECT * FROM tabelle WHERE created_at >= DATE_SUB(NOW(),INTERVAL 30 DAY) <- Alle Daten die in den 30 Tagen erhalten wurden, werden ausgegeben. // geht auch mit month anstatt day
//SELECT * FROM user_accounts WHERE expire >= NOW() and expire <=DATE_ADD(NOW(),Interval 7 DAY)
//SELECT * FROM tabelle WHERE MONTH(created_at) = 3 <- Alle Daten die im 3 Monat/März erhalten wurden, werden ausgegeben.
