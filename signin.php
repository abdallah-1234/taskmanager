<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "regconection.php";

if(isset($_POST['signin'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        die("Please fill all fields");
    }

    $sql = "SELECT * FROM user WHERE email='$email'";

    $result = $conn->query($sql);

    if(!$result){
        die("Query failed: " . $conn->error);
    }

    if($result->num_rows > 0){

        $row = $result->fetch_assoc();

        if($row['password'] == $password){

            header("Location: learn.php");
             exit();

        } else {
            echo "Wrong password";
        }

    } else {
        echo "Email not found";
    }
}
?>

