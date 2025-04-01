<?php
// Load required libraries
require_once "vendor/autoload.php";

// Set up database connection parameters
$dbOptions = [
    'host' => 'localhost',
    'dbname' => 'school_project_db',
    'user' => 'root',
    'password' => ''
];

// Create a new PDO instance for the database connection
$pdo = new PDO("mysql:host=" . $dbOptions['host'] . ";dbname=" . $dbOptions['dbname'], $dbOptions['user'], $dbOptions['password']);

// Prepare and execute SQL statement to insert data into the table
$stmt = $pdo->prepare("INSERT INTO students (name, age) VALUES (?, ?)");
$stmt->execute(["John Doe", 18]);

// Query the database to retrieve all records from the 'students' table
$query = "SELECT * FROM students";
$result = $pdo->query($query);

// Output the results of the query
echo "<pre>";
foreach ($result as $row) {
    echo "Name: " . $row['name'] . ", Age: " . $row['age'] . "</br>";
}
?>
