<?php
require("dbconn.php");
require 'isLoggedIn.php';
checkIfLoggedIn();
$first = ($_POST['firstName']);
$last = ($_POST['secondName']);
$gender = ($_POST['gender']);
$DOB = ($_POST['dateOfBirth']);
$HD = ($_POST['hireDate']);
$empNum = ($_POST['empID']);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Films In Sakila</title>
        <style>
            table {border-collapse:border}
            th, tr, td {border:solid 2px red}
        </style>
    </head>
    <body>
<?php

// Create connection
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





$sql = "INSERT INTO employees(birth_date, emp_no, first_name, gender, hire_date, last_name) VALUES ('$DOB', '$empNum', '$first', '$gender', '$HD', '$last')";

if ($conn->query($sql) === TRUE) {
    echo "Affected rows: " . mysqli_affected_rows($conn) ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo '<a href="http://localhost:8000/Assignment1/showEmployees.php">         Go Back</a>';

?>