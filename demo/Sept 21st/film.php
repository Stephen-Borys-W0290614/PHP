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
                Title
            </th>
            <th>
                Description
            </th>
        </tr>
    </thead>
    <tbody>

<?php
   $conn = connectToDatabase();
    $result = mysqli_query($conn, "select * from film limit 0,10");

    if(!$result){
        die("Could Not Retreave Data " . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td>
            <?php echo $row['title'] ?>
            </td>
            <td>
            <?php echo $row['description'];?>
            </td>
        </tr>
    <?php
    endwhile;
    ?>




</tbody>
</table>
</body>
</html>




