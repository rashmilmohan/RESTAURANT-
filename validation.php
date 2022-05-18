<?php
session_start();
$con=mysqli_connect('localhost','root','');
if($con){
    echo "established";
}
else{
    echo "not established";
}
mysqli_select_db($con,'restaurant');

$mail=$_POST['email'];
$pass=$_POST['password'];




$qy="SELECT * FROM `signup` WHERE email='$mail' && password='$pass'";

$result=mysqli_query($con,$qy);
$num=mysqli_num_rows($result);

if($num==1){
    $q="INSERT INTO `login`(`email`,`password`,`entry`) VALUES('$mail','$pass',current_timestamp())";
    mysqli_query($con,$q);
    $_SESSION['useremail']=$mail;
    header('location:home.php');
}
else{
    Print '<script>alert("Incorrect Password")</script>';
    header('location:login.php');
}


?>