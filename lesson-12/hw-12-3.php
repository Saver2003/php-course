<?php
print "Enter first number:\n";
$firstNum = (int)trim(fgets(STDIN));
print "Enter second number:\n";
$secondNum = (int)trim(fgets(STDIN));

print "Your random number is " . rand($firstNum, $secondNum) . "\n";
