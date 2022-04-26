<?php
session_start();
?>
<!DOCTYPE html>
<h1> Login page </h1>

<style>

</style>
<body>
<form action='LoginPage.php' method='POST'>
        First Name: <input type='text' name='firstName'>
        </br>
        Last Name: <input type='text' name='lastName'>
        </br>
        <input type='submit' name='submit' value='Log in'>
    </form>
<?php
    if (isset($_POST['submit'])) { 
            $firstName=$_POST['firstName'];
            $lastName=$_POST['lastName'];
             if (($firstName=='Mikhail')&& ($lastName=="Hanemann")) {
                header("Location: Welcome.php");
              }
             else {
                 echo "Name is not correct! " ."<br>";
             }
           }
?>

</body>
</html>


