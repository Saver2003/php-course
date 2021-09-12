<?php
$my_array = [7 => "1", 6 => "4", "2", "3"];

ksort($my_array);
$new_array = array_values($my_array);
var_dump($new_array);
// print $my_array[1];
