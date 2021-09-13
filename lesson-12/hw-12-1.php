<?php
print "Enter first number:\n";
$firstNum = (int)trim(fgets(STDIN));
print "Enter second number:\n";
$secondNum = (int)trim(fgets(STDIN));

if ($firstNum >= 0 && $secondNum >= 0) {
    print "Result: Numbers have the same sign\n";
} else {
    print "Result: Numbers have not the same sign\n";
}
