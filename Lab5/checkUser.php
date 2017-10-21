<?php
require("dbconn2.php");
require 'isLoggedIn.php';
checkIfLoggedIn();
session_start();
ob_start();
// Create connection
$conn = connectToDatabase();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['loginUser']) && isset($_POST['loginPwd'])){
    $loginUser = $_POST['loginUser'];
    $loginPwd = $_POST['loginPwd'];
    $loginUser = stripslashes($loginUser);
    $loginPwd = stripslashes($loginPwd);
    $loginUser = mysqli_real_escape_string($conn, $loginUser);
    $loginPwd = mysqli_real_escape_string($conn, $loginPwd);
    $sql = "SELECT * FROM accounts WHERE username ='$loginUser';";
    //$sql.= " and password = '$loginPwd';";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);


    if($count == 1){

        //HTTP HEADER
        echo "<b> User already created</b><br/>";
        //header('location:mainLogin.html');
        echo ">Try Again</a>";

    } else {
        $sql2 = "INSERT INTO accounts (username, password) VALUES ('$loginUser', sha2('$loginPwd', 512))";

        echo "<a>User Created</a><br/>";

        if ($conn->query($sql2) === TRUE) {
            echo "Affected rows: " . mysqli_affected_rows($conn);
            echo "<a href=\"mainLogin.html\">Go Back to Login</a>";

        } else {
            echo "Error: " . $sql2 . "<br>" . $conn->error;
        }

    }
    mysqli_close($db);}



    else {

       /* $loginUser = $_POST['loginUser'];
        $loginPwd = $_POST['loginPwd'];
        $loginUser = stripslashes($loginUser);
        $loginPwd = stripslashes($loginPwd);
        $loginUser = mysqli_real_escape_string($conn, $loginUser);
        $loginPwd = mysqli_real_escape_string($conn, $loginPwd);
        $sql = "INSERT INTO members(username,password) VALUES ('$loginUser', '$loginPwd')";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);


        if ($conn->query($sql) === TRUE) {
            echo "Affected rows: " . mysqli_affected_rows($conn) ;
            //HTTP HEADER
            echo "<b> New User Added</b><br/>";
            //header('location:mainLogin.html');
            echo "<a href=\"mainLogin.html\">Try Again</a>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        mysqli_close($db);*/


}
ob_end_flush();