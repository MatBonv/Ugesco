<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "namen";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn)
{
	die("Connection failed: <br>" . mysqli_connect_error());
}
else 
{
	echo "Connection Successful <br>";
}

//Maak tabel in database (in commentaar als de tabel al is aangemaakt)

// $sql = "CREATE TABLE Persons (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// age INT(100),
// hometown VARCHAR(30) NOT NULL,
// job VARCHAR(30) NOT NULL)";
// if (mysqli_query($conn,$sql))
// {
	// echo "Tabel gecreeerd";
// }
// else
// {
	// echo "Error: " . mysqli_error($conn);
	
// }

//Maak data aan in de tabel (in commentaar als de data al is aangemaakt)

// $sql = "INSERT INTO Persons (firstname, lastname, age, hometown, job)
// VALUES ('Peter', 'Griffin', '41', 'Quahog', 'Brewery');";
// $sql .= "INSERT INTO Persons (firstname, lastname, age, hometown, job)
// VALUES ('Lois', 'Griffin', '40', 'Newport', 'Teacher');";
// $sql .= "INSERT INTO Persons (firstname, lastname, age, hometown, job)
// VALUES ('Joseph', 'Swanson', '39', 'Quahog', 'Officer')";
// $sql .= "INSERT INTO Persons (firstname, lastname, age, hometown, job)
// VALUES ('Glenn', 'Quagmire', '41', 'Quahog', 'Pilot')";
// if (mysqli_multi_query($conn, $sql))
// {
	// echo "Records gecreeerd <br>";
// }
// else
// {
	// echo "Error" . $sql . '<br>' . mysqli_error($conn);
// }

$sql="SELECT * FROM Persons WHERE id = '".$q."'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['hometown'] . "</td>";
    echo "<td>" . $row['job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>
