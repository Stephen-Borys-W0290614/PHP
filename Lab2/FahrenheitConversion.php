<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lab 2 Part B</title>
</head>
<body>

<form action="Choice1.php" method="post">
    <p><input type="submit" name="Submit" value="CELCIUS TO FAHRENHEIT " /></p>
</form>


<form action="Choice2.php" method="post">
    <p><input type="submit" name="Submit" value="FAHRENHEIT TO CELCIUS" /></p>
</form>

<?php
for($fahrenheit = 0; $fahrenheit < 101; $fahrenheit++){
    $celcius = round(($fahrenheit - 32) * 5/9);
    echo '<h1>' . $fahrenheit . ' degree(s) fahrenhiet equals ' . $celcius . 'degrees Celsius' . '</h1>';
}
?>


    <table border = 1>
        <thead>
        <tr>
            <th style="background-color:#A4A4A4;">
                Fahrenheit
            </th>
            <th>
                Celcius
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
        $fahrenheit = 0;
        while ($fahrenheit <= 100) : ?>
            <?php $celcius = round(($fahrenheit - 32) * 5/9);?>
            <tr>
                <td style="background-color:#A4A4A4;">
                    <?php
                    echo $fahrenheit
                    ?>
                </td>
                <td>
                    <?php
                    echo $celcius
                    ?>
                </td>
            </tr>
            <?php
            $fahrenheit += 1;
            endwhile; ?>
        </tbody>
    </table>



</body>
</html>