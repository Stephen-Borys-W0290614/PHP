<?php
session_start();
ob_start();
$db = mysqli_connect("localhost", "root", "inet2005", "test");
if(!$db){
    die ('could not connect to test database ' . mysqli_connect_error());
}
$_SESSION['loginUser'] = "";
if(isset($_POST['loginUser']) && isset($_POST['loginPwd'])){
    $loginUser = $_POST['loginUser'];
    $loginPwd = $_POST['loginPwd'];
    $loginUser = stripslashes($loginUser);
    $loginPwd = stripslashes($loginPwd);
    $loginUser = mysqli_real_escape_string($db, $loginUser);
    $loginPwd = mysqli_real_escape_string($db, $loginPwd);
    $loginPwd = hash("sha512", $loginPwd);
    $sql = "SELECT * FROM accounts WHERE username ='$loginUser'";
    $sql.= " and password = '$loginPwd';";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);
    mysqli_close($db);
    if($count == 1){
        $_SESSION['loginUser'] = $loginUser;
        //HTTP HEADER
        header('location:page1.php');
    }
    else {
        echo "<b> Invalid Login</b><br/>";
        $_SESSION['loginUser'] = "";
        echo "<a href=\"mainLogin.html\">Try Again</a>";
    }
}
ob_end_flush();