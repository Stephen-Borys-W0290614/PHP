<?php
require("dbconn.php");
$first = $_POST['fName'];
$last = $_POST['lName'];
$gender = $_POST['gender'];
$DOB = $_POST['dob'];
$HD = $_POST['hd'];
$id1 = $_POST['id1'];



// Create connection
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE employees SET first_name = '$first', last_name= '$last', gender = '$gender', birth_date = '$DOB', hire_date = '$HD' WHERE emp_no ='$id1'";

if ($conn->query($sql) === TRUE) {
    echo "Affected rows: " . mysqli_affected_rows($conn) ;
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

echo '<a href="http://localhost:8000/Assignment1/showEmployees.php">         Go Back</a>';

?>
