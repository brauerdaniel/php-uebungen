<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 03.08.2017
 * Time: 07:54
 */
$i = 0;
while($i <= 10)
{
    echo "$i, ";
    $i++;
}

$zaehler1 = 0;
$zaehler2 = 0;

$min = -20;
$max = 30;

echo "<br /><br />";

while($zaehler1 < $max && $zaehler2 > $min)
{
    echo "Zaehler1: $zaehler1  ;  Zaehler2: $zaehler2 <br>";
    $zaehler1 += 2; // Verkürzte Schreibweise für $zaehler1 = $zaehler1+2;
    $zaehler2 -= 3; // Verkürzte Schreibweise für $zaehler2 = $zaehler2-3;

}
echo "<br /><br />";

$max1 = 30;
$zaehler = 0;
$increment = 2;

while($zaehler < $max1)
{
    if($zaehler == 10)
    {
        echo "Bei der Zahl 10 hören wir auf";
        break;
    }
    echo "$zaehler , ";
    $zaehler += $increment; //Erhöht den $zaehler um den Wert $increment
}
echo "<br /><br />";

$max2 = 30;
$zaehler3 = 0;
$increment1 = 2;

while($zaehler3 < $max2)
{
    $zaehler3 += $increment;
    if($zaehler3 >= 10 && $zaehler3 <= 15)
    {
        echo "Eine Zahl zwischen 10und 15 <br />";
        continue;
    }
    echo "$zaehler3 <br />";
}
echo "<br /><br />";

$zufall = rand(0,30);
while($zufall > 10 && $zufall <20)
{
    $zufall = rand(0, 30);
}
echo "unsere Zufallszahl: $zufall<br /><br />";

do
{
 $zufall1 = rand(0, 30);
}
while($zufall1 > 10 && $zufall1 <20);

echo "Unsere Zufallszahl: $zufall1";