<?php
function connectToDatabase(){
    $conn = mysqli_connect("localhost","root", "inet2005", "sakila");
    if(!$conn){
        echo die ("Could Not Connect " . mysqli_connect_error());
    }
    return $conn;
}