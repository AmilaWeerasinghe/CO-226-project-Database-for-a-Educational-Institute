<?php
session_start();
$_SESSION['message'] = '';
$mysqli=new mysqli('localhost','root','','educationalnstitute');

if($_SERVER['REQUEST_METHOD']=='POST'){

    if($_POST['password']==$_POST['confirmpassword']){
        $name= $mysqli->real_escape_string($_POST['name']);
        $username= $mysqli->real_escape_string($_POST['username']);
        $email= $mysqli->real_escape_string($_POST['email']);
        $password=$mysqli->real_escape_string($_POST['password']);
        $subject= $mysqli->real_escape_string($_POST['subject']);
        $telephone= $mysqli->real_escape_string($_POST['telephone']);
        
        $_SESSION['username']=$username;

        $sql="INSERT INTO teacher (name,username,password,email,subject,telephone)"."VALUES('$name',,'$username','$password','$email','$subject','$telephone')";

        if($mysqli->query($sql)==true){
            $_SESSION['message']="Registrstion success $username!";
            header("location:home.html");
        }
        else{
            $_SESSION['message']="Could not load to database!";

        }



    }
    else{
        $_SESSION['message']=" Passwords don't match!";

    }
}


?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="Teacherform.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create a Teacher account</h1>
    <form class="form" action="TeacherForm.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="Subject" name="subject" required />
      <input type="text" placeholder="Telephone" name="telephone" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      
    </form>
  </div>
</div>