<?php

$first = ["NamaDepan" => "Alvyno"];
$Middle = ["NamaTengah" => "Putra"];
$Last = ["NamaBelakang" => "Bimantara"];

$full = $first + $Middle + $Last;

var_dump($full);
echo "\n";
echo "Nama : " . $first ["NamaDepan"];

//echo "Nama : " . $full["NamaDepan"] . " ". $Middle["NamaTengah"] . " " . $full["NamaBelakang"];


//echo "Nama : " . $full ;
echo "\n";

$fullName = ["NamaDepan" => "Antiseptik", "NamaTengah" => "Alkohol", "NamaBelakang" => "Aethanolum" ];


echo "Nama : " . $fullName ["NamaDepan"] . " " . $fullName["NamaTengah"] . " " . $fullName ["NamaBelakang"] ;

echo "\n";

$arrayA = [5, 4, 3, 2, 2];
$arrayB = [1, 2, 3, 4, 5];

$arrayC = ($arrayA + $arrayB);
var_dump($arrayC);
print_r ($arrayC);
print_r ($fullName);
print_r ($full);
