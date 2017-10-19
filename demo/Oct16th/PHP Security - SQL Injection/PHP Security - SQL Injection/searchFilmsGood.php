<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Search Films</title>
        <style type="text/css">
            table
            {
               border: 1px solid purple;
            }
            th, td
            {
               border: 1px solid red;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Film</th>
                <th>Description</th>
                <th>Rental Rate</th>
            </tr>
        <?php
        // put your code here
        $searchValue = "";
        $db = mysqli_connect("localhost","root", "inet2005","sakila");
        if (!$db)
        {
                die('Could not connect to the Sakila Database: ' .
                        mysqli_error($db));
        }
        
        if(empty($_POST['searchExpr']))
        {
            $sqlStatement = "SELECT * FROM film LIMIT 0,10";
        }
        else
        {
             $searchValue = mysqli_real_escape_string($db,$_POST['searchExpr']);
             $sqlStatement = "SELECT * FROM film WHERE rental_rate = '$searchValue';";
        }
        
        $success = mysqli_multi_query($db,$sqlStatement);
        if(!$success)
        {
                die('Could not retrieve records from the Sakila Database: ' .
                        mysqli_error($db));
        }
        $result = mysqli_store_result($db);
        while ($row = mysqli_fetch_assoc($result))
        {
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>". $row['description'] . "</td>";
                echo "<td>". $row['rental_rate'] . "</td>";
                echo "</tr>";
        }

        mysqli_close($db);

        ?>
        </table>
        <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" name="searchString">
            <p>Rate:
                <input type="text" name="searchExpr" size="50" value="<?php echo $searchValue ?>">
            </p>
            <p>
                <input name="" type="submit">
            </p>
        </form>
        <p><a href="payment.php">Payments</a></p>
    </body>
</html>
