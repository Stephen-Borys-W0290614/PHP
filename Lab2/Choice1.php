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
            Celcius
        </th>
        <th style="background-color:#A4A4A4;">
            Fahrenheit
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $number = 0;
    $celcius = 0;
    while ($celcius <= 100) : ?>
        <?php $fahrenheit = round(($celcius * 9/5) + 32);?>

        <?php
        if($number == 0){
            ?>
            <tr>
                <td>
                    <?php
                    echo $celcius
                    ?>
                </td>
                <td>
                    <?php
                    echo $fahrenheit
                    ?>
                </td>
            </tr> <?php $number += 1;}

        else{
            ?>
            <tr>
                <td style="background-color:#A4A4A4;">
                    <?php
                    echo $celcius
                    ?>
                </td>
                <td style="background-color:#A4A4A4;">
                    <?php
                    echo $fahrenheit
                    ?>
                </td>
            </tr> <?php $number -= 1;}?>
        <?php
        $celcius += 1;
    endwhile; ?>
    </tbody>
</table>

</body>
</html>
