<?php
 session_start();
 ?>

 <html>
    <body>
        <?php
        $_SESSION["favcolor"] = "Green";
        $_SESSION["favanimal"] = "Cat";
        echo "session variables are set";
        ?>
    </body>
 </html>