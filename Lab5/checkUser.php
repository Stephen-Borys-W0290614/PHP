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

            require_once('recaptchalib.php');
            $privatekey = "6LdgRukSAAAAALRpNeav3t26O_M8l2HHKFqN-IIR";
            $resp = recaptcha_check_answer ($privatekey,
                $_SERVER["REMOTE_ADDR"],
                $_POST["recaptcha_challenge_field"],
                $_POST["recaptcha_response_field"]);


if (!$resp->is_valid)
{
    // What happens when the CAPTCHA was entered incorrectly
    echo "<h1>Incorrect Captcha entry.Try again?</h1>";
    echo "<a href='createUser2.php'>Back to New User Form</a>";
}
else {


    if (isset($_POST['loginUser']) && isset($_POST['loginPwd'])) {
        $loginUser = $_POST['loginUser'];
        $loginPwd = $_POST['loginPwd'];
        $loginUser = stripslashes($loginUser);
        $loginPwd = stripslashes($loginPwd);
        $loginUser = mysqli_real_escape_string($conn, $loginUser);
        $loginPwd = mysqli_real_escape_string($conn, $loginPwd);
        //----CODE BLOCK START-----
        $unixSeconds = time();
        $loginSeconds = substr($loginUser, 0,16 - strlen($unixSeconds));
        $userSalt = $loginSeconds . $unixSeconds;
        //This code was to make a unique salt for users
        $cryptPre = '$6$rounds=5000$' . $userSalt . '$';
        $passwordHashPre = crypt($loginPwd, $cryptPre);
        $cryptPreEscape = '\$6\$rounds=5000\$' . $userSalt .'\$';
        $passwordHash = preg_replace('/^' . $cryptPreEscape . '/', '',$passwordHashPre);
        $sql = "SELECT * FROM WebUsers WHERE user_name ='$loginUser';";
        //$sql.= " and password = '$loginPwd';";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);


        if ($count == 1) {

            //HTTP HEADER
            echo "<b> User already created</b><br/>";
            //header('location:mainLogin.html');
            echo ">Try Again</a>";

        } else {
            $sql2 = "INSERT INTO WebUsers (user_name, user_pwd, salt) VALUES ('$loginUser', sha2('$loginPwd', 512), '$userSalt')";

            echo "<a>User Created</a><br/>";

            if ($conn->query($sql2) === TRUE) {
                echo "Affected rows: " . mysqli_affected_rows($conn);
                echo "<a href=\"mainLogin.html\">Go Back to Login</a>";
                //die("Unable to create user: " . mysqli_error($conn));


            } else {
                //echo "Error: " . $sql2 . "<br>" . $conn->error;
                die("Unable to create user: " . mysqli_error($conn));
                echo "<a href=\"mainLogin.html\">Go Back to Login</a>";


            }

        }
        mysqli_close($db);
    }


}
ob_end_flush();