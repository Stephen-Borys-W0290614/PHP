<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lab 2 Part B</title>
</head>
<body>



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