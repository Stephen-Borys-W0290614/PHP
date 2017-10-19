<?php
    require 'isLoggedIn.php';
    checkIfLoggedIn();
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="logoutForm" action="logOut.php" method="POST">
            <input type="submit" name="logoutButton" value="Log Out" />
        </form>
        <h1>Second Secured Page</h1>
        <a href="page1.php">Go to First Page</a>
        
    </body>
</html>
