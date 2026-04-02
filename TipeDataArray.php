<?php

//$value = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1.1);
//var_dump( $value);


//$nama = ["Alvyno", "Putra", "Bimantara"];
//var_dump($nama [0]);

//unset($nama[0]);

//$nama[] = "Aryandra";
//var_dump($nama);

// $vyno = [
// "id" => "vyno",
// "NamaDepan" => "Alvyno",
// "NamaTengah" => "Putra",
// "NamaBelakang" => "Bimantara",
// "Umur" => "22",
// "Alamat" => [
// "Kota" => "Surabaya",
// "Provinsi" => "Jawa Timur",
// ]

// ];

// var_dump($vyno);
//var_dump($vyno ["Alamat"] ["Kota"]);












$name = "Alvyno Putra Bimantara";
$DayofBirth = 17;
$MonthofBirth = 01;
$YearofBirth = 2003;
$occupancy = "Intern";
$CityofResidence = "Surabaya";
$Nationality = "Indonesia";


$user = [

"Name" => "$name",
"DateofBirth" => [ "DayofBirth" => $DayofBirth, "MonthofBirth" => $MonthofBirth, "YearofBirth" => $YearofBirth ],
"Occupacy" => "$occupancy",
"Residency" => [ "CityofResidence" => $CityofResidence, "Nationality" => $Nationality],
];


var_dump($user);
//var_dump($user ["Residency"] ["CityofResidence"]  );