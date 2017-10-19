<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
//$radius = ($_POST['r']);
//$length = ($_POST['l']);
//$width = ($_POST['w']);
//$base = ($_POST['b']);
//$height = ($_POST['h']);
//$edit = ($_POST['edit']);


include_once("shape.php");
include_once("circle.php");
include_once("rectangle.php");
include_once("triangle.php");

$myCircle = new circle("circle", $_POST['r'],0,$_POST['sizeEdit']);


$myRectangle = new rectangle("rectangle", $_POST['l'] , $_POST['w'],0);


$myTriangle = new triangle($_POST['b'], $_POST['h'],0,$_POST['sizeEdit']);


$myCircle->CalculateArea();
$radius = $myCircle->reSize();

$length = ($_POST['l']);
$width = ($_POST['w']);

$base = ($_POST['b']);
$height = ($_POST['h']);

$myTriangle->CalculateArea();
$height = $myTriangle->reSize();

$sizeEdit = ($_POST['sizeEdit']);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>
<div>
    <form action="index2.php" method="post">
        <fieldset>
            <legend id ="circle">Circle</legend>
            Radius: <input type="number" name="r" id="r" value=<?php echo $radius ?>><br>
        </fieldset>
        <fieldset>
            <legend>Rectangle</legend>
            Length: <input type="number" name="l" id="l" value="<?php echo $length ?>">
            Width: <input type="number" name="w" id="w" value="<?php echo $width ?>"><br>
        </fieldset>

        <fieldset>
            <legend>Triangle</legend>
            Base: <input type="number" name="b" id="b" value="<?php echo $base ?>">
            Height: <input type="number" name="h" id="h" value="<?php echo $height ?>"><br><br>
        </fieldset>
        <label>Grow or Shrink: <input type="number" step="any" name="sizeEdit"/> % </label>
        <input type="submit" id="submit" value="Calculate" name="Calculate"/>
    </form>
</div>
<?php
/*
include_once("shape.php");
include_once("circle.php");
include_once("rectangle.php");
include_once("triangle.php");

$myCircle = new circle("circle", "$radius",0);
$myRectangle = new rectangle("rectangle", "$length" , "$width",0);
$myTriangle = new triangle("triangle", "$base", "$height",0);*/

echo "<h2> Results: </h2><br/>";

echo "<h1> Circe Area: " . $myCircle->calculateArea() . "</h1><br/>";

echo "<h1> Rectangle Area: " . $myRectangle->calculateArea() . "</h1><br/>";

echo "<h1> Triangle Area: " . $myTriangle->calculateArea() . "</h1><br/>";


?>


</body>
</html>
