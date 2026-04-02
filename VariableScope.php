<?php

$name = "Alvyno";

function sayHello () {
global $name;
echo "Hello $name" . PHP_EOL;
}

echo ($GLOBALS ["name"]. PHP_EOL);
sayHello();
























function increment() {

static $counter = 1;
echo "$counter" . PHP_EOL;
$counter++;

};

increment();
increment();
increment();
