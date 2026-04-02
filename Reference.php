<?php

$name = "User";
$name2 = &$name;
$name2 = "Admin";

echo "$name" . PHP_EOL;

function increment (int &$value) {

$value++;
}

$counter = 1;
increment($counter);
echo $counter . PHP_EOL;






function &getValue()
{
static $value = 100;
return $value;
}

// $a = getValue();
// $a = 200;

$b = &getValue();
echo $b . PHP_EOL;

























function addFive($number) {
    $number += 5;  // Modifies a COPY
    echo "Inside function: $number\n";
}

$value = 10;
addFive($value);  // Pass by value (copy)
echo "Outside: $value\n";

// Output:
// Inside function: 15
// Outside: 10      ← Original unchanged!