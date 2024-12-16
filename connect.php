<?php
include 'database.php';

if(isset($_POST['submit']))
{
    $name = $_POST['username'];
    $email = $_POST['email'];
    $file = $_POST['file'];
    $insert_query = "INSERT INTO contact (username, email,file) VALUES ('$name','$email','$file')";  //tablename
    if(mysqli_query($con, $insert_query)) {
        echo "<script>alert('User registered successfully')</script>";
        header("location:sample.html"); // Redirect to login page
        exit;
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>