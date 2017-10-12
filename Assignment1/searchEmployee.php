<?php
require("dbconn.php");
require 'isLoggedIn.php';
checkIfLoggedIn();
$search = ($_POST['search']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Search</title>
    <style>
        table {border-collapse:border}
        th, tr, td {border:solid 2px red}
    </style>
</head>
<body>

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
    $conn = connectToDatabase();
    $result = mysqli_query($conn, "SELECT * FROM employees where first_name like'%$search%' OR last_name like '%$search%' limit 0,25");

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
    </tr>

        <?php
    endwhile;
    ?>
</tbody>
</table>
<form action="searchEmployee.php" method="post">
    <p><input type="text" name="search" id = "search" value="<?php echo $search ?>"></p>
    <p>Search For Employee: <input type="submit" name="Submit" value="Send Form" /></p>
</form>
<form action="showEmployees.php" method="post">
    <p>Go Back To First Page <input type="submit" name="Submit" value="Send Form" /></p>
</form>
<form action="logout.php" method="post">
    <p><input type="submit" name="End" value="Log Out" /></p>
</form>

</body>
</html>



