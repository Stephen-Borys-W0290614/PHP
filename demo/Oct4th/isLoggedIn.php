<?php
function checkIfLoggedIn(){
    session_start();
    if(empty($_SESSION['LoginUser'])){
        header("location:mainLogin.html");
    }
}
?>