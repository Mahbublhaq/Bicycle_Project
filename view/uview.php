<?php
//view booking 

//click search button for search cycle  and show the result list    for each cycle and show the price and show the booking button for each cycle and show the booking
include '../db/database.php';
session_start();

if(isset($_POST['submit'])) {
    $form=$_POST['form'];
    $to=$_POST['to'];
    $cycle=$_POST['cycle'];
    $email=$_SESSION['senduser'];




    $sql = "SELECT * FROM `booking` WHERE `from`='$form' AND `to`='$to' AND `cycletype`='$cycle'";
    $result = mysqli_query($myconn, $sql);
    //add  user namme email and address and phone number from user table

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<h1>Your Booking Information </h1>";
            include_once '../menu/menu.php';
            echo "<table border=1 style='border-color: darkturquoise; background-color:black;margin-left:25%; margin-top:10%; width:60%;height:30%'>";


            echo "<t>";
            echo"<th>NAME</th>";
            echo"<th>ADDRESS</th>";
            echo"<th>PHONE</th>";
            echo "<th>From</th>";
            echo "<th>To</th>";
            echo "<th>Cycle Type</th>";
            echo "<th>Price</th>";
            echo "<th>Booking</th>";
            echo "<th>Update</th>";
            echo "<th>Cancel</th>";


            echo "</tr>";
            echo "<tr>";
            $myqurey = "SELECT * FROM `user`where `Email`='$email'";

            $myresult = mysqli_query($myconn, $myqurey);
            while ($myrow = mysqli_fetch_assoc($myresult)) {



                echo "<tr>";


                echo "<td>" . $myrow['Name'] . "</td>";
                echo "<td>" . $myrow['Address'] . "</td>";
                echo "<td>" . $myrow['Phone'] . "</td>";
                echo "<td>" . $row['from'] . "</td>";
                echo "<td>" . $row['to'] . "</td>";
                echo "<td>" . $row['cycletype'] . "</td>";
                echo "<td>" . $row['tk'] . "</td>";
                 include_once '../db/database.php';
                $mysqll="INSERT INTO confrimbooking (Name,Address,Phone,`From`,`To`,Cycletype,Tk) VALUES ('".$myrow['Name']."','".$myrow['Address']."','".$myrow['Phone']."','".$row['from']."','".$row['to']."','".$row['cycletype']."','".$row['tk']."')";
                $myresultt=mysqli_query($myconn,$mysqll);
                if ($mysqresultt) {
                    echo "<script>alert('Booking Not Confrim')</script>";
                }
                else{

                    echo "<script>alert('Booking Confrim')</script>";
                }  
                echo"<td>Done</td>";
                echo"<td><a href='../model/bookingupdate.php'style= color:white>Update</a></td>";
                echo"<td><a href='../model/udelet.php' style=color:white>Delete Booking </a></td>";
                
               

                echo "</tr>";
                echo "</table>";






            }




        }
    } else {
        echo "<script>alert('No Cycle Found')</script>";
    }


}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking information</title>
</head>
<body>
    
</body>
<style>
body{
    background-color:darkslategray;
    color :white;
}
</style>
</html>