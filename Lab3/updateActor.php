<?php/*
require("dbconn.php");
require("updateActor1.php");
$first = ($_POST['firstname']);
$last = ($_POST['lastname']);


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
*/?>

<?php
require("dbconn.php");
$first = $_POST['fName'];
$last = $_POST['lName'];
$id1 = $_POST['id1'];

echo $id1;

// Create connection
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE actor SET first_name = $first, last_name= $last WHERE id='$id1'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
