<?php

// function sum ($first, $last) {
//     $total = $first + $last;
//     return $total;

// }

// $result = sum (10, 10);
// var_dump($result);





// function sum2 ($first, $last) {
//     $total = $first + $last;
//     return $total;
// }

// $result = sum2 (50, 50);
// var_dump($result);




function getfinalscore ($value) {
    if ($value >= 90){return "Nilai anda A".PHP_EOL;} 
    else if ($value >= 80) {return "Nilai anda B".PHP_EOL;}
    else if ($value >= 70) {return "Nilai anda C".PHP_EOL;}
    else if ($value >= 60) {return "Nilai Anda D".PHP_EOL;}
    else return "Nilai anda E";
}

$finalscore = getfinalscore (90);
echo "$finalscore";

// function getfinalscore ($value) {
//     if ($value >= 90){echo "Nilai anda A".PHP_EOL;} 
//     else if ($value >= 80) {echo "Nilai anda B".PHP_EOL;}
//     else if ($value >= 70) {echo "Nilai anda C".PHP_EOL;}
//     else if ($value >= 60) {echo "Nilai Anda D".PHP_EOL;}
//     else echo "Nilai anda E";
// }

// $finalscore = getfinalscore (90);
// echo "$finalscore";













// function getfinalvalue(int $value){
//     if ($value >= 90){return "A";}
//     else if ($value >= 80) {return "B";}
//     else if ($value >= 70) {return "C";}
//     else if ($value >= 60) {return "D";}
//     else {return "E";}
// }

// $score = getfinalvalue(90);
// echo"$score" . PHP_EOL;


// function getfinalscore (int $nilai){
// if ($nilai >= 90){return "A";}
// else if ($nilai >= 80){return "B";}
// else if ($nilai >= 70){return "C";}
// else if ($nilai >= 60){return "D";}
// else{return "E";}
// }

// $finalresult = getfinalscore(60);
// echo "$finalresult" . PHP_EOL;


// function finalscore (int $skor) {
//     if ($skor >= 90) {return "A";}
//     else if ($skor >= 80) {return "B";}
//     else if ($skor >= 70) {return "C";}
//     else if ($skor >= 60) {return "D";}
//     else{return"E";}

//     }

// $finalskor = finalscore (95);
// echo "$finalskor" .PHP_EOL;







