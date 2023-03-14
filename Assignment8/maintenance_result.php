<?php
session_start();
?>

<html>
    <body>
         <?php
         $x=$_POST['username'];
         $y=$_POST['password'];
         if ($x=='group19admin' && $y=='BulgariaBorrow'){
            $db = mysqli_connect("localhost", $x, $y, "group19");
            $_SESSION['user'] = "admin";
            header("Location: maintenance1.php");
            exit();
         }
         else
         if($x=='group19' && $y=='peanutenemy'){
            $db = mysqli_connect("localhost", $x, $y, "group19");
            $_SESSION['user'] = "normaluser";
            header("Location: home.html");
            exit();
         }
         else{
            $db = mysqli_connect("localhost", "group19", "peanutenemy", "group19");
            header("Location: error.html"); #rejecting any unauthorized activity.
            exit();
         }
         
         ?>
    </body>

</html>