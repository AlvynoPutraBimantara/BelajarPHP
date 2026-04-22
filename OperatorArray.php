<?php

$first = ["NamaDepan" => "Alvyno"];
$Middle = ["NamaTengah" => "Putra"];
$Last = ["NamaBelakang" => "Bimantara"];

$full = $first + $Middle + $Last;
// var_dump($full);
// echo "\n";
// echo "Nama : " . $Middle ["NamaTengah"];

// echo "Nama : " . $full["NamaDepan"] . " ". $full["NamaTengah"] . " " . $full["NamaBelakang"];


//echo "Nama : " . $full ;
// echo "\n";

$fullName = ["NamaDepan" => "Antiseptik", "NamaTengah" => "Alkohol", "NamaBelakang" => "Aethanolum" ];


echo "Nama : " . $fullName ["NamaDepan"] . " " . $fullName["NamaTengah"] . " " . $fullName ["NamaBelakang"] ;

echo "\n";

$arrayA = [6, 5, 4, 3, 2, 1];
$arrayB = [1, 2, 3, 4, 5, 6 ];

$arrayC = array_merge($arrayB, $arrayA);
var_dump($arrayC);
print_r ($arrayC);
print_r ($fullName);
print_r ($full);
