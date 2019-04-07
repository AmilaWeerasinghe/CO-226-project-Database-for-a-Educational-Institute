<?php 
require "conn.php";
$name = $_POST["Name"];
$Address =$_POST["Address"];
$password =$_POST["Password"];
$mysql_qry = "insert into testData(name,address,password) values('$name','$Address',$password')";
 
if($conn->query($mysql_qry)==TRUE) {
echo "Insert Successful";
}
else {
echo "Error".mysql_qry."<br>".$conn->error;
}
 $conn->close();
?>