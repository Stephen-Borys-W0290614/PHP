<?php
function connectToDatabase(){
    $conn = mysqli_connect("localhost","minAccess", "itCampus2017", "employees");
    if(!$conn){
        echo die ("Could Not Connect " . mysqli_connect_error());
    }
    return $conn;
}