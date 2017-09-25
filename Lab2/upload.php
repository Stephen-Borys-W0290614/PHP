<?php
//Code borrowed fomr w3school
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file_Name = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    echo "<br/>";
    echo "<br/>";
    echo "TMP: ".$target_file;
    echo "<br/>";
    echo "Orig: ".$target_file_Name;
    echo "<br/>";
    echo "File size: ".$check[0];
    echo "<br/>";
    echo "Error: 0";
}
/**had help from friend with code*/
?>