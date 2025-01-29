<?php
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += $digit * $digit * $digit;
        $temp = intval($temp / 10);
    }
    return $sum == $num;
}

$number = 153;
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
echo"<br>This program is written by Sarvesh Bhardwaj 0221BCA062"
?>
