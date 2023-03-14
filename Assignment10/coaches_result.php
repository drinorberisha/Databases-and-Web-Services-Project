<html>
    <head>
       <title>Coaches Input Results</title>
    </head>  
    
    <body>
         <?php
           $db = mysqli_connect("localhost", "group19", "peanutenemy", "group19");
           if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
         
         $count_query = "SELECT * FROM Coaches";
         $count_result = mysqli_query($db, $count_query);
         $count = mysqli_num_rows($count_result) + 1;
         $query = "INSERT INTO Coaches(coach_id, coach_name, age) VALUES ('$count', '$_POST[coach_name]', '$_POST[age]')";
         if (!mysqli_query($db, $query)){
            die('Error ' . mysqli_error($db));
         }
         echo "One coach added";
         ?>
    </body>

</html>