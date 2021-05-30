<?php

$dataPoints = array();

for ($x = 0, $i = 0; $x <= 10; $x += 0.1) {
    array_push($dataPoints, array(
        "x" => $x,
        "y" => compute_y($x)
    ));
}

function compute_y($x)
{
    return exp($x);
}

// print(pow(-1.8, (1.0 / 4.0)));
// print_r($dataPoints);