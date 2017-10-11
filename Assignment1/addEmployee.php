<?php
require("dbconn.php");
$result = ($_POST['id']);
// Create connection
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$empNum = mysqli_fetch_array(mysqli_query($conn,"SELECT emp_no FROM employees ORDER BY emp_no DESC LIMIT 1"));


?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <script src="check.js" type="text/javascript"></script>
</head>
<body>


<form id="myForm" name="myForm" method="post" action="insertEmployee.php" onsubmit="return checkForm()">
    <p>
        <label id = "first">First Name:
            <input type="text" name="firstName" id="firstName" onfocusin="focusFunction()" onfocusout="blurFunction()" onFocus="editText(this.id)" onBlur="normalText(this.id)"/>
        </label> <br />
    </p>
    <p>
        <label id = "last">Last Name:
            <input type="text" name="secondName" id="secondName" onfocusin="focusFunction2()" onfocusout="blurFunction()" onFocus="editText(this.id)" onBlur="normalText(this.id)"/>
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
            <input type="text" name="dateOfBirth" id="dateOfBirth" onfocusin="focusFunction4()" onfocusout="blurFunction()" onFocus="editText(this.id)" onBlur="normalText(this.id)"/>
        </label>
    </p>
    <p>
        <label id = "hd">Hire Date:
            <input type="text" name="hireDate" id="hireDate" onfocusin="focusFunction5()" onfocusout="blurFunction()" onFocus="editText(this.id)" onBlur="normalText(this.id)"/>
        </label>
    </p>
    <p>
        <input type="hidden" name="empID" id="empID" value="<?php echo $empNum[0]+1 ?>" readonly/>


    </p>
    <p>
        <label><input type="submit" name="submitButton" id="submitButton" value="Submit" /> </label>    <br />
    </p>

</form>


</body>
</html>

