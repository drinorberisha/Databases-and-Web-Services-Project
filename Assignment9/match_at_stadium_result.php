<html>
    <head>
       <title>Match-Stadium relationship Input Results</title>
    </head>  
    
    <body>
         <?php
           $db = mysqli_connect("localhost", "group19", "peanutenemy", "group19");
           if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
        # $quer = mysqli_query($db, "SELECT FROM Players WHERE player_id='$_POST[Player]'"); 
        # $que = mysqli_query($db, "SELECT FROM Clubs WHERE player_id='$_POST[Club]'"); 
         $query = "INSERT INTO match_at_stadium(m_id, stadiu_id) VALUES ('$_POST[Match]', '$_POST[Stadium]')";
         if (!mysqli_query($db, $query)){
            die('Error ' . mysqli_error($db));
         }
         echo "1 relationship created succesfully";
         ?>
    </body>

</html>