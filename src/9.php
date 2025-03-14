  <?php

// Connect to database and select all data from table
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare('SELECT * FROM users');
    $stmt->execute();

    // Fetch all rows from the database and return as JSON data
    $result = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $result[] = array('id' => $id, 'username' => $username, 'email' => $email);
    }

    echo json_encode($result);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>