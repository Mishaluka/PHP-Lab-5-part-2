<?php
session_start();
?>

<html>
    <body>

        <?php
        $_SESSION["firstName"] = "Mikhail";
        $_SESSION["lastName"] = "Hanemann";
        echo "Welcome!" ."<br>";
        

        if (isset($_SESSION["firstName"]) && isset($_SESSION["lastName"])){
            echo "First Name: " . $_SESSION["firstName"] .".<br>";
            echo "Last Name: " . $_SESSION["lastName"]. ".";
            echo "<br>";
        }
        else "Session are not set!";
        ?>
        <a href="LoginPage.php"> Go back to home page.</a>
    </body>
</html>