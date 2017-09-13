<?php
    date_default_timezone_set("Canada/Atlantic")
?>
<!DOCTYPE html>
<html>
<head>
    <title>Today's Date Is ...</title>
</head>
<body>
    <h1>
        The Date Is <?php echo date( "Y/m/d");?>
    </h1>
    <hr>
    <h1>
        The date and time is...
        <?php echo date("Y/m/d h:m:i e");?>
    </h1>
    <hr>
    <h1>
        The Server Time Zone Is
        <?php echo date_default_timezone_get()?>
    </h1>
</body>
</html>
