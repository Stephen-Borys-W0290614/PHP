<!DOCTYPE html>
<html>
<head>
    <title>Part C</title>
</head>
<body>
<div>
    <?php

    $globalAge = $_POST['age'];
    $fName = $_POST['firstName'];
    $lName = $_POST['LastName'];
    $feet = $_POST['Feet'];
    $inches = $_POST['Inches'];

    $meters = round(($feet + $inches) / 3.28, 2);

    echo '<h1>' . "Your First Name Is: " . $fName . "</h1>";
    echo '<h1>' . "Your Last Name Is: " . $lname . '</h1>';
    echo '<h1>' . "Your Height In Meters|: " . $meters . '</h1>';
    ?>
</div>

<div>
    <form action="blah2.html" method="post">
        <p><input type="submit" name="Submit" value="Continue" /></p>
    </form>

</div>
</body>
</html>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Films in Sakila</title>
</head>
<body>
<table>
    <thread>
        <tr>
            <th>Descrption</th>
        </tr>
    </thread>
    <tbody>
    <?php
    mysqli_connect( "localhost", "root",  "inet2005",  "sakila");
    if (!$conn){
        echo die("Could not connect" .mysql_connect_error());
    }
    $result = mysqli_query($conn, "select * from film limit 0,10");
    if(!$result){
        die("Could not retrieve dats " . mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)): ?> {

    echo $row['title'] . " : "  . $row['description']. "<br/>";
    </php
    endwhile;
    ?>
    }
    ?>
    </tbody>
</table>
</body>
</html>