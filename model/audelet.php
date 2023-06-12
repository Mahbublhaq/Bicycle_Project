<?php
//delete user

include'../db/database.php';
echo"<script>alert('Are You Sure To Delete User')</script>";
$sql="select * from user";
$result=mysqli_query($myconn,$sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $name=$row['Name'];
        $email=$row['Email'];
        $password=$row['Password'];
        $nid=$row['Nid'];
        $phone=$row['Phone'];
        $address=$row['Address'];
        $sql="DELETE FROM `user` WHERE `Name`='$name' AND `Email`='$email' AND `Password`='$password' AND `Nid`='$nid' AND `Phone`='$phone' AND `Address`='$address'";
        $result=mysqli_query($myconn,$sql);
        if($result){
            echo "<script>alert('User Deleted')</script>";
              echo "<script>window.location.assign('../model/adashbord.php')</script>";


        }
        else{
            echo "<script>alert('User Not Deleted')</script>";
        }
    }
}
else{
    echo "<script>alert('User Not Deleted')</script>";
}



?>