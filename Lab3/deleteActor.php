<?php
require("dbconn.php");

$id = ($_POST['id']);


// Create connection
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM actor WHERE actor_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Affected rows: " . mysqli_affected_rows($conn) ;
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


echo '<a href="http://localhost:8000/Lab3/deleteForm.php">         Go Back</a>';

?>