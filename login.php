<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "9374070589";
$dbname = "userdata";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

$username = $_POST['username'];
$password = $_POST['password'];

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT USERNAME,PASSWORD FROM registeredusers WHERE USERNAME = '" . $username . "' && PASSWORD = '" . $password . "'"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	$sql2 = "SELECT * FROM registeredusers";
	$result2 = $conn->query($sql2);
	while($row = $result2->fetch_assoc()) {
        echo " Name: " . $row["NAME"]. " Email: " . $row["EMAIL"]."<br>";
    }
}
else
   echo "Login Unsucessful";
?>