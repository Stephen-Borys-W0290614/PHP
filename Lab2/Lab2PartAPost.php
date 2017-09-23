<!DOCTYPE html>
<html>
<head>
    <title>Process Page for Post</title>
</head>
<body>
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
</body>
</html>