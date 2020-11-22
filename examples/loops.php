<?php

echo "<h1>Loops</h1>";
echo "<h3>Times tables</h3>";

for ($k = 1; $k < 13; $k++) {
    for ($i = 0; $i <= 10; $i++){
        $product = $k * $i;
        echo "The product of $k * $i is $product <br/>";
    }
    echo "<br/>";
}

echo "<h3>Foreach</h3>";

$animals_list = array("Lion","Wolf","Dog","Leopard","Tiger");
foreach($animals_list as $array_values){
    echo $array_values . "<br>";
}

echo "<h3>While</h3>";

$i = 0;
while ($i < 5){
    echo $i + 1 . "<br/>";
    $i++;
}