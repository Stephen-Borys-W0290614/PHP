<?php
setCookie("myCookie", "peanut butter", time()+3600, "/","localhost", 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cookie Example</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <p>last name: <input type="text" name="lastname" /></p>
    <p><input type="submit" name="Submit" value="Send Form" /></p>
</form>
<?php
if(isset($_COOKIE["myCookie"])){
    echo "Your Favourtie Cookie Is " . $_COOKIE["myCookie"];
}

if(isset($_POST['lastname'])){
    $sql = "<br/> you typed " . $_POST['lastname'];
    echo $sql;
}
?>
</body>
</html>