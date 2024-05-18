<?php

require_once("Animal.php");
require_once("Frog.php");
require_once("Ape.php");

$shaun = new Animal("shaun");
$rusdi = new Frog("rusdi");
$ambatron = new Ape("ambatron");

echo "Nama : " . $shaun->name . "<br>";
echo "Jumlah kaki : " . $shaun->legs . "<br>";
echo "Berdarah dingin : " . $shaun->coldblooded . "<br> <br>";

echo "Nama :  " . $rusdi->name . "<br>";
echo "Jumlah kaki :  " . $rusdi->legs . "<br>";
echo "Berdarah Dingin :  " . $rusdi->coldblooded . "<br>";
echo "Suara Lompatan : " . $rusdi->jump() . "<br>";

echo "Nama :  " . $ambatron->name . "<br>";
echo "Jumlah kaki : " . $ambatron->legs . "<br>";
echo "Berdarah Digin : " . $ambatron->coldblooded . "<br>";
echo "Suaranya : " . $ambatron->yell() . "<br>";