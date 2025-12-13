<?php
$numbers = array(40, 10, 30, 20);

echo "without using built in fuctioon <br>";
echo "Before arranging: <br>";
foreach($numbers as $value){
    echo $value . " ";
}

$n = count($numbers);

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($numbers[$j] > $numbers[$j + 1]) {
            
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$j + 1];
            $numbers[$j + 1] = $temp;
        }
    }
}

echo " Ascending Order:<br>";
foreach ($numbers as $value) {
    echo $value . " ";
}

// descending
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($numbers[$j] > $numbers[$j + 1]) {
            
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$j + 1];
            $numbers[$j + 1] = $temp;
        }
    }
}

echo "<br>Descending Order:<br>";
foreach ($numbers as $value) {
    echo $value . " ";
}

echo"<br>";


?>
