<?php
$array = [];
print "Enter key 1:\n";
$key1 = (int)trim(fgets(STDIN));
print "Enter value 1:\n";
$value1 = trim(fgets(STDIN));
$array[$key1] = $value1;
print "Enter key 2:\n";
$key2 = (int)trim(fgets(STDIN));
print "Enter value 2:\n";
$value2 = trim(fgets(STDIN));
$array[$key2] = $value2;
print "Enter key 3:\n";
$key3 = (int)trim(fgets(STDIN));
print "Enter value 3:\n";
$value3 = trim(fgets(STDIN));
$array[$key3] = $value3;

ksort($array);

print "Result string: " . $array[$key1] . " " . $array[$key2] . " " . $array[$key3];
