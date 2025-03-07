<?php
// Function to get a random integer between two values
function get_random_int($min, $max) {
    return mt_rand($min, $max);
}

// Get a random number between 1 and 10
$random_number = get_random_int(1, 10);

// Print the result
echo "Random number: " . $random_number;
?>