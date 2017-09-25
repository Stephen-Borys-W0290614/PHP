<!DOCTYPE html>
<html>
<head>
    <title>Page 4</title>
</head>
<body>
<div>
    <?php

    $globalAge = $_POST['age'];


    function ageString(){
        global $globalAge;

        $globalAge = '<h1>' . 'You Are ' . $globalAge . ' Years Old.' . '</h1>';
    }

    ageString();
    echo $globalAge;
    ?>
</div>

<div>
    <form action="Lab2PartAPostStep4.php" method="post">
        <p><input type="submit" name="Submit" value="Continue" /></p>
    </form>

</div>
</body>
</html>