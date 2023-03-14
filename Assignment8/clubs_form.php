<html>
    <head>
       <title>Clubs Input Results</title>
    </head>  
    
    <body>
         <?php
           $db = mysqli_connect("localhost", "group19", "peanutenemy", "group19");
           if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
         
         $count_query = "SELECT * FROM Clubs";
         $count_result = mysqli_query($db, $count_query);
         $count = mysqli_num_rows($count_result) + 1;
         $query = "INSERT INTO Clubs(club_id, club_name, president) VALUES ('$count', '$_POST[club_name]', '$_POST[president]')";
         if (!mysqli_query($db, $query)){
            die('Error ' . mysqli_error($db));
         }
         echo "One club added";
         ?>
    </body>

</html>