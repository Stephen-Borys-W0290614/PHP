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