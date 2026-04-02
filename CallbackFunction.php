<?php

function sayHello (string $name, callable $filler) {
    $message = $filler($name);
    echo "Hello $message" . PHP_EOL;
}

// function sayHello(string $name, callable $filler){
//     $finalname =$filler($name);
//     echo "Hello $finalname" . PHP_EOL;
// }


function filler1 (string $name): string {
    return "Admin $name";
}

function filler2 (string $name):string {
    return "User $name";
}

function filler3 (string $name):string {
    return "Guest $name";
}

sayHello ("Alvyno", "filler1");
sayHello ("Alvyno", "filler3");
sayHello ("Alvyno", function (string $name): string{
    return filler2($name);
});
sayHello("Alvyno", fn($name) => filler1($name));