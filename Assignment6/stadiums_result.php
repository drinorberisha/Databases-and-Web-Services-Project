<html>
    <head>
       <title>Stadiums Input Results</title>
    </head>  
    
    <body>
         <?php
           $db = mysqli_connect("localhost", "group19", "peanutenemy", "group19");
           if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
         
         $count_query = "SELECT * FROM Stadiums";
         $count_result = mysqli_query($db, $count_query);
         $count = mysqli_num_rows($count_result) + 1;
         $query = "INSERT INTO Stadiums(stadium_id, stadium_name, capacity) VALUES ('$count', '$_POST[stadium_name]', '$_POST[capacity]')";
         if (!mysqli_query($db, $query)){
            die('Error ' . mysqli_error($db));
         }
         echo "One stadium added";
         ?>
    </body>

</html>