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

$username=$_POST['adminuser'];
$pass=$_POST['password'];




$qy="SELECT * FROM `admin` WHERE adminname='$username' && pass='$pass'";

$result=mysqli_query($con,$qy);

if(!$result->num_rows > 0){
   
    header('location:adminlog.php');
}
else{
    Print '<script>alert("Incorrect Password")</script>';
    header('location:admin.php');
}


?>