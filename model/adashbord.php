<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin DashBord</title>
</head>
<body>
    <h1>Welcome To Admin Dashboard</h1>
    <h3><?php session_start();  echo"Admin :".$_SESSION['senduser']; ?></h3>
    <form method="post" >
            <input type="submit" name="logout" value="Logout" style="float: right; margin-right: 10px; margin-top: -50px; background-color: black; color: white; font-size: 20px; font-family: 'Times New Roman', Times, serif; border-radius: 10px; border-color: darkturquoise; width: 100px; height: 40px;">
        </form>
        <?php
        if(isset($_POST['logout'])){
            session_unset();
            session_destroy();
            echo "<script>window.location.href='../view/login.php'</script>";
        }
        ?>
    

    <div class="user">
      <div class="continer">
        <h1>User Details</h1>
        <?php
        include("../db/database.php");
        $sql="SELECT * FROM `user`";
        $result=mysqli_query($myconn,$sql);
        if($result->num_rows>0){
            while($myrow=$result->fetch_assoc()){
                echo"<table border='1' align='center' width='80%'style= float:left;margin-left:20px;margin-top:5px; >";
                $id=$myrow['Id'];
                echo"<tr>";
                 echo "<th>Id</th>";
                echo"<th>Name</th>";
                echo"<th>Email</th>";
                echo"<th>Password</th>";
                echo"<th>NID</th>";
                echo"<th>Phone</th>";
                echo"<th>Address</th>";
                echo"<th>Update</th>";
                echo"<th>Delete</th>";
                echo"</tr>";
                echo "<tr>";
                echo "<td>" . $myrow['Id'] . "</td>";
                echo "<td>" . $myrow['Name'] . "</td>";
                echo "<td>" . $myrow['Email'] . "</td>";
                echo "<td>" . $myrow['Password'] . "</td>";
                echo "<td>" . $myrow['Nid'] . "</td>";
                echo "<td>" . $myrow['Phone'] . "</td>";
                echo "<td>" . $myrow['Address'] . "</td>";
                //create a update button and select id number
                echo "<td><a href='../model/auupdate.php?id=$id'>Update</a></td>";
                
            
                echo "<td><a href='../model/audelet.php'>Delete</a></td>";
                echo "</tr>";
                echo "</table>";
            }
 
    

    
}
        
        else{
            echo"0 result";
        }

        ?>
      </div>
      
    </div>


    <div class="bookingplace">
    
       <h1>Check All Booking Place and Check Right Ammount</h1>
         <?php
            include("../db/database.php");
            $sql="SELECT * FROM `booking`";
            $result=mysqli_query($myconn,$sql);
if($result->num_rows>0) {
    while($row=$result->fetch_assoc()) {
        echo"<table border='1' align='center' width='80%'style= float:left;margin-left:60px;margin-top:5px; >";
   
        echo"<th>From</th>";
        echo"<th>To</th>";
        echo"<th>CycleType</th>";
        echo"<th>Price</th>";
        echo"<th>Available</th>";
        echo"<th>Update</th>";
        echo"<th>Delete</th>";

        echo"</tr>";
        echo "<tr>";
        echo "<td>" . $row['from'] . "</td>";
        echo "<td>" . $row['to'] . "</td>";
        echo "<td>" . $row['cycletype'] . "</td>";
        echo "<td>" . $row['tk'] . "</td>";
        echo "<td>" . $row['available'] . "</td>";
        echo "<td><a href='update.php'>Update</a></td>";
        echo "<td><a href='delete.php'>Delete</a></td>";


        echo "</tr>";
        echo "</table>";
    }
}


        ?>
     




    </div>



    <div class="confrimbooking">
        
    <h1>Confrim Booking LIST CHECK</h1>
    <?php
            include("../db/database.php");
            $sql="SELECT * FROM `confrimbooking`";
            $result=mysqli_query($myconn,$sql);
            if($result->num_rows>0) {
                while($row=$result->fetch_assoc()) {
                    echo"<table border='1' align='center' width='80%'style= float:left;margin-left:60px;margin-top:5px; >";
                    echo"<tr>";
                    echo"<th>Name</th>";
                    echo"<th>Address</th>";
                    echo"<th>Phone</th>";
                    echo"<th>From</th>";
                    echo"<th>To</th>";
                    echo"<th>CycleType</th>";
                    echo"<th>Price</th>";
            
                    echo"<th>Update</th>";
                    echo"<th>Delete</th>";
                
                    echo"</tr>";
                    echo "<tr>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['Phone'] . "</td>";
                    echo "<td>" . $row['From'] . "</td>";
                    echo "<td>" . $row['To'] . "</td>";
                    echo "<td>" . $row['Cycletype'] . "</td>";
                    echo "<td>" . $row['Tk'] . "</td>";
                  
                    echo "<td><a href='update.php'>Update</a></td>";
                    echo "<td><a href='delete.php'>Delete</a></td>";
                
                
                    echo "</tr>";
                    echo "</table>";
                }
            }
?>

    </div>


<div class="message">
<h1>Message Check</h1>

<?php

include '../db/database.php';
$sql="SELECT * FROM `message`";
$result=mysqli_query($myconn,$sql);
if($result->num_rows>0) {
    while($row=$result->fetch_assoc()) {
        echo"<table border='1' align='center' width='80%'style= float:left;margin-left:60px;margin-top:5px; >";

        echo"<th>NAME</th>";
        echo"<th>EMAIL</th>";
        echo"<th>Subject</th>";
        echo"<th>MESSAGE</th>";

        echo"<th>DELETE</th>";

        echo"</tr>";
        echo "<tr>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Subject'] . "</td>";
        echo "<td>" . $row['Message'] . "</td>";
        echo "<td><a href='../view/mdelet.php'>Delete</a></td>";
        
        echo "</tr>";
        echo "</table>";
        //click delete to delete message








    }
}


?>


</div>
  
</body>
<style>
    body{
        background-color: black;
    }
h1{
    text-align: center;
    color: white;
    background-color: darkslategray;
    padding: 20px;
}
h3{
    text-align: center;
    color: white;

   
}
 .user{

    width: 750px;
    height: 500px;
    margin-left: 25%;
    margin-top: 10px;
    background-color:lightslategray;
    border-radius: 10px;
    border-width: 10px;
   border:1px solid red;
    border-color: red;
    text-align: center;
    color:aliceblue;    



 }
.bookingplace{
    width: 750px;
    height: 2000px;
    margin-left: 25%;
    margin-top: 10px;
    background-color:lightslategray;
    border-radius: 10px;
    border-width: 10px;
   border:1px solid red;
    border-color: red;
    text-align: center;
    color:aliceblue;    
}
.confrimbooking{
    width: 750px;
    height: 2200px;
    margin-left: 25%;
    margin-top: 10px;
    background-color:lightslategray;
    border-radius: 10px;
    border-width: 10px;
   border:1px solid red;
    border-color: red;
    text-align: center;
    color:aliceblue;  
}
.message{
    width: 750px;
    height: 500px;
    margin-left: 25%;
    margin-top: 10px;
    background-color:lightslategray;
    border-radius: 10px;
    border-width: 10px;
   border:1px solid red;
    border-color: red;
    text-align: center;
    color:aliceblue;  
}
</style>
</html>


<?php

$name=$_SESSION['senduser'];


?>