
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Educational Institute</title>
<script language="javascript" type="text/javascript">
  alert("Student details Page")
  </script>
  <style>
      table, th, td {
          border: 1px solid black;
      }
      </style>
      </head>
</head>

<body>
  <p>Select any color you want this page to be</p>
        <p>[<a href="/"
            onmouseover="document.bgColor='green'">Green</a>]
            [<a href="/"
            onmouseover="document.bgColor='greem'">Bright Green</a>]
            [<a href="/"
            onmouseover="document.bgColor='seagreen'">Sea Green</a>]
            [<a href="/"
            onmouseover="document.bgColor='red'">Red</a>]
            [<a href="/"
            onmouseover="document.bgColor='magenta'">Magenta</a>]
            [<a href="/"
            onmouseover="document.bgColor='fusia'">Fusia</a>]
            [<a href="/"
            onmouseover="document.bgColor='pink'">Pink</a>]
            [<a href="/"
            onmouseover="document.bgColor='purple'">Purple</a>]
            [<a href="/"
            onmouseover="document.bgColor='navy'">Navy</a>]
            [<a href="/"
            onmouseover="document.bgColor='blue'">Blue</a>]
            [<a href="/"
            onmouseover="document.bgColor='royalblue'">Royal Blue</a>]
            [<a href="/"
            onmouseover="document.bgColor='Skyblue'">Sky Blue</a>]
            [<a href="/"
            onmouseover="document.bgColor='yellow'">Yellow</a>]
            [<a href="/"
            onmouseover="document.bgColor='brown'">Brown</a>]
            [<a href="/"
            onmouseover="document.bgColor='almond'">Almond</a>]
            [<a href="/"
            onmouseover="document.bgColor='white'">White</a>]
            [<a href="/"
            onmouseover="document.bgColor='black'">Black</a>]
            [<a href="/"
            onmouseover="document.bgColor='coral'">Coral</a>]
            [<a href="/"
            onmouseover="document.bgColor='olivedrab'">Olive Drab</a>]
            [<a href="/"
            onmouseover="document.bgColor='orange'">Orange</a>]
            <hr color="#00FFFF">

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

$sql = "SELECT id, username,email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Username</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>" . $row["email"]. "</td></tr>";
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