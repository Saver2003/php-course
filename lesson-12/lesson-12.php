<?php
$randomNum = rand(0, 100);

// if ($randomNum % 2 == 0) {
//     $winningSum = 100;
// } else {
//     $winningSum = 0;
// }
$randomNum % 2 == 0 ? $winningSum = 100 : $winningSum = 0;

print $winningSum . "\n";
