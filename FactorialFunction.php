<?php

// function factorialLoop(int $value): int
// {
//     $total = 1;
//     for ($i = 1; $i <= $value; $i++) {
//         $total = $total * $i;
//     }
//     return $total;
// }

// var_dump(factorialLoop(5));














function factorialRecursive(int $value): int
{
    if ($value <= 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));





function loop (int $loopvalue) 
{
    if ($loopvalue == 0) {
        echo "Loop Selesai" . PHP_EOL;
    }
    else {
        echo "Loop ke-$loopvalue" . PHP_EOL;
        return loop ($loopvalue - 1);
    }
}

loop (10);
















function recursive (int $value) {
    if ($value == 1) {
        return 1;
    } else {return $value * recursive($value - 1);
    }
}

var_dump (recursive(10));