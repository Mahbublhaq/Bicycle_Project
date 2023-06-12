<?php
session_start();
if(isset($_SESSION['login']) || $_SESSION['login']==true)
{
    echo "<script>window.location.href='../view/udashbord.php'</script>";
 
}

else
{
    echo "<script>window.location.href='../view/login.php'</script>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcom ToDashBord</title>
    </head>
    <body>
        <div>
        <img src="logo.png" alt="logo"  width="150px", hight="150px">
       </div>
       <h1><?php echo"Welcome  User :".$_SESSION['senduser']; ?></h1>
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
       <h2><?php  include'../menu/menu.php';  ?></h2> 
        <div class="container">
            
         <form method="post" action="../view/uview.php" action="../model/booking.php" ACTION="../model/adashbord.php" >
            <h1>Select Your Destination</h1>
       <label>From</label><BR>
           <select name="form" id="">
          <option value="Mirpur">Mirpur</option>
            <option value="Mirpur-10">Mirpur-10</option>
            <option value="Technical">Technical</option>
            <option value="Gabtoli">Gabtoli</option>
            <option value="Farmgate">Farmgate</option>
            <option value="KaronBazar">KaranBazar</option>

              </select><BR>
                <label>To</label><BR>
              <select name="to" id=""><BR>
            <option value="Mirpur">Mirpur</option>
            <option value="Mirpur-10">Mirpur-10</option>
            <option value="Technical">Technical</option>
            <option value="Gabtoli">Gabtoli</option>
            <option value="Farmgate">Farmgate</option>
            <option value="KaronBazar">KaranBazar</option>
              </select><BR><BR>
             
             
        
                <label>Select Cycle</label><BR>
              <select name="cycle" id=""><BR>
            <option value="Basic">Basic</option>
            <option value="Stander">Stander</option>
            <option value="Premium">Premium</option>
            
              </select><BR><BR>
             
              <input type="submit" name="submit" value="Search" action="onclick" style="background-color: black; color: white; font-size: 20px; font-family: 'Times New Roman', Times, serif; border-radius: 10px; border-color: darkturquoise; width: 100px; height: 40px;">
            
            
            
            
            </form>


            </div> 

            </div> 

                



           
    </body>

    <style>
        body{
        background-color:darkslategray;
        }
    img{
        float: left;
    }
    h1{
        
        text-align: center;
        font-size: 30px;
        font-family: 'Times New Roman', Times, serif;
        margin-top: 10px;
        color: darkturquoise;
    }
    h2{
        text-align: center;
        font-size: 30px;
        font-family: 'Times New Roman', Times, serif;
        margin-top: 5px;
        color: darkturquoise;
        
    }
    .container{
        width: 600px;
        height: 600px;
        margin-left: 400px;
        margin-top: 50px;
        background-color:  black;
        border-radius: 10px;
        border-width: 10px;
        border-color: antiquewhite;
        text-align: center;

    }
    label{
        
        color: white;
        margin-left: 100px;
        width: 100px;
        font-weight: bold;
        margin-top: 10px;

    }
    label, input{
        display: inline-block;
        width: 200px;
        padding: 10px;
        margin-left: 10px;
        margin-top: 30px;
        border-radius: 10px;
        border-color: darkturquoise;
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
        color: white;
        font-weight: bold;
    }

    select{
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
        color: black;
        margin-left: 10px;
        width: 200px;
        font-weight: bold;
        background-color: white;
        border-radius: 10px;
        margin-top: 10px;

    }

    input[type=submit]{
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
        color: white;
        margin-left: 10px;
        width: 100px;
        font-weight: bold;
        background-color: black;
        border-radius: 10px;
        border-color: darkturquoise;
        margin-top: 10px;

    }

    </style>


   
    
</html>



<?php
//click search button for search cycle  and show the result list    for each cycle and show the price and show the booking button for each cycle and show the booking
include '../db/database.php';
if(isset($_POST['submit'])){
    $form=$_POST['from'];
    $to=$_POST['to'];
    $cycle=$_POST['cycle'];
    $sql="SELECT * FROM `booking` WHERE `from`='$form' AND `to`='$to' AND `cycletype`='$cycle'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<div class='container'>";
            echo "<form method='post' action='../view/uview.php'>";
            echo "<label>Form</label>";
            echo "<input type='text' name='form' value='".$row['form']."'><br>";
            echo "<label>To</label>";
            echo "<input type='text' name='to' value='".$row['to']."'><br>";
            echo "<label>Cycle</label>";
            echo "<input type='text' name='cycle' value='".$row['cycle']."'><br>";
            echo "<label>Price</label>";
            echo "<input type='text' name='price' value='".$row['price']."'><br>";
            echo "<input type='submit' name='submit' value='Booking' style='background-color: black; color: white; font-size: 20px; font-family: 'Times New Roman', Times, serif; border-radius: 10px; border-color: darkturquoise; width: 100px; height: 40px;'>";
            echo "</form>";
            echo "</div>";
        }
    }
    else{
        echo "<script>alert('No Cycle Found')</script>";
    }
}










?>