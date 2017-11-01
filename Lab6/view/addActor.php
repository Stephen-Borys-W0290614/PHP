<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Customer Update</title>
</head>
<body>
<h1>Add Actor:</h1>
<form id="formUpdate" name="formUpdate" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>
        <label>
            <input type="hidden" name="ID" id="ID" value="1"/>
        </label>
    </p>
    <p>
        <label>First Name:
            <input type="text" name="firstName" id="firstName" />
        </label>
    </p>
    <p>
        <label>Last Name:
            <input type="text" name="lastName" id="lastName"/>
        </label>
    </p>

    <p>
        <input type="submit" name="AddBtn" id="AddBtn" value="Add" onclick="return confirm('Really Want To Add New Actor?')"/>
    </p>
</form>
</body>
</html>
