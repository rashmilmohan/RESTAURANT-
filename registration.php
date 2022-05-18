<?php
session_start();
header('location:login.php');

$con=mysqli_connect('localhost','root','');
if($con){
    echo "established";
}
else{
    echo "not established";
}
mysqli_select_db($con,'restaurant');
$uname=$_POST['username'];
$phone=$_POST['contact'];
$mail=$_POST['email'];
$pass=$_POST['password'];
$passr=$_POST['confirm_password'];

if($pass==$passr)
{
    $qy="SELECT * FROM `signup` WHERE email='$mail' && password='$pass'";
    $result=mysqli_query($con,$qy);
    if(!$result->num_rows > 0){
        $q="INSERT INTO `signup`(`email`,`contact`,`password`,`created`) VALUES ('$mail','$phone','$pass',current_timestamp())";
        mysqli_query($con,$q);
        
 
    }
    else{
        echo "<script>alert('Woops! Email Already Exists.')</script>";
   
    }
}
else{
    echo "<script>alert('Password do not match')</script>";
}


?>