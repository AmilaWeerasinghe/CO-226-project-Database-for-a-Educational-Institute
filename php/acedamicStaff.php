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
    <h1>Acedamic Staff details</h1>
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

$sql = "SELECT id,name,subject,language FROM acedamic";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID no</th><th>Name</th><th>Subject</th><th>Language can teach</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["subject"]. "</td><td>" . $row["language"]. "</td></tr>";
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