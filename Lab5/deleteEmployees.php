<?php
require("dbconn.php");
require 'isLoggedIn.php';
checkIfLoggedIn();

$id = ($_POST['id']);


// Create connection
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = stripslashes($id);
$id = mysqli_real_escape_string($conn, $id);
// sql to delete a record
$sql = "DELETE FROM employees WHERE emp_no ='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Affected rows: " . mysqli_affected_rows($conn) ;
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


echo '<a href="http://localhost:8000/Lab5/showEmployees.php">         Go Back</a>';

?>