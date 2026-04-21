<?php
$cookie_name = "username";
$cookie_value = "abdallah";

setcookie($cookie_name, $cookie_value, time() + (86000 * 30), "/");
?>

<html>
    <head></head>
    <body>
       <?php
        if(isset($_COOKIE[$cookie_name])){
            echo "cookie: " . $cookie_name . "is set! <br>";
            echo "value is: " . $_COOKIE[$cookie_name]; 
        } else {
            echo "cookie name" . $cookie_name . "is not set";
        }
        ?>
    </body>
</html>