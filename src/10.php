
<?php
// Function to get a random number between 1 and 6
function getRandomNumber() {
    $number = mt_rand(1, 6);
    return $number;
}

// Get a random number and display it
$randomNumber = getRandomNumber();
echo "The random number is: " . $randomNumber;
?>