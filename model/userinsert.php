<?php
include_once '../db/database.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$nid=$_POST['nid'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$sql="INSERT INTO `user`(`name`, `email`, `password`, `nid`, `phone`, `address`) VALUES ('$name','$email','$password','$nid','$phone','$address')";
if(mysqli_query($myconn,$sql))
{
    echo"Data Inserted Successfully<p Style='color:Green'>Click here to <a href='../view/login.php'>Login</a></p>";
}
else
{
    echo mysqli_error($myconn);
}

?>