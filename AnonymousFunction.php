<?php


function saygoodbye (string $name, $filler) {
   $message = $filler($name);
   echo "Goodbye $message" . PHP_EOL;
}

saygoodbye ("Alvyno", function (string $name){
   return "$name see you again next time ;)";
});


// function saygoodbye (string $name, $filler)  {
//    $message = $filler($name);
//    echo "Goodbye $message" . PHP_EOL;
// }

// $admin = function ($name) {
//     return "Admin $name";
// };

// $user = function ($name) {
//     return "User $name";
// };

// $guest = function ($name) {
//     return "Guest $name";
// };

// saygoodbye("Alvyno", $admin);
// saygoodbye("Alvyno", $user);
// saygoodbye("Alvyno", $guest);




// function sayHello (string $name, $filler) {
//      $fullmessage = $filler($name);
//      echo "Hallo $fullmessage" . PHP_EOL ;
// } 

// function filler1 (string $name): string {
//     return "Admin $name";
// }

// function filler2 (string $name): string {
//     return "User $name";
// }

// function filler3 (string $name): string {
//     return "Guest $name";
// }

// sayHello ("Bimantara", "filler1");
// sayHello ("Bimantara", "filler2");
// sayHello ("Bimantara", "filler3");












// SayGoodbye("User", function(string $name){
//     return ($name);
// });

// SayGoodBye("User", function(string $name){
//     return ($name);
// });

// SayGoodbye("User", function (string $name) {
//     return ($name);
// });

// SayGoodBye("User", function (string $name) {
//     return ($name);
// });

// SayGoodBye ("User", function (string $name){
//     return($name);
// });





























// function sayhi (string $name, $filler) {

// $message = $filler($name);
// echo "Hi $message" .PHP_EOL;

// }

// sayhi ("Admin", function (string $name) {
// return ($name);

// });

// function sayhello (string $name, $filler) {
//    $message = $filler($name);
//    echo "Hi $message " . PHP_EOL;
// }



// sayhello ("Alvyno", function (string $name){
//    return ($name);
// });












// function greeting (string $name, callable $filler) {

// $message = call_user_func ($filler, $name);
// echo "Greeting $message" . PHP_EOL; 

// }

// greeting ("User", "strtoupper");
// greeting("Users", function ($name) {
// return ($name);});
// greeting ("Player", fn($name) => ($name));










// function sayhello(string $name, $filler)
// {
//    $message = $filler($name);
//    echo "Hello $message" . PHP_EOL;
// }

// sayhello(
//    "User",
//    function (string $name) {
//       return ($name);
//    }
// );

 
//  $firstname = "Alvyno";
//  $lastname = "Bimantara";

//  $fullname1 = function () use ($firstname, $lastname) {
//     echo "Hello $firstname $lastname" .PHP_EOL;

//  };

//  $fullname2 = fn() => "Hello $firstname $lastname" . PHP_EOL;

// $fullname1();
// echo $fullname2();