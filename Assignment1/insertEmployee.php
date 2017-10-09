<?php
require("dbconn.php");
$first = ($_POST['firstName']);
$last = ($_POST['secondName']);
$gender = ($_POST['theGender']);
$DOB = ($_POST['dateOfBirth']);
$HD = ($_POST['hireDate']);
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

$empNum = "SELECT emp_no FROM employees ORDER BY(emp_no) DESC limit 0,1";

$empNum += 1;

$sql = "INSERT INTO employees(birth_date, emp_no, first_name, gender, hire_date, last_name) VALUES ('$DOB', '$empNum', '$first', '$gender', '$HD', '$last')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>