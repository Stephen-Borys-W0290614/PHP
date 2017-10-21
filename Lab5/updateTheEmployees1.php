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
//$DOB = stripslashes($DOB);
$DOB = mysqli_real_escape_string($conn, $DOB);
$first = stripslashes($first);
$first = mysqli_real_escape_string($conn, $first);
$gender = stripslashes($gender);
$gender = mysqli_real_escape_string($conn, $gender);
//$HD = stripslashes($HD);
$HD = mysqli_real_escape_string($conn, $HD);
$last = stripslashes($last);
$last = mysqli_real_escape_string($conn, $last);
$id1 = stripslashes($id1);
$id1 = mysqli_real_escape_string($conn, $id1);
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

echo '<a href="http://localhost:8000/Lab5/showEmployees.php">         Go Back</a>';

?>
