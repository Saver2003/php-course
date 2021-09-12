<?php
print "Enter grade for Jake:\n";
$jakeGrade = (int)trim(fgets(STDIN));
print "Enter grade for John:\n";
$johnGrade = (int)trim(fgets(STDIN));
print "Enter grade for Jack:\n";
$jackGrade = (int)trim(fgets(STDIN));
print "Enter grade for Jane:\n";
$janeGrade = (int)trim(fgets(STDIN));

$allGrades = ceil(($jakeGrade + $johnGrade + $jackGrade + $janeGrade) / 4);
print "All grades is {$allGrades}";
