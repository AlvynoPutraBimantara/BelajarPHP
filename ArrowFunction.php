<?php

$firstName = "Alvyno";
$middleName = "Putra";
$lastName = "Bimantara";
$firstNumber = 100;
$secondNumber = 200;

// $fullname = fn() => "Hello $firstName  $middleName  $lastName" . PHP_EOL;
// echo  $fullname();

// $sum = fn() => $firstNumber + $secondNumber . PHP_EOL;
// echo $sum();

// $sum2 = fn($firstNumber2, $secondNumber2, $thirdnumber) => $firstNumber2 + $secondNumber2 * $thirdnumber . PHP_EOL;
// echo $sum2(10, 20, 100);

// $prices = [100, 200, 300];
// $discounted = array_map(fn($price) => $price * 0.9, $prices);

// print_r($discounted);


$users = ["Alvyno", "Putra", "Bimantara"];
$userstitle = array_map(fn($name)=> "User $name", $users);
print_r($userstitle);


