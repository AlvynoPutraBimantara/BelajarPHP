<?php

// function sayHello($name = "User"){
//     echo "Hallo $name" . PHP_EOL;


// }

// sayHello ("Putra");
// sayHello("Bimantara");
// sayHello();

// function sayHello($FirstName, $MiddleName="", $LastName=""){
//     echo "Hallo $FirstName $MiddleName $LastName " . PHP_EOL;


// }

// sayHello ("Alvyno", "Putra", "Bimantara");
// sayHello ("Alvyno");
// sayHello("Putra");
// sayHello("Bimantara");
// sayHello("");

// // function sum($first, $last) {
// //     $total = $first * $last;
// //     echo"Total $first * $last = $total" .PHP_EOL;

// // }

// // sum ("1", "2");
// // sum (1,2);





function sum (...$values) {
    $total = 0;
    foreach ($values as $value) {
        $total = $total + $value;
    }echo "Total Penjumlahan " . implode(" + ", $values) . " = $total" ;
}

sum (10,5,10, 10, 5, 10);















// function name ($firstname, $middlename ="", $lastname ="" ){
//     echo "Hallo nama saya $firstname $middlename $lastname" . PHP_EOL; 
// }

// name("Alvyno", "Putra", "Bimantara");