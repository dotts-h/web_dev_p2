<?php
include "scripts/tabel/matrix.php";

$i = 5;
$j = 10;

$obj = new Matrix($i, $j, true);
$table = $obj->getRandomMatrix();


echo "<table style='border: 1px solid #CCC; margin-left:auto; margin-right:auto'>";

// table headers
echo "<tr>";
for ($a = 0; $a < $j; $a++) {
    echo "<th style='border: 1px solid blue; padding:20px'>" . $a + 1 . "</th>";
}
echo "</tr>";
// table content
for ($a = 0; $a < $i; $a++) {
    echo "<tr>";
    for ($b = 0; $b < $j; $b++) {
        echo "<td style='border: 1px solid #ccc; padding:20px'>" . $table[$a][$b] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
