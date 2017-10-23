<?php
session_start();
ob_start();
$db = mysqli_connect("localhost", "minAccess", "itCampus2017", "employees");
if(!$db){
    die ('could not connect to test database ' . mysqli_connect_error());
}

if(isset($_POST['loginUser']) && isset($_POST['loginPwd'])){
    $loginUser = $_POST['loginUser'];
    $loginPwd = $_POST['loginPwd'];
    $loginUser = stripslashes($loginUser);
    $loginPwd = stripslashes($loginPwd);
    $loginUser = mysqli_real_escape_string($db, $loginUser);
    $loginPwd = mysqli_real_escape_string($db, $loginPwd);
    $loginPwd = hash("sha512", $loginPwd);

    $unixSeconds = time();
    $loginSeconds = substr($loginUser, 0,16 - strlen($unixSeconds));
    $userSalt = $loginSeconds . $unixSeconds;
    //This code was to make a unique salt for users
    $cryptPre = '$6$rounds=5000$' . $userSalt . '$';
    $passwordHashPre = crypt($loginPwd, $cryptPre);
    $cryptPreEscape = '\$6\$rounds=5000\$' . $userSalt .'\$';
    $passwordHash = preg_replace('/^' . $cryptPreEscape . '/', '',$passwordHashPre);
    $sql = "SELECT * FROM WebUsers WHERE user_name ='$loginUser'";
    $sql.= " and user_pwd = '$loginPwd';";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);
    mysqli_close($db);
    if($count == 1){
        $_SESSION['loginUser'] = $loginUser;
        //HTTP HEADER
        header('location:showEmployees.php');
    }
    else {
        echo "<b> Invalid Login</b><br/>";
        $_SESSION['loginUser'] = "";
        echo "<a href=\"mainLogin.html\">Try Again</a>";
    }
}
ob_end_flush();