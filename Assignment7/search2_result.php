<html>
    <head>
       <title>Results of the second search</title>
    </head>  

    
    
    <body>
         <?php
          ini_set('display_errors', '1');
          ini_set('display_startup_errors', '1');
          error_reporting(E_ALL);
           $db = mysqli_connect("localhost", "group19", "peanutenemy", "group19");
           if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }

           $result = mysqli_query($db, "SELECT * FROM Players WHERE salary>='$_POST[salary]'");

           if (mysqli_num_rows($result)==0){
            echo "Table is empty";
           }

           while($row = mysqli_fetch_array($result))
           {
            $var = $row['player_name']; ?>
            <a href="players.php?data=<?=$var?>"> <?php echo $row['player_name'];
           echo "<br />";
           }

           if (!mysqli_query($db, "SELECT * FROM Players WHERE salary>='$_POST[salary]'")){
            die('Error ' . mysqli_error($db));
         }
         ?>
    </body>

</html>