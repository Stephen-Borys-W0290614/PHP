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
<h1></h1>
<form id="formUpdate" name="formUpdate" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>
        <label>
            <input type="hidden" 	readonly="readonly" name="editCustId" id="editCustId" value="<?php echo $currentActor->getID();?>"/>
        </label>
    </p>
    <p>
        <label>
            <input type="hidden" name="firstName" id="firstName" value="<?php echo $currentActor->getFName();?>"/>
        </label>
    </p>
    <p>
        <label>
            <input type="hidden" name="lastName" id="lastName" value="<?php echo $currentActor->getLName();?>"/>
        </label>
    </p>
    <p>
        <input type="submit" name="DeleteBtn" id="DeleteBtn" value="Delete" onclick="return confirm('Really Delete?')"/>
    </p>
</form>
</body>
</html>
