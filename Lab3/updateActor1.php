<?php
    function getID(){
        $id = ($_POST['id']);
        return $id;
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lab 3 Part B</title>
</head>
<body>
<?php
?>

<?php
require("dbconn.php");
$conn = connectToDatabase();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db("my_db", $conn);
$id = ($_POST['id']);

$result = mysqli_query($conn,"SELECT * FROM actor WHERE actor_id = '$id'")->fetch_array();





?>


<form action="updateActor.php" method="post">
    <p> Update First Name: <input name="fName" value="<?php echo $result['first_name']?>" <br/></p>
    <p> Update Last Name: <input name="lName" value="<?php echo $result['last_name']?>" <br/></p>
    <p> ID: <input type="number" name="id1" value="<?php echo $id ?>">
    <p><input type="submit" name="Submit" value="Send Form" /></p>
</form>



</body>

<?php
mysqli_close($conn);
?>

</html>
