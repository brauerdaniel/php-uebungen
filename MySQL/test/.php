<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10.08.2017
 * Time: 11:50
 */
$pdo = new \PDO('mysql:host=mysql;dbname=test', 'root', 'root');

$statement = $pdo->prepare("SELECT email, password From user");

if($statement->execute())
{
    while($row = $statement->fetch())
    {
        echo $row['email']."<br />";
    }
}
else
{
    echo " SQL Error <br />";
    echo $statement->queryString."<br />";
    echo $statement->errorInfo()[2];
}