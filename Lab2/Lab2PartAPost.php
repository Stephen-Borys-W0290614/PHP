<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
<div>
    <?php
    $number = ($_POST['number']);
    $text = ($_POST['text']);

    if ($_POST['number'] == '1'){
        echo '<h'.$number.'>'.$text.'</h'.$number.'>'; }

    else if ($_POST['number'] == '2'){
        echo '<h'.$number.'>'.$text.'</h'.$number.'>'; }

    else if ($_POST['number'] == '3'){
        echo '<h'.$number.'>'.$text.'</h'.$number.'>'; }

    else if ($_POST['number'] == '4'){
        echo '<h'.$number.'>'.$text.'</h'.$number.'>'; }

    else if ($_POST['number'] == '5'){
        echo '<h'.$number.'>'.$text.'</h'.$number.'>'; }

    else if ($_POST['number'] == '6'){
        echo '<h'.$number.'>'.$text.'</h'.$number.'>'; }

    else{
        echo "Invalid Number Try Again";
    }

    ?>
</div>
<div>

    <h1> The loop to show all 7 items working </h1>
    <?php

    for($number = 1; $number <= 7; $number++)
    {
        if($number == 7){
            echo 'Invalid Entry';
        }
        else {
            echo '<h' . $number . '>' . $text . '</h' . $number . '>';
        }
    }
    ?>
</div>
<div>
    <form action="Lab2PartAPostStep2.php" method="post">
        <p>Please Input Some Text: <input type="text" name="text" /></p>
        <p><input type="submit" name="Submit" value="Send Form" /></p>
    </form>
</div>
</body>
</html>