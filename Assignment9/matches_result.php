<html>
    <head>
       <title>Matches Input Results</title>
    </head>  
    
    <body>
         <?php
           $db = mysqli_connect("localhost", "group19", "peanutenemy", "group19");
           if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
         
         $count_query = "SELECT * FROM Matches";
         $count_result = mysqli_query($db, $count_query);
         $count = mysqli_num_rows($count_result) + 1;
         $query = "INSERT INTO Matches(match_id, name_of_teams) VALUES ('$count', '$_POST[name_of_teams]')";
         if (!mysqli_query($db, $query)){
            die('Error ' . mysqli_error($db));
         }
         echo "One match added";
         ?>
    </body>

</html>