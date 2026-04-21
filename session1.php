<?php
session_start();
?>

<html>
    <body>
        <?php
        if(isset($_SESSION["favcolor"])){
            echo "your favourite color is: " . $_SESSION["favcolor"] . "<br>";
            echo "your favourite animal is: " . $_SESSION["favanimal"] . "";
        } else{
            echo "no session data found";
        }

        print_r($_SESSION);
        ?>
    </body>
</html>