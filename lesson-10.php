<?php
print "What is new year: \n";
$new_year = (int)fgets(STDIN);
print $new_year . "\n";
print "Happy New Year " . $new_year . "! Goodbye " . ($new_year - 1) . "\n";
