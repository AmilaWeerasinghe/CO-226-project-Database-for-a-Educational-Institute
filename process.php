<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
        $message = "wrong answer";
        echo "<script type='text/javascript'>alert('$message');</script>";
       }
       else
       {
            $query="select * from users where username='".$_POST['UName']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:home.html");
            }
            else
            {
                
                $message = "wrong answer";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("location:index.html?Invalid= Please Enter Correct User Name and Password ");

            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>