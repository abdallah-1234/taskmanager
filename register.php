<?php
include "regconection.php";

if(isset($_POST['signup'])){

    $email = $_POST['email'];
    $password = $_POST['password'];


    if(empty($email) || empty($password)){
        echo "Please fill all fields";
    }


    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid email";
    }

    elseif(strlen($password) < 6){
        echo "Password must be at least 6 characters";
    }

    else{

        $sql = "INSERT INTO user (email, password)
                VALUES('$email', '$password')";

        if(mysqli_query($conn, $sql)){

            header("Location: learn.php");
            exit();

        } else {
            echo "Signup failed";
        }
    }
}
?>