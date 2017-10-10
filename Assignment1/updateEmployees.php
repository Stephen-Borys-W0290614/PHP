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

<!--
<form action="updateEmployees1.php" method="post">
    <p> Update First Name: <input name="fName" value="<?php echo $result['first_name']?>" <br/></p>
    <p> Update Last Name: <input name="lName" value="<?php echo $result['last_name']?>" <br/></p>
    <p> Update Gender: <input name="gender" value="<?php echo $result['gender']?>" <br/></p>
    <p> Update Date Of Birth: <input name="dob" value="<?php echo $result['birth_date']?>" <br/></p>
    <p> Update Hire Date: <input name="hd" value="<?php echo $result['hire_date']?>" <br/></p>
    <p> <input type="hidden" name="id1" value="<?php echo $id ?>">
    <p><input type="submit" name="Submit" value="Send Form" /></p>
</form>-->
<script src="check.js" type="text/javascript"></script>
<form id="myForm" name="myForm" method="post" action="updateEmployees1.php" onsubmit="return checkForm()">
    <p>
        <label id = "first">First Name:
            <input type="text" name="firstName" id="firstName" onfocusin="focusFunction()" onfocusout="blurFunction()" onFocus="editText(this.id)" onBlur="normalText(this.id)" value="<?php echo $result['first_name']?>"/>
        </label> <br />
    </p>
    <p>
        <label id = "last">Last Name:
            <input type="text" name="secondName" id="secondName" onfocusin="focusFunction2()" onfocusout="blurFunction()" onFocus="editText(this.id)" onBlur="normalText(this.id)" value="<?php echo $result['last_name']?>"/>
        </label>
    </p>
    <p>
        <label>Gender<select name="gender" id="gender">
                <option value="select">Select One</option>
                <option value="M">Male</option>
                <option value="F">Female</option> </select>
        </label>
    </p>
    <p>
        <label id = "dob">Date Of Birth:
            <input type="text" name="dateOfBirth" id="dateOfBirth" onfocusin="focusFunction4()" onfocusout="blurFunction()" onFocus="editText(this.id)" onBlur="normalText(this.id)" value="<?php echo $result['birth_date']?>"/>
        </label>
    </p>
    <p>
        <label id = "hd">Hire Date:
            <input type="text" name="hireDate" id="hireDate" onfocusin="focusFunction5()" onfocusout="blurFunction()" onFocus="editText(this.id)" onBlur="normalText(this.id)" value="<?php echo $result['hire_date']?>"/>
        </label>
    </p>
    <p>
        <input type="hidden" name="id1" value="<?php echo $id ?>">
    </p>
    <p>
        <label><input type="submit" name="submitButton" id="submitButton" value="Submit" /> </label>    <br />
    </p>
</form>




</body>

<?php
mysqli_close($conn);
?>

</html>