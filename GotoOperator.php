<?php

// //goto b;
// echo "Hello World" . PHP_EOL;

// a:
// echo "Hello_World123" . PHP_EOL;

// b:
// echo "Hello_World456" . PHP_EOL;


$counter = 1;

while (true) {
echo "Iterasi ke-$counter" . PHP_EOL;
$counter++;
if ($counter > 10) {goto end;}

}

end: echo "Iterasi terakhir";