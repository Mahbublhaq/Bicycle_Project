<?php
include('../db/database.php');
if (isset($_POST['subm'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $sql="INSERT INTO `message`(`Name`, `Email`, `Subject`, `Message`) VALUES ('$name','$email','$subject','$message')";
    $result=mysqli_query($myconn,$sql);
    if($result){
        echo "<script>alert('Message Send')</script>";
    }
    else{
        echo "<script>alert('Message Not Send')</script>";
    }


}


?>