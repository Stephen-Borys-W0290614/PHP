<?php
require("dbconn.php");
 $num = 0;
?>
    <!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Lab 3 Part B</title>
        <style>
            table {border-collapse:border}
            th, tr, td {border:solid 2px red}
        </style>
    </head>
<body>
<form action="searchEmployee.php" method="post">
    <p>Search For Employees: <input type="text" name="search" /></p>
    <p><input type="submit" name="Submit" value="Send Form" /></p>
</form>

<form action="addEmployee.html" method="post">
    <p>Enter A New Employee: <input type="text" name="search" /></p>
    <p><input type="submit" name="Submit" value="Send Form" /></p>
</form>
<?php
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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

            <form action="updateEmployees.php" method="post">
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

$num += 25;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p><input type="submit" name="Submit" value="Next" /></p>
</form>


