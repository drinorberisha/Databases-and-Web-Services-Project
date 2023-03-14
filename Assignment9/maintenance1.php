<?php
session_start();
?>

<!DOCTYPE html>
<html>


    <?php
    if ( $_SESSION['user']!='admin') { #only admin has acces to this page
		header("Location: home.html");
		exit;
	}
    
    ?>
    

<a href = "players_form.html"> Add a player</a>
<a href = "clubs_form.html"> Add a club</a>
<a href = "coaches_form.html"> Add a coach</a>
<a href = "referees_form.html"> Add a referee</a>
<a href = "matches_form.html"> Add a match</a>
<a href = "stadiums_form.html"> Add a stadium</a>

<a href = "plays_in.php"> Add a player-club relationship</a>
<a href = "scored_in.php"> Add a player-match relationship</a>
<a href = "match_at_stadium.php"> Add a match-stadium relationship</a>
<a href = "works_in_match.php"> Add a referee-match relationship</a>


</body>
</html>