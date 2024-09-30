<?php 
// Creating an age array
$age = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

// Creating adult and child arrays
$adult = [];
$child = [];

// Looping through the age array and separating adults and children
foreach ($age as $value){
    if ($value >= 17) {
        $adult[] = $value;
    } else {
        $child[] = $value;
    }
}

// Printing the results
echo "List of ages: " . implode(", ", $age) . "<br>";
echo "Adults: " . count($adult) . "<br>";
echo "Children: " . count($child) . "<br>";
?>
