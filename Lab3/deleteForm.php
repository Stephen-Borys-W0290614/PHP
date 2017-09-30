<?php
require("dbconn.php");
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
            ID
        </th>
        <th>
            First Name
        </th>
        <th>
            Last Name
        </th>
    </tr>
    </thead>
    <tbody>

    <?php

    $result = mysqli_query($conn, "SELECT * FROM actor ORDER BY actor_id DESC limit 0,10");

    if(!$result){
        die("Could Not Retreave Data " . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td>
                <?php echo $row['actor_id'] ?>
            </td>
            <td>
                <?php echo $row['first_name'];?>
            </td>
            <td>
                <?php echo $row['last_name'];?>
            </td>
        </tr>
        <?php
    endwhile;
    ?>

    </tbody>
</table>
<form action="deleteActor.php" method="post">
    <p>Enter ID To Delete: <input type="number" name="id" /></p>
    <p><input type="submit" name="Submit" value="Send Form" /></p>
</form>
</body>
</html>