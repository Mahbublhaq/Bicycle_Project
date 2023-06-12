<?php
include('../db/database.php');

    ECHO"<SCRIPT>alert('Are You Sure?')</SCRIPT>";
    $sql="select * from message";
    $result=mysqli_query($myconn,$sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
           $name=$row['Name'];
              $email=$row['Email'];
                    $subject=$row['Subject'];
                        $message=$row['Message'];
                        
            $sql="DELETE FROM `message` WHERE `Name`='$name' AND `Email`='$email' AND `Subject`='$subject' AND `Message`='$message'";
            $result=mysqli_query($myconn,$sql);
            if($result){
                echo "<script>alert('Message Deleted')</script>";
            }
            else{
                echo "<script>alert('Message Not Deleted')</script>";
            }
        }
    }
    else{
        echo "<script>alert('Message Not Deleted')</script>";
    }





?>