<!DOCTYPE html>
<html>
    <head>
        <title>Payment</title>
        <style>
            table, th, tr, td { border: solid 1px red; }
            td, th { padding: 4px; }
            #searchExpr { width: 300px; }
        </style>
    </head>
    <body>
        <h1>Sakila Payments</h1>
        <table>
            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $searchValue = "";
                $db = mysqli_connect("localhost", "root", "inet2005", "sakila");
                if(!$db)
                {
                    die("Could not connect to sakila database " . mysqli_connect_error());
                }
                if(empty($_POST['searchExpr']))
                {
                    $sqlStatement = "SELECT * FROM payment LIMIT 0, 50";
                }
                $success = mysqli_multi_query($db, $sqlStatement);
                if(!$success)
                {
                    die('Could not retrieve records from the Sakila database: ' . mysqli_error($db));
                }
                $result = mysqli_store_result($db);
                while ($row = mysqli_fetch_assoc($result)):
                    ?>
                    <tr>
                        <td><?php echo $row['payment_id']; ?></td>
                        <td><?php echo $row['amount']; ?></td>
                    </tr>
                <?php
                endwhile;
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </body>
</html>