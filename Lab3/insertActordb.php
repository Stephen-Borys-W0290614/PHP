<?php
require("dbconn.php");
$first = ($_POST['first']);
$last = ($_POST['last']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Films In Sakila</title>
    <style>
        table {border-collapse:border}
        th, tr, td {border:solid 2px red}
    </style>
</head>
<body>
<?php

// Create connection
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO actor (first_name, last_name)
VALUES ('$first', '$last')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<table>
    <thead>
    <tr>
        <th>
            actor_id
        </th>
        <th>
            First_Name
        </th>
        <th>
            Last_Name
        </th>
        <th>
            Date Updated
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
           <td>
               <?php echo $row['last_update']; ?>
           </td>
       </tr>
       <?php
   endwhile;
    ?>





</tbody>
</table>
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
<?php
$conn->close();
?>




</body>

<?php /*
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
    $insert ="INSERT INTO actor (first_name, last_name)
              VALUES ('$first','$last',);";
    $result = mysqli_query($conn, "SELECT * FROM actor ORDER BY actor_id DESC limit 0,10");

    if ($conn->query($insert) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



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
<form action="films2.php" method="post">
    <p>Search:  <input type="text" name="search" /></p>
    <p><input type="submit" name="Submit" value="Send Form" /></p>
</form>
</body>
</html>

*/?>


