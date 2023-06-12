<?php
include("../db/database.php");
$id=$_GET['id'];
$sql="select*from confrimbooking where id='$id'";
$result=mysqli_query($myconn,$sql);
while ($myrow=$result->fetch_assoc()){
    $id=$myrow['id'];
    $name=$myrow['name'];
    $phone=$myrow['phone'];
    $address=$myrow['address'];
    $cycle=$myrow['Cycletype'];
    $from=$myrow['From'];
    $to=$myrow['To'];
    $tk=$myrow['Tk'];
    $sqll="Delete from confrimbooking where Name='$name' AND Phone='$phone' AND Address='$address' AND Cycletype='$cycle' AND `From`='$from' AND `To`='$to' AND Tk='$tk' and id='$id'";
    $resultt=mysqli_query($myconn,$sqll);
    if($resultt){
        echo "<script>alert('Booking Deleted')</script>";
        echo "<script>window.location.assign('../view/udashbord.php.php')</script>";
    }
    else{
        echo "<script>alert('Booking Not Deleted')</script>";
    }
    
}



?>