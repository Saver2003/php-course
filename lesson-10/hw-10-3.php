<?php
print "Enter divident:\n";
$divident = (int)trim(fgets(STDIN));
print "Enter divider:\n";
$divider = (int)trim(fgets(STDIN));

if ($divident % $divider == 0) print "false\n";
else print "true\n";
