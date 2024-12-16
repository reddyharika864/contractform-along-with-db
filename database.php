<?php
$servername="localhost";
$username="root";
$password="";
$database="contact";  //datadase name
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("error".mysqli_error($con));
}
else{
    echo "<script>alert('database connected')</script>";
}