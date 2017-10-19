<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 function checkIfLoggedIn()
 {
    session_start();
    if(empty($_SESSION['LoginUser'])) // || empty($_SESSION['LoginPwd']))
    {
        header("location:mainLogin.html");
    }
 }
?>
