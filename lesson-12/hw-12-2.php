<?php
print "Enter the cost of product:\n";
$cost = (int)trim(fgets(STDIN));

$finalCost = $cost;
if ($cost > 500) {
    $finalCost = $cost - ($cost / 100 * 3);
} else if ($cost > 1000) {
    $finalCost = $cost - ($cost / 100 * 5);
}

print $finalCost . "\n";
