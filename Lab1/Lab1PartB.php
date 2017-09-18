<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Part B</title>
</head>
<body>
    <?php
        echo "<h1> Greetings from lab 1</h1>"
    ?>
    <h1>Raptors are the best team ever</h1>
    <?php
        echo "<h3> Well This is the H3 </h3>"
    ?>

    <?php
        $name = "Stephen";

        echo "$name</br>";

        $middle = "Michale";

        echo "$middle</br>";

        $last = "Borys";

        echo "$last</br>";

        echo "$name.$middle.$last<br/>";
    ?>

    <?php
        $question1 = (32 * 14) + 83;
        $question2 = (1024/128) - 7;
        $question3 = 769%6;

            echo "Question 1. (32 * 14) + 83..... Answer:$question1</br>";
            echo "Question 2. (1024/128) - 7..... Answer:$question2<br/>";
            echo "Question 3. 69%6.... Answer:$question3<br/>";
    ?>


    <?php
        for ($x = 10; $x > 0; $x--){
            echo "$x..";
            if($x==1){
                echo "Blast Off<br/>";
            }
        }
    ?>

    <?php
    $colour = array("Pink","Black","Red","Blue","Orange","Purple","White");
    ?>

    <?php
    for($x = 0; $x < count($colour);$x++){
    echo"<li>$colour[$x]</li>";}
    ?>

    <?php
    foreach ($colour as $index => $item) {
        echo "<li>".($index + 1).":$item</li>";
    }

    ?>

    <?php
    $index = 0;

    while($index < count($colour)){
        echo "<li>$colour[$index]</li>";
        $index++;
    }

    ?>


</body>
</html>
