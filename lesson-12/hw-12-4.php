<?php
$randomNum1 = rand(1, 9);
$randomNum2 = rand(1, 9);
print "How many is {$randomNum1} * {$randomNum2} ?\n";
$result = (int)trim(fgets(STDIN));
$num = $randomNum1 * $randomNum2;
if ($result == $num) {
    print "You are correct!\n";
} else {
    print "You are wrong! Correct answer: {$randomNum1} * {$randomNum2} = {$num}\n";
}
