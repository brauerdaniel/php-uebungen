<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 07.08.2017
 * Time: 16:03
 */
/*$pdo = new \PDO('mysql:host=mysql;dbname=test', 'root', 'root');

$sql = "SELECT email, vorname, nachname FROM users";
foreach ($pdo->query($sql) as $row) {
    echo $row['vorname']." ".$row['nachname']."<br />";
    echo "E-Mail: ".$row['email']."<br /><br />";
}
echo  "<br /><br />";

$sql = "Select * FROM users";
foreach ($pdo->query($sql) as $row)
{
    echo $row['vorname']." ".$row['nachname']."<br />";
    echo "E-Mail: ".$row['email']."<br /><br />";
}

echo  "<br /><br />";
                                                            //Limit x, y Gibt ab der Stelle x die y- Werte danach aus
$sql = "SELECT * FROM users ORDER BY vorname LIMIT 2, 1";   //Sortiert nach dem Vornamen. Mit DESC lässt es sich auch von Z_A absteigend sortieren. LIMIT limitiert die abfrage auf x werte
foreach ($pdo->query($sql) as $row)
{
    echo $row['vorname']." ".$row['nachname']."<br />";
    echo "E-Mail: ".$row['email']."<br /><br />";
}

echo  "<br /><br />";

$sql = "SELECT * FROM users WHERE vorname = 'Tobias' ORDER BY nachname";
foreach ($pdo->query($sql) as $row)
{
    echo $row['vorname'] . " " . $row['nachname'] . "<br />";
    echo "E-Mail: " . $row['email'] . "<br /><br />";
}

echo  "<br /><br />";

$sql = "SELECT * FROM users WHERE id = 1";
$user = $pdo->query($sql)->fetch();
echo $user['vorname']." ".$user['nachname']."<br />";
echo "E-Mail: ".$row['email']."<br /><br />";
/*
// Findet alle Einträge mit Vornamen Max und Nachnamen Mustermann:
$sql = "SELECT * FROM users WHERE vorname = 'Max' AND nachname = 'Mustermann'";

// Findet alle Einträge mit Vornamen Max oder mit Nachnamen Mustermann:
$sql = "SELECT * FROM users WHERE vorname = 'Max' OR nachname = 'Mustermann'";

// Findet alle Einträge mit Vornamen Max und Nachnamen Mustermann
// oder die als E-Mail Adresse info@php-einfach.de angegeben haben:
$sql = "SELECT * FROM users WHERE (vorname = 'Max' AND nachname = 'Mustermann') OR (email = 'info@php-einfach.de)";

// Findet alle Einträge die nicht Musermann heißen
$sql = "SELECT * FROM users WHERE nachname != 'Mustermann'";

// Findet alle Einträge mit id < 5
$sql = "SELECT * FROM users WHERE id < 5";

// Findet alle Einträge mit id >= 5
$sql = "SELECT * FROM users WHERE id >= 5";

// Findet alle Einträge mit den IDs 2, 3, 5 und 7
$sql = "SELECT * FROM users WHERE id IN (2,3,5,7)";

// Findet alle Einträge, außer die mit den IDs 2, 3, 5 und 7
$sql = "SELECT * FROM users WHERE id NOT IN (2,3,5,7)";

// Findet alle Einträge bei denen die Spalte last_order den speziellen Wert NULL hat
$sql = "SELECT * FROM users WHERE last_order IS NULL";

// Findet alle Einträge bei denen die Spalte last_order nicht den speziellen Wert NULL hat
$sql = "SELECT * FROM users WHERE last_order IS NOT NULL";

//liste mit eindeutigen Vornamen, alphabetisch sortiert
$sql = "SELECT DISTINCT vorname FROM users ORDER BY vorname";

//Liste mit den eindeutigen Namen (Vor- und Nachname), alphabetisch sortiert

$pdo = new \PDO('mysql:host=mysql;dbname=test', 'root', 'root');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
else
{
    die("Bitte eine ?id übergeben");
}

echo "User mit der ID $id: <br />";
$sql = "SELECT * FROM users WHERE id = $id";
foreach ($pdo->query($sql) as $row)
{
    echo $row['vorname']." ".$row['nachname']."<br />";
    echo "E-Mail: ".$row['email']."<br /><br />";
}


$pdo = new \PDO('mysql:host=mysql;dbname=test', 'root', 'root');
if (isset($_GET['id']))
{
    $id = $_GET['id'];
}
else
{
    die("Bitte eine ?id übergeben");
}

echo "User mit der ID $id: <br />";
$statement = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$statement->execute(array($id));
while($row = $statement->fetch())
{
    echo $row['vorname']." ".$row['nachname']."<br />";
    echo "E-Mail: ".$row['email']."<br /><br />";
}
*/
$pdo = new \PDO('mysql:host=mysql;dbname=test', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$statement = $pdo->prepare("SELECT * FROM users LIMIT :limit");
$statement->execute(array('limit' => 5));
while($row = $statement->fetch()) {
    echo $row['vorname'] . " " . $row['nachname'] . "<br />";
    echo "E-Mail: " . $row['email'] . "<br /><br />";
}
?>
<br/>

<img src="" alt="Hier sollte eine Grafik geladen werden"/>

<input type="text"/>