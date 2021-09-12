<?php
$currentYear = (int)2021;
print "Введите Ваше имя: \n";
$name = trim(ucfirst(fgets(STDIN)));
print "Введите Вашу фамилию: \n";
$surname = trim(ucfirst(fgets(STDIN)));
print "Введите Ваш год рождения: \n";
$birthYear = trim((int)fgets(STDIN));
print "Введите Ваше место проживания: \n";
$location = trim(ucfirst(fgets(STDIN)));

$age = $currentYear - $birthYear;

print "Hello, {$name} {$surname}. You are {$age} years old. You are living in {$location}.\n";
