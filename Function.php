<?php 

function getnum () {

$number = 1;

while (true) {
    $number++;
    echo "Nomor ke- $number" . PHP_EOL;
    
    if ($number > 10) {goto end;}
}
end: echo "-------------" . PHP_EOL;
} 

getnum ();



// function message() {echo "Hello World" . PHP_EOL;}

// function getvalue () {
//     $value = 1;

//     while (true) {
//         echo "Nomor ke - $value" .PHP_EOL;
//         $value++;
//         if ($value >= 10) {goto end;}
//     }
//     end: echo "counter end" . PHP_EOL;
// }


// // function getValue(){$counter = 1 ;

// // while ( true ){
// //     echo "Ini adalah while loop ke-$counter" . PHP_EOL;
// //     $counter++;

// //     if ($counter > 10) {goto end;}
// // }

// // end:
// // echo "Counter end" . PHP_EOL;}

// getValue();
// message();