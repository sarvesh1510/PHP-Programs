<?php

$array = [1, 4, 6, 8, 18];
$num = $array[0]; // Initialize with the first element of the array

for ($i = 1; $i < count($array); $i++) {
    if ($num < $array[$i]) {
        $num = $array[$i];
    }
}

echo "The biggest number is " . $num . "<br>";
echo "This Program is written by Sarvesh Bhardwaj 0221BCA062"

?>
