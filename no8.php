<?php
// Counting the occurrences of a value in an array

$data = [80, 90, 75, 100, 85, 100, 66]; // array data
$search = 100; // value to search for

// Counting the occurrences of the $search value in $data
// Using array_count_values() and array index to get the count of occurrences
$index = array_count_values($data)[$search] ?? 0; // if not found, then 0

if ($index !== false) { // if found
    echo "Value 100 found, total occurrences: " . $index . " times"; // display the count of occurrences
} else { // if not found
    echo "Value 100 not found"; // display message
}

?>
