<?php
function convert($pounds) {
    return round($pounds / 2.2, 2);
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>...</title>
    <style>
        table{
            border:1px solid rebeccapurple;
        }
        table tr td {
            border:1px solid rebeccapurple;
        }
        table tr th{
            background: black;
            color: white;
        }
    </style>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>
                 Pounds
            </th>
            <th>
                 Kilos
            </th>
         </tr>
     </thead>
     <tbody>
        <?php
        $pounds = 0;
        while ($pounds <= 100) : ?>
            <?php $kilos = convert($pounds) ?>
            <tr>
            <td>
                <?php
                echo $pounds
                ?>
            </td>
            <td>
            <?php
                echo $kilos
            ?>
            </td>
            </tr>
            <?php
                $pounds += 10;
            endwhile; ?>

     </tbody>
 </table>


</body>
</html>