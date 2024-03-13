<?php
function isArmstrong($number)
{
    $numDigits = strlen($number);
    $sum = 0;
    $temp = $number;
    while ($temp != 0) {
        $remainder = $temp % 10;
        $sum += pow($remainder, $numDigits);
        $temp = (int)($temp / 10);
    }
    return ($sum == $number);
}

$number = 153;
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
