<?php
    function getID(){
        $id = ($_POST['id']);
        return $id;
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lab 3 Part B</title>
</head>
<body>
<?php
$id = getID();
echo $id;
?>

<form action="updateActor.php" method="post">
    <p>Enter First Name Update: <input type="text" name="first" /></p>
    <p>Enter Last Name Update: <input type="text" name="last" /></p>
    <p><input type="submit" name="Submit" value="Send Form" /></p>
</form>


</body>



</html>
