<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lab 2 Part B</title>
</head>
<body>

<?php
for($fahrenheit = 0; $fahrenheit < 101; $fahrenheit++){
    $celcius = round(($fahrenheit - 32) * 5/9);
    echo '<h1>' . $fahrenheit . ' degree(s) fahrenhiet equals ' . $celcius . 'degrees Celsius' . '</h1>';
}
?>


    <table border = 1>
        <thead>
        <tr>
            <th>
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
                <td>
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