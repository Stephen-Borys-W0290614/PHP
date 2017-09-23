<!DOCTYPE html>
<html>
<head>
    <title>Page 3</title>
</head>
<body>

<div>

    <h1>This is the by reference</h1>

    <?php
    $byRef = $_POST['text'];

    function addBlahRef(&$blah)
    {
        $blah .= "...blah";
    }

    addBlahRef($byRef);
    echo '<h1>' . $byRef . '</h1>';    // Got help for this code from http://php.net/manual/en/functions.arguments.php
    ?>

</div>
<div>
    <h1>This is the by value</h1>
    <?php
    $byVal = $_POST['text'];

    function addBlahVal($blah) {       // Got help for this code from http://www.adp-gmbh.ch/php/pass_by_reference.html
        $blah .= "...blah";
    }

    addBlahVal($byVal);
    echo '<h1>' . $byVal . '</h1>';
    ?>

    <h1>Adding an example string to both the value and reference function.</h1>

</div>
<div>

    <?php

    $exampleString = "Hello World";

    echo '<h1>' . $exampleString . '</h1><br/>';

    addBlahVal($exampleString);

    echo '<h1>' . $exampleString . '</h1><br/>';

    addBlahRef($exampleString);

    echo '<h1>' . $exampleString . '</h1>';

    ?>

</div>
<div>
    <form action="Lab2PartAPostStep3.php" method="post">
        <p>Please Input Your Age: <input type="number" name="age" /></p>
        <p><input type="submit" name="Submit" value="Send Form" /></p>
    </form>
</div>




</body>
</html>