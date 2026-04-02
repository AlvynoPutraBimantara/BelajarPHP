<?php 

// $names = ["Alvyno", "Putra", "Bimantara", "AMd"];

// // for ($i = 0; $i < count($names); $i++) {
// //     echo "$i. $names[$i]". PHP_EOL ;

// // }
 
// // echo " ". PHP_EOL;

// // foreach ($names as $i => $name) {
// //     echo "$i. $name" . PHP_EOL;
// // }

// //echo " ". PHP_EOL;

// foreach ($names as $name) {
//     echo "$name ";
// }

// echo " " . PHP_EOL;


// $person = [ "First_name" =>"Alvyno", "Middle_name" => "Putra", "Last_name" => "Bimantara", "AMd"];

// foreach ($person as  $key => $name) {

//     echo "$key = $name ". PHP_EOL;
   
// }

// $orders = [
// ['id' => 1, 'item' => 'Mouse', 'status' => 'paid' ],
// ['id' => 2, 'item' => 'Keyboard', 'status' => 'cancelled' ],
// ['id' => 3, 'item' => 'Monitor', 'status' => 'paid' ],
// ['id' => 4, 'item' => 'Headphone', 'status' => 'unpaid' ],
// ];

// foreach ($orders as $order) {
//     if ($order['status'] == 'unpaid') {
//         echo "Order {$order['id']}: {$order['item']}, is unfinised proceed to next order... " . PHP_EOL;
//         continue;
//     }
//     elseif ($order ['status'] == 'cancelled'){
//         echo "Order {$order['id']}: {$order['item']}, is cancelled proceed to next order... ". PHP_EOL;
//     continue;
//     };
//     echo "Processing Order {$order['id']}: {$order['item']}" . PHP_EOL;
// }



// $orders = [
//     ['id' => 101, 'status' => 'paid', 'item' => 'Laptop'],
//     ['id' => 102, 'status' => 'cancelled', 'item' => 'Mouse'],
//     ['id' => 103, 'status' => 'paid', 'item' => 'Keyboard'],
//     ['id' => 104, 'status' => 'cancelled', 'item' => 'Monitor'],
//     ['id' => 105, 'status' => 'paid', 'item' => 'Headphones']
// ];

// foreach ($orders as $order) {
// if ($order ['status'] == 'cancelled'){
// echo "Order {$order['id']}: {$order['item']} is cancelled, procceed to handle next order" . PHP_EOL;
// continue;
// }
// echo "Handling order {$order['id']}: {$order['item']}" . PHP_EOL;}








$orders = [
['id' => '1a', 'item' => 'Keyboard', 'status' => 'paid'],
['id' => '2b', 'item' => 'Headphone', 'status' => 'paid'],
['id' => '3c', 'item' => 'Mouse', 'status' => 'cancelled'],
['id' => '4d', 'item' => 'Laptop', 'status' => 'unpaid'],
['id' => '5e', 'item' => 'USB Hub', 'status' => 'paid'],
['id' => '6f', 'item' => 'USB Flashdrive', 'status' => 'paid'],
['id' => '7g', 'item' => 'Monitor', 'status' => 'cancelled'],
['id' => '8h', 'item' => 'Speaker', 'status' => 'unpaid'],
['id' => '9i', 'item' => 'Microphone', 'status' => 'paid']

];

foreach ($orders as $order) {
if ($order ['status'] == 'cancelled') {
    echo "Order {$order['id']}: {$order['item']} is cancelled, proceed to the next item" . PHP_EOL;
    continue;
}
else if ($order ['status'] == 'unpaid') {
    echo "Order {$order['id']}: {$order['item']} is not yet paid, proceed to the next item " .PHP_EOL;
    continue;
}
else if ($order ['status'] == 'paid') {
    echo "Handling {$order ['id']}: {$order['item']}, procced to delivery" . PHP_EOL;
    continue;
}
}





foreach ($orders as $order) {
if ($order ['status'] == 'cancelled') {
    echo "Order {$order['id']}: {$order['item']} is cancelled, proceed to the next item..." . PHP_EOL;
    continue;
}
elseif($order ['status'] == 'unpaid'){
    echo "Order {$order['id']}: {$order['item']} is unpaid, proceed to the next item..." . PHP_EOL;
    continue;
}
echo "Handling {$order['id']}: {$order['item']}, proceed to delivery service" . PHP_EOL;

}