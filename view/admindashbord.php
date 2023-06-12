<?php
session_start();
if(isset($_SESSION['login']) || $_SESSION['login']==true)
{
    echo "<script>window.location.href='../view/admindashbord.php'</script>";
 
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
        <h1><?php echo"Welcome Admin :-".$_SESSION['senduser']; ?></h1>
       
    </body>
    <style>
    h1{
        text-align: center;
        font-size: 50px;
        font-family: 'Times New Roman', Times, serif;
        margin-top: 10px;
        color: darkturquoise;
    }
    </style>
</html>