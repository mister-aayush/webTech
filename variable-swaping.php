<?php

$a = 10;
$b = 20;

echo "Before Swapping:<br>";
echo "a = $a , b = $b<br><br>";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After Swapping:<br>";
echo "a = $a , b = $b";
?>