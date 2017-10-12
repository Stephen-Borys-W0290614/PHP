<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Add Employees</title>
</head>
<body>
<?php
require("dbconn.php");
require 'isLoggedIn.php';
checkIfLoggedIn();
// Create connection
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$empNum = mysqli_fetch_array(mysqli_query($conn,"SELECT emp_no FROM employees ORDER BY emp_no DESC LIMIT 1"));


?>

<script src="check2.js" type="text/javascript"></script>
<form id="myForm" name="myForm" method="post" action="insertEmployee.php" onsubmit="return checkForm()">
    <p>
        <label id = "first">First Name:
            <input type="text" name="firstName" id="firstName" onfocusin="focusFunction()" onfocusout="blurFunction()" onFocus="editText(this.id)" onBlur="normalText(this.id)" />
            <span style="color: red" id="first_name_error"></span>
        </label> <br />
    </p>
    <p>
        <label id = "last">Last Name:
            <input type="text" name="secondName" id="secondName" onfocusin="focusFunction2()" onfocusout="blurFunction()" onFocus="editText(this.id)" onBlur="normalText(this.id)" />
            <span style="color: red" id="last_name_error"></span>
        </label>
    </p>
    <p>
        <label>Gender<select name="gender" id="gender">
                <option value="select">Select One</option>
                <option value="M">Male</option>
                <option value="F">Female</option> </select>
            <span style="color: red" id="gender_error"></span>
        </label>
    </p>
    <p>
        <label id = "dob">Date Of Birth: (ex 1995-05-24):
            <input type="text" name="dateOfBirth" id="dateOfBirth" onfocusin="focusFunction4()" onfocusout="blurFunction()" onFocus="editText(this.id)" onBlur="normalText(this.id)" />
            <span style="color: red" id="date_birth_error"></span>
        </label>
    </p>
    <p>
        <label id = "hd">Hire Date: (ex 2015-05-24)

            <input type="text" name="hireDate" id="hireDate" onfocusin="focusFunction5()" onfocusout="blurFunction()" onFocus="editText(this.id)" onBlur="normalText(this.id)"/>
            <span style="color: red" id="date_hire_error"></span>
        </label>
    </p>
    <p>
        <input type="hidden" name="empID" id="empID" value="<?php echo $empNum[0]+1 ?>" readonly/>
    </p>
    <p>
        <label><input type="submit" name="submitButton" id="submitButton" value="Submit" /> </label>    <br />
    </p>
</form>

<form action="showEmployees.php" method="post">
    <p>Go Back To First Page <input type="submit" name="Submit" value="Send Form" /></p>
</form>
</body>
<?php
mysqli_close($conn);
?>
</html>