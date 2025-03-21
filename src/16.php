<?php
// Define the database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_project";

// Create a new PDO instance with the specified configuration
try {
    $pdo = new PDO("mysql:host=" . $servername . ";dbname=" . $dbname, $username, $password);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), 425);
}

// Example query to check if a student exists with the given username
$query = "SELECT * FROM students WHERE username = :username";
$stmt = $pdo->prepare($query);
$stmt->execute(['username' => 'test_student']);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    echo "Student found: ";
    var_dump($result);
} else {
    echo "No student with the given username exists.";
}

// Example query to insert a new student
$query = "INSERT INTO students (username, name, age) VALUES (:username, :name, :age)";
$stmt = $pdo->prepare($query);
$stmt->execute(['username' => 'test_student', 'name' => 'John Doe', 'age' => 20]);

// Example query to update a student's information
$query = "UPDATE students SET name = :new_name WHERE username = :old_username";
$stmt = $pdo->prepare($query);
$stmt->execute(['new_name' => 'Jane Doe', 'old_username' => 'test_student']);

// Example query to delete a student
$query = "DELETE FROM students WHERE username = :username";
$stmt = $pdo->prepare($query);
$stmt->execute(['username' => 'test_student']);
?>
