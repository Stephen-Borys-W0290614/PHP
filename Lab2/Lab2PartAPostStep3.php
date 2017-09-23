<!DOCTYPE html>
<html>
<head>
    <title>Process Page for Post</title>
</head>
<body>
<h1>
    <?php

    $globalAge = $_POST['age'];


    function ageString(){
        global $globalAge;

        $globalAge = '<h1>' . 'You Are ' . $globalAge . ' Years Old.' . '</h1>';
    }

    ageString();
    echo $globalAge;
    ?>
</h1>
</body>
</html>