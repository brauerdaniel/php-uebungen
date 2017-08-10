<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 08.08.2017
 * Time: 13:50
 */
$pdo = new \PDO('mysql:host=mysql;dbname=test', 'root', 'root');
/*
$statement = $pdo->prepare("INSERT INTO users (email, vorname, nachname) VALUES (?, ?, ?)");
$statement->execute(array('info@php-einfach.de', 'Klaus', 'Neumann'));

$statement = $pdo->prepare("INSERT INTO users ( emails, vorname, nachname) VALUES (:email, :vorname :nachname)");
$statement->execute(array('email' => 'info@php-einfach.de', 'vorname' => 'Klaus', 'nachname' => 'Neumann'));

$statement = $pdo->prepare("INSERT INTO users (email, vorname, nachname) VALUES (:email, :vorname, :nachname)");
for($i=0;$i<10; $i++)
{
    $neuer_user = array('email' => 'email'.$i, 'vorname' => 'Vorname'.$i, 'nachname' => 'Nachname'.$i);
    $statement->execute($neuer_user);
}

$statement = $pdo->prepare("INSERT INTO users (email, vorname, nachname) VALUES (?, ?, ?)");
$statement->execute(array('info2@php-einfach.de', 'Klaus', 'Neumann'));

$neue_id = $pdo->lastInsertId();
var_dump($neue_id);
echo "Neuer Nutzer mit id $neue_id angelegt";

$statement = $pdo->prepare("UPDATE users SET email = ? WHERE id =?");
$statement->execute(array('neu@php-einfach', 17));

$statement = $pdo->prepare("UPDATE users SET email = :email_neu WHERE id = :id");
$statement->execute(array('id' => 17, 'email_neu' => 'neu@php-einfach.de'));

$statement = $pdo->prepare("UPDATE users SET vorname = :vorname_neu, email = :email_neu, nachname = :nachname_neu WHERE id = :id");
$statement->execute(array('id' => 1, 'email_neu' => 'neu@php-einfach.de', 'vorname_neu' => 'Neuer Vorname', 'nachname_neu' => 'Neuer Nachname'));

User 1 wird durch diese Funktion gelöscht

$statement = $pdo->prepare("DELETE FROM users WHERE id = ?");
$statement->execute(array(1)); //Löscht Benutzer mit ID 1

$statement = $pdo->prepare("DELETE FROM users Where vorname = :vorname && nachname = :nachname");
$statement->execute(array('vorname' => 'Max', 'nachname' => 'Mustermann')); //Löscht Benutzer mit dem Namen Max Mustermann



Neben WHERE funktionieren auch andere Anweisungen, wie z.B. ORDER BY und LIMIT. Um die alphabetisch ersten 10 Personen aus eurer Tabelle zu löschen, könnt ihr folgende Anweisung verwenden:
1
DELETE FROM users ORDER BY vorname,nachname LIMIT 10
*/
