<html>
    <head>
       <title>Players Input Results</title>
    </head>  
    
    <body>
         <?php
           $db = mysqli_connect("localhost", "group19", "peanutenemy", "group19");
           if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
         
         $count_query = "SELECT * FROM Players";
         $count_result = mysqli_query($db, $count_query);
         $count = mysqli_num_rows($count_result) + 1;
         $query = "INSERT INTO Players(player_id, player_name, age, salary, foot, goals_scored) VALUES ('$count', '$_POST[player_name]', '$_POST[age]', '$_POST[salary]', '$_POST[foot]', '$_POST[goals_scored]')";
         if (!mysqli_query($db, $query)){
            die('Error ' . mysqli_error($db));
         }
         echo "One player added";
         ?>
    </body>

</html>