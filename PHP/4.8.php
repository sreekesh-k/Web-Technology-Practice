<?php
$myArray = array(1, 2, 3, 4, 5, 4, 3, 2, 1);
echo "Original array: ";
echo implode(', ', $myArray);

//dort the array
echo "<br>Sorted array: ";
sort($myArray);
echo implode(', ', $myArray);

//check duplicate
echo "<br>Array without duplicates: ";
$uniqueArray = array_unique($myArray);
echo implode(', ', $uniqueArray);

//search
if (in_array(5, $myArray)) {
    echo "5 is in the array.";
}
//reverse
$reversedArray = array_reverse($myArray);
echo implode(', ', $reversedArray);

$myArray[] = 6; // Add 6 to the end of the array
array_push($myArray, 7);
echo implode(', ', $myArray);

unset($myArray[0]); // Remove the first element
echo implode(', ', $myArray);

$lastElement = array_pop($myArray); // Remove and return the last element
echo implode(', ', $myArray);

$firstElement = array_shift($myArray); // Remove and return the first element
echo implode(', ', $myArray);

array_splice($myArray, 1, 2); // Remove elements starting from index 1, removing 2 elements
echo implode(', ', $myArray);

//merge
$anotherArray = array(8, 9, 10);
$mergedArray = array_merge($myArray, $anotherArray);
echo implode(', ', $mergedArray);
