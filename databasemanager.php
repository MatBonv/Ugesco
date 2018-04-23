<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ugesco";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Maak tabel in database (in commentaar als de tabel al is aangemaakt)

// $sql = "CREATE TABLE Photos (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// url VARCHAR(30) NOT NULL,
// place VARCHAR(30) NOT NULL)";
// if (mysqli_query($conn,$sql))
// {
	// echo "Tabel gecreeerd";
// }
// else
// {
	// echo "Error: " . mysqli_error($conn);
	
// }

$url=$_POST['url'];
$place=$_POST['place'];

$sql="INSERT INTO Photos (url, place) VALUES ('$url', '$place')";
if ($conn->query($sql) === TRUE) 
{
    echo "data inserted";
}
else 
{
    echo "failed";
}
mysqli_close($conn);
?>