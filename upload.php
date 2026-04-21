<?php

$target_dir = "uploads/";

if(isset($_POST["submit"]) && isset($_FILES["fileToUpload"])) {

    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {

        echo "File is an image - " . $check["mime"] . "<br>";

        // MOVE FILE TO UPLOADS FOLDER
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Upload successful!";
        } else {
            echo "Upload failed!";
        }

    } else {
        echo "File is not an image";
    }

} else {
    echo "No file selected or form not submitted";
}
?>