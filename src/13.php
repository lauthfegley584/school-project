<?php

// Connect to database
$conn = mysqli_connect("localhost", "db_user", "db_password", "database_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query database for data
$result = mysqli_query($conn, "SELECT * FROM table_name");

// Fetch and print the results
while ($row = mysqli_fetch_array($result)) {
    echo $row["column_name"] . "<br>";
}

// Close connection
mysqli_close($conn);
?>