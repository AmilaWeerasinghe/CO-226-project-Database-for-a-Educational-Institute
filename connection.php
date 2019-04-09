<?php

    $con=mysqli_connect('localhost','root','','educationalnstitute');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>