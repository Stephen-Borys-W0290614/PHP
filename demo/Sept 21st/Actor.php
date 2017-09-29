<?php
require("dbconn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Films In Sakila</title>
    <style>
        table {border-collapse:border}
        th, tr, td {border:solid 2px black}
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
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
    $conn = connectToDatabase();
    $result = mysqli_query($conn, "select * from actor");

    if(!$result){
        die("Could Not Retreave Data " . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td>
                <?php echo $row['first_name'] ?>
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
</body>
</html>




