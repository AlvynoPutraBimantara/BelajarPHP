<?php 

$total = 0;
$a = 10;
$b = 20;
$c = 30;

$result = ($a + $b + $c) / 3 ;
var_dump($result);

$total += $a;
$total += $b;
$total += $c;
$total *= 3;

var_dump($total);
