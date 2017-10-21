<?php
require 'isLoggedIn.php';
checkIfLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
</head>
<body>
<h1> User Create</h1>
<form name = "form1" method="post" action="checkUser.php">
    <p>
        <label for="loginUser">User: </label>
    </p>
    <p>
        <input name="loginUser" type="text" id="loginUser"/>
    </p>
    <p>
        <label for="loginPwd">Password: </label>
    </p>
    <p>
        <input name="loginPwd" type="password" id="loginPwd"/>
    </p>
    <p>
        <input type="submit" name="Submit" value="Create" />
    </p>
</form>

<a href="http://localhost:8000/Lab5/mainLogin.html">         Go Back</a>

</body>
</html>

