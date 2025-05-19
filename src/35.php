<?php
// Set the environment variables
$environment = "development";
$db_server = "localhost";
$db_name = "school_project_database";

// Connect to the database
$conn = mysqli_connect($db_server, $db_name, 'root', $db_name);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_error($conn));
}

// Example SQL query to insert data into a table
$sql = "INSERT INTO students (name, age, grade) VALUES ('John Doe', 18, 'High School')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
?>
