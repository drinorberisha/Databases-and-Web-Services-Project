<html> 
    <body>
<?php
$servername = "localhost";
$username = "group19";
$password = "peanutenemy";
$db = "group19";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>


</body>
</html> 