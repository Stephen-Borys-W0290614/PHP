<?php
require("dbconn.php");
require 'isLoggedIn.php';
checkIfLoggedIn();
$first = $_POST['firstName'];
$last = $_POST['secondName'];
$gender = $_POST['gender'];
$DOB = $_POST['dateOfBirth'];
$HD = $_POST['hireDate'];
$id1 = $_POST['id1'];



// Create connection
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE employees SET birth_date = '$DOB', emp_no= '$id1', first_name = '$first', gender = '$gender', hire_date = '$HD', last_name = '$last' WHERE emp_no ='$id1'";

if ($conn->query($sql) === TRUE) {
    echo "Affected rows: " . mysqli_affected_rows($conn) ;
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

echo '<a href="http://localhost:8000/Assignment1/showEmployees.php">         Go Back</a>';

?>
