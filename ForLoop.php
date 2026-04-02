<?php

// for ($counter = 10; $counter >=1; $counter--) {
// echo "Loop ke- $counter" . PHP_EOL;

// }


// for ($counter = 10 ; $counter >= 1; $counter--){
//    echo "Ini adalah for loop ke-$counter" . PHP_EOL;

// }















$counter = 10;

while ($counter >=1){echo "counter ke $counter" . PHP_EOL;
$counter--;}

// $counter = 10;

// while ($counter >=7){echo "Loop ke $counter". PHP_EOL;
// $counter--;
// }













// $counter = 1 ;

// while ( $counter <= 7 ){
//     echo "Ini adalah while loop ke-$counter" . PHP_EOL;
//    $counter++;
// }








// $counter = 100;
// do {echo "Counter ke-$counter" . PHP_EOL; $counter--;}
// while($counter >=10);





$battery = 100;

do {echo "Battery percentage {$battery}%" .PHP_EOL;
if ($battery == 15) {echo "Battery Low, Please Connect To Charger". PHP_EOL;}
elseif ($battery == 5) {echo "Battery Crittically Low, Please Connect To Charger Immidiately" . PHP_EOL;} 
$battery--;
} 
while ($battery >= 1); {echo "Battery Drained, Shutting Down....";};

// $battery = 100;

// do {echo "Battery life : $battery %" . PHP_EOL;
// if ($battery == 15){echo "Please connect to a charger". PHP_EOL;}
// elseif ($battery == 5){echo "Please connect to a charger immediately". PHP_EOL;}
// $battery--;
// }
// while ($battery >= 1);



// $battery = 100;

// do {
//     // Add visual battery bar
//     $bar = str_repeat("█", floor($battery / 10)) . str_repeat("░", 10 - floor($battery / 10));
//     echo "[$bar] $battery%" . PHP_EOL;
    
//     if ($battery == 15) {
//         echo "  ⚠️  Please connect to a charger" . PHP_EOL;
//     } elseif ($battery == 5) {
//         echo "  🔴 CRITICAL: Please connect to a charger immediately!" . PHP_EOL;
//     }
    
//     $battery--;
//     usleep(100000);
    
// } while ($battery >= 1);

// echo "[░░░░░░░░░░] 0% - Battery depleted!" . PHP_EOL;
















// $counter = 10;

// do {echo "Loop ke $counter" . PHP_EOL;
// $counter--;}
// while ($counter >=1);


// $counter = 10 ;

//  do{
//    echo "Ini adalah do while loop ke-$counter" . PHP_EOL;
//     $counter--;
// }while ( $counter >= 1 );











// $counter = 1 ;

// while ( $counter <= 10  ){
//     echo "Ini adalah while loop ke-$counter" . PHP_EOL;
//    $counter++;
// }


// $counter = 1 ;

// while ( true ){
//     echo "Ini adalah while loop ke-$counter" . PHP_EOL;
//     $counter++;

//     if ($counter > 10) {break;}
// }


// $counter = 1;
// do {
//   echo "Ini adalah do while loop ke-$counter" . PHP_EOL;
//   $counter++;
// } while ($counter <= 10);










// $cartItems = ["Apple", "Onion", "Tomato", "Chili", "Olive Oil"];
// $itemNumber = 1;

// echo "Your Shopping Cart:";

// while ($itemNumber <= count($cartItems)) {
//     echo $itemNumber . ". " . $cartItems[$itemNumber - 1] . "  ";
//     $itemNumber++;
// }






