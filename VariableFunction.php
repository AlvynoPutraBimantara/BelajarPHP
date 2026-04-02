<?php

// function alvyno(){echo "Alvyno 123". PHP_EOL;}
// function putra(){echo "Putra 456". PHP_EOL;}

// $calledFunction = "putra";
// $calledFunction();

 
function sayHello (string $name, $filler) {
     $fullmessage = $filler($name);
     echo "Hallo $fullmessage" ;
} 

function filler1 (string $name): string {
    return "Admin $name";
}

function filler2 (string $name): string {
    return "User $name";
}

function filler3 (string $name): string {
    return "Guest $name";
}

sayHello ("Bimantara", "filler1");



















// function sayHello(string $name, $filler)
// {
//     $finalName = $filler($name);
//     echo "Hello $finalName" . PHP_EOL;
// }
// function filler1(string $name): string
// {
//     return "User $name";
// }

// function filler2(string $name): string
// {
//     return "Admin $name";
// }

// function filler3(string $name): string
// {
//     return "Guest $name";
// }

// sayHello("Alvyno", "filler1");
// // sayHello("Eko", "strtoLower");
// sayHello("Eko", "strtoUpper");