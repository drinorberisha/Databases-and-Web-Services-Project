<html>
    <head>
       <title>Player-Match relationship Input</title>
    </head>  
    
    <body>
         <?php
           $db = mysqli_connect("localhost", "group19", "peanutenemy", "group19");
           if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
         ?>
    <form action = "scored_in_result.php" method = "post">

        <select name="Player">
          <?php
           $result = mysqli_query($db, "SELECT * FROM Players");
           while ($row = mysqli_fetch_array($result)){
            echo "<option value='" . $row['player_id'] . "'>" . $row['player_name'] .  "</option>\n";
           }
          ?>
        </select>

        <select name="Match">
          <?php
           $result = mysqli_query($db, "SELECT * FROM Matches");
           while ($row = mysqli_fetch_array($result)){
            echo "<option value='" . $row['match_id'] . "'>" . $row['name_of_teams'] .  "</option>\n";
           }
          ?>
        </select>
        <input type = "submit" value = "Submit">
      </form>
        
         
    </body>

</html>