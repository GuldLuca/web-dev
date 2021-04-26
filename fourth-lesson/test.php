<?php

/*$name = 'Luca';

$year = "2021";

$next_year = $year + 1;

echo $next_year;*/

//Array

$letters = ['a', 'b'];

//Add element to array
array_push($letters, 'c', 'd', 'e');

//Delete last element from array
array_pop($letters);

//Show array - see index, data types or print_r($letters)
//var_dump($letters);

//Prepend
array_unshift($letters, 'x');

var_dump($letters);

?>