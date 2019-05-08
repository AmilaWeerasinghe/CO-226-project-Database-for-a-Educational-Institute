<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="content">
    <h1>Student details</h1>
   </div>
  </div>
  <div class="container">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "educationalnstitute";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT hallNumber, seats,air,night FROM class";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Hall ID</th><th>No of seats</th><th>A/C availabe</th><th>Night Facility vailabe</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["hallNumber"]. "</td><td>" . $row["seats"]. "</td><td>" . $row["air"]. "</td><td>" . $row["night"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
  </div>
</body>
</html>