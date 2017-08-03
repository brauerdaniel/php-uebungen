<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 03.08.2017
 * Time: 08:41
 */
for($i=0; $i < 10; $i++)
{
    echo "$i, ";
}

echo "<br /><br />";

$o = 0;
for( ; ; ) // Kein Startwert, Keine Bedingung oder Keinen Schleifenschritt
{
    if($o >= 20) //Unterbricht den Schleifendurchlauf, falls $o >= 20 ist
    {
        break;
    }
    echo "$o ,";
    $o++;
}
echo "<br /><br />";
for($u=0; $u < 20; $u++)
{
    if($u == 13)
    {
        echo "<br /> Dreizehn ist eine Unglückszahl!!! <br />";
        break;
    }

    echo "$u, ";
}
echo "<br /><br />";
for($u=0; $u < 20; $u++)
{
    if($u == 13)
    {
        echo "<br /> Dreizehn ist eine Unglückszahl!!! <br />";
        continue;
    }

    echo "$u, ";
}
?>
