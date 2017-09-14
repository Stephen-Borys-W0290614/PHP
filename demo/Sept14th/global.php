<?php
global $myGlobal;
function myFunction(){
    $myGlobal = "1234";
    echo "The global value is $myGlobal<br/>";
}
myFunction();

global $myGlobal;
$myGlobal = "1234";
function myFunction1(){
    global $myGlobal;
    echo "The global value is $myGlobal<br/>";
}
myFunction1();
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 9/14/17
 * Time: 11:39 AM
 */