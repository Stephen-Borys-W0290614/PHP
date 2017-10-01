<?php
require("dbconn.php");
require("updateActor1.php");
$first = ($_POST['first']);
$last = ($_POST['last']);
$id = getID();

echo $id;

// Create connection
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE actor SET first_name = $first, last_name= $last WHERE id=$id;";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>