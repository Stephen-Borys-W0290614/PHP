<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>...</title>
</head>
<body>
<?php
    echo"<table border = '1'>";
        echo"<thead>";
            echo"<tr>";
                echo "<th>";
                echo "Pounds";
                echo"</th>";
                echo "<th>";
                echo "Kilos";
                echo "</th>";
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
            $pounds = 0;
            while ($pounds <= 100){
                //fill in rows.
                $kilos = round($pounds / 2.2, 2);
                echo "<tr>";
                echo "<td>";
                    echo $pounds;
                echo "</td>";
                echo "<td>";
                    echo $kilos;
                echo "</td>";
                echo "</tr>";
                $pounds += 10;
            }
        echo "</tbody>";
    echo "</table>";

?>
</body>
</html>