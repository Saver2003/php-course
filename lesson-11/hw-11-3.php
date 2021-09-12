<?php
print "Enter numeric value for first element:";
$value1 = (int)trim(fgets(STDIN));
$array[0] = $value1;
print "Enter numeric value for second element:";
$value2 = (int)trim(fgets(STDIN));
$array[1] = $value2;
print "Enter numeric value for third element:";
$value3 = (int)trim(fgets(STDIN));
$array[2] = $value3;
print "Enter key of element for comparison:";
$elem = (int)trim(fgets(STDIN));

print "Result:\n";
if ($array[$elem] > $array[0]) {
    print $array[$elem] . " > " . $array[0] . " = " . "true\n";
} else {
    print $array[$elem] . " > " . $array[0] . " = " . "false\n";
}

if ($array[$elem] > $array[1]) {
    print $array[$elem] . " > " . $array[1] . " = " . "true\n";
} else {
    print $array[$elem] . " > " . $array[1] . " = " . "false\n";
}

if ($array[$elem] > $array[2]) {
    print $array[$elem] . " > " . $array[2] . " = " . "true\n";
} else {
    print $array[$elem] . " > " . $array[2] . " = " . "false\n";
}
