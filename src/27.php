<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_project";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<?php 
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0){
  echo "<h1> Students List </h1>";
  while($row = $result->fetch_assoc()){
    echo $row["student_name"] . " - " . $row["course"] . "</br>";
  }
}
$conn->close();
?>
