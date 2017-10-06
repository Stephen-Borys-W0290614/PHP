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

$result = mysqli_query($conn,"SELECT * FROM employees WHERE emp_no = '$id'")->fetch_array();

?>


<form action="updateEmployees1.php" method="post">
    <p> Update First Name: <input name="fName" value="<?php echo $result['first_name']?>" <br/></p>
    <p> Update Last Name: <input name="lName" value="<?php echo $result['last_name']?>" <br/></p>
    <p> Update Gender: <input name="gender" value="<?php echo $result['gender']?>" <br/></p>
    <p> Update Date Of Birth: <input name="dob" value="<?php echo $result['birth_date']?>" <br/></p>
    <p> Update Hire Date: <input name="hd" value="<?php echo $result['hire_date']?>" <br/></p>
    <p> <input type="hidden" name="id1" value="<?php echo $id ?>">
    <p><input type="submit" name="Submit" value="Send Form" /></p>
</form>



</body>

<?php
mysqli_close($conn);
?>

</html>