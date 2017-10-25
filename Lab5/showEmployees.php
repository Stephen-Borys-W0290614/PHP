<?php
require("dbconn.php");
require 'isLoggedIn.php';
checkIfLoggedIn();
?>
<?php

// Create connection
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$empNum = mysqli_query($conn,"SELECT emp_no FROM employees ORDER BY(emp_no) DESC limit 0,1");

?>
    <!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Assignment 1</title>
        <style>
            table {border-collapse:border}
            th, tr, td {border:solid 2px red}
        </style>
    </head>
<body>
<form name = "form2" method = "post" action = "createUser2.php">
    <p>
        <input type = "submit" name = "Submit" value = "Create User"/>
    </p>
</form>
<form action="searchEmployee.php" method="post">
    <p>Search For Employees: <input type="text" name="search" </p>
    <p><input type="submit" name="Submit" value="Send Form" /></p>
</form>

<form action="addEmployee.php" method="post">
    <p><input type="hidden" name="id" value="<?php echo $empNum ?>"></p>
    <p>Enter A New Employee <input type="submit" name="Submit" value="Send Form" /></p>
</form>
<?php
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php

    session_start();
    if (isset($_POST['Next'])) {
        $_SESSION['num'] += 25;
    }
    else
    {
        $_SESSION['num']+= 0;
    }
    if (isset($_POST['Previous'])) {
        if ($_SESSION['num'] == 0) {
            $_SESSION['num'] == 25;
        } else {
            $_SESSION['num'] -= 25;
        }
    }


$num = $_SESSION['num'];

    if (isset($_POST['End'])) {
        session_abort();
        $num = 0;
    }

?>


<table>
    <thead>
    <tr>
        <th>
            Employee ID
        </th>
        <th>
            Birthday
        </th>
        <th>
            First Name
        </th>
        <th>
            Last Name
        </th>
        <th>
            Gender
        </th>
        <th>
            Hire Date
        </th>
    </tr>
    </thead>
    <tbody>

<?php

$result = mysqli_query($conn, "SELECT * FROM employees limit $num,25");

if(!$result){
    die("Could Not Retreave Data " . mysqli_error());
}

while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td>
            <?php echo $row['emp_no'] ?>
        </td>
        <td>
            <?php echo $row['birth_date'];?>
        </td>
        <td>
            <?php echo $row['first_name'];?>
        </td>
        <td>
            <?php echo $row['last_name'];?>
        </td>
        <td>
            <?php echo $row['gender'];?>
        </td>
        <td>
            <?php echo $row['hire_date'];?>
        </td>
        <td>

            <form action="updateTheEmployees.php" method="post">
                <p> <input type="hidden" name="id" value="<?php echo $row['emp_no'] ?>">
                <p><input type="submit" name="Submit" value="Update" /></p>
            </form>
        </td>
        <td>
            <form action="deleteEmployees.php" method="post">
                <p> <input type="hidden" name="id" value="<?php echo $row['emp_no'] ?>">
                <p><input type="submit" name="Submit" value="Delete" /></p>
            </form>
        </td>
    </tr>
    <?php
endwhile;


?>
    </tbody>
</table>

<form action="showEmployees.php" method="post">
    <p><input type="submit" name="Next" value="Next" /></p>
</form>

<form action="showEmployees.php" method="post">
    <p><input type="submit" name="Previous" value="Previous" /></p>
</form>

<form action="showEmployees.php" method="post">
    <p><input type="submit" name="End" value="Return To First Page" /></p>
</form>

<form action="logout.php" method="post">
    <p><input type="submit" name="End" value="Log Out" /></p>
</form>


</body>
</html>