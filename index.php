<strong>  bettech_test_projects &copy; <?php echo date("Y"); ?> </strong> 

<?php 
include "config.php";

$servername = "10.0.101.115";
$username = "root";
$password = "root";
$dbname = "testdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "INSERT INTO users (username, password, email, join_date) VALUES ('john','1234','john@example.com',NOW());";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>