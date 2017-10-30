<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Customers</title>
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
<?php
if(!empty($lastOperationResults)):
    ?>
    <h2><?php echo $lastOperationResults; ?></h2>
    <?php
endif;
?>
<h1>Current Customers:</h1>
<table>
    <thead>
    <tr>
        <th>Actor ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Last Update</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($currentActor as $film):
        ?>
        <tr>
            <td><?php echo $film->getID(); ?></td>
            <td><?php echo $film->getFName(); ?></td>
            <td><?php echo $film->getLName(); ?></td>
            <td><?php echo $film->getLastUpdate(); ?></td>
            <td>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?idUpdate=<?php echo $film->getID(); ?>">
                    <img src="images/edit_icon.png" height="25px" width="25px"/>
                </a>
            </td>


        </tr>
        <?php
    endforeach;
    ?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <p><input type="submit" name="Submit" value="Go Back" /></p>
    </form>

    </tbody>
    <tfoot></tfoot>
</table>
</body>
</html>
