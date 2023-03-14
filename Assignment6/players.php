<html>
    <head>
       <title>Results of the search</title>
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

           $var = $_GET['data'];

           $result = mysqli_query($db, "SELECT * FROM Players WHERE player_name='$var'");


           while($row = mysqli_fetch_array($result))
           {
            echo "Player " . $row['player_name'] . " is " . $row['age'] . " years old, his salary is " . $row['salary'] . " millions of euro per year, his working foot is " . $row['foot'] . " and he has scored " . $row['goals_scored'] . " goals.";
           echo "<br />";
           }

         ?>
    </body>

</html>