<?php

include 'header.php';
require 'config.php';

if (!empty($config)) {
    echo '<br/>' . $config['host'];
}

$array1 = array(1, 2);
$array2 = array(1 => 'a', 2 => 'b', 'c' => 3);
echo "<br/>" . $array1[0];
echo $array2[1];
echo $array2[2];
echo $array2['c'];
echo $array2[0];

$persons = array("Mary" => "Female", "John" => "Male", "Miriam" => "Female");
print_r($persons);
echo "<br/>" . "Mary is a " . $persons["Mary"] . "<br/>";

$film_map = array(
    "comedy" => array(
        0 => "Pink Panther",
        1 => "john English",
        2 => "See no evil hear no evil"
    ),
    "action" => array(
        0 => "Die Hard",
        1 => "Expendables"
    ),
    "epic" => array(
        0 => "The Lord of the rings"
    ),
    "Romance" => array(
        0 => "Romeo and Juliet"
    )

);
foreach ($film_map as $film) {
    print_r($film);
}

array_map(function ($var) {
   print_r($var);
}, $film_map);

echo "<br/>" . count($film_map);
echo " " . is_array($film_map) . "<br/>";

ksort($film_map);
print_r($film_map);
