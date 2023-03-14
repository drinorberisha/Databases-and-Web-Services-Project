<html>
    <head>
       <title>Referee-Match relationship Input Results</title>
    </head>  
    
    <body>
         <?php
           $db = mysqli_connect("localhost", "group19", "peanutenemy", "group19");
           if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
        # $quer = mysqli_query($db, "SELECT FROM Referees WHERE player_id='$_POST[Player]'"); 
        # $que = mysqli_query($db, "SELECT FROM Clubs WHERE player_id='$_POST[Club]'"); 
         $query = "INSERT INTO works_in_match(re_id, matc_id) VALUES ('$_POST[Referee]', '$_POST[Match]')";
         if (!mysqli_query($db, $query)){
            die('Error ' . mysqli_error($db));
         }
         echo "1 relationship created succesfully";
         ?>
    </body>

</html>