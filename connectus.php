
<!--Connect us Form php -->
<?php
session_start();
header('location:home.php');
$con=mysqli_connect('localhost','root','');
if($con){
    echo "established";
}
else{
    echo "not established";
}
mysqli_select_db($con,'restaurant');
$fname=$_POST['firstName'];
$lname=$_POST['lastName'];
$mail=$_POST['email'];
$phone=$_POST['number'];

$q="INSERT INTO `connectus`(`firstname`,`lastname`,`email`,`contact`,`date`) VALUES('$fname','$lname','$mail','$phone',current_timestamp())";
mysqli_query($con,$q);
?>