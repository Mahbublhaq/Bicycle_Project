<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<?php  
include("../menu/menu.php")

?>

<div class="container">
    
<h1>Welcome To Login</h1>
<form id="" method="POST">



<label>Email</label><BR>
<input type="email" id="" name="email" required><br><br>

<label>Password</label><BR>
<input type="password" id="" name="password" required><br><br>

<label>Role</label><BR>
<select name="role" id="">
<option value="user">User</option>
<option value="admin">Admin</option>
</select><br><br>

<input type="submit" name="sub"><br>
<h3><a href="*">Forget Password?</a></h3>
<h3><a href="signup.php">SignUp</a></h3>

</form>


<?php
//login for user and Admin and go two different dashbord page 1. userdashbord.php 2. admindashbord.php and print welcome messsage individually for user and admin.And  i have to diffrent database user and admin ,there have no role part






if(isset($_POST['sub']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $conn=mysqli_connect("localhost","root","","bicycle");
    if($role=="user")
    {
        $sql="SELECT * FROM `user` WHERE email='$email' AND password='$password'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            session_start();
              $_SESSION['login']=true;
            $_SESSION['senduser']=$email;
            echo "<script>window.location.href='../view/udashbord.php'</script>";
            echo "<script>window.location.href='../view/uview.php'</script>";
        }
        else
        {
            echo "<script>alert('Email or Password is incorrect')</script>";
        }
    }
    else
    {
        $sql="SELECT * FROM `admin` WHERE email='$email' AND password='$password'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            session_start();
            $_SESSION['login']=true;
            $_SESSION['senduser']=$email;
            echo "<script>window.location.href='../model/adashbord.php'</script>";
            //echo "<script>window.location.href='../view/aview.php'</script>";
        }
        else
        {
            echo "<script>alert('Email or Password is incorrect')</script>";
        }
    }
}

//logout
if(isset($_POST['logout']))
{
    session_start();
    session_destroy();
    echo "<script>window.location.href='../view/login.php'</script>";
}





    
?>
</div>



</body>
<style>
    body{
        background-color: ghostwhite;
        color: white;
        font-family: 'Times New Roman', Times, serif;
    }
    .container{
        width: 600px;
        height: 600px;
        margin-left: 400px;
        margin-top: 20px;
        background-color:  black;
        border-radius: 10px;
    }
    h1{
        text-align: center;
        font-size: 50px;
        font-family: 'Times New Roman', Times, serif;
        color: white;
    }

    label{
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
        color: white;
        margin-left: 100px;
        width: 100px;
        font-weight: bold;

    }
    input{
        width: 300px;
        height: 30px;
        border-radius: 10px;
        margin-left: 100px;
        margin-top: 0px;
    }
    input[type="submit"]{
        width: 100px;
        height: 30px;
        border-radius: 5px;
        margin-left: 200px;
        background-color: greenyellow;
        color: black;
    }
    input[type="submit"]:hover{
        background-color: black;
        color: greenyellow;
    }
    h3{
        float: left;
        margin-left: 80px;
        margin-top: 10px;
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
        color: white;
        font-weight: bold;
        padding: 10px 10px; 
       
      
    

    }
    a{
        color: burlywood;
    }
    h3.hover{
        background-color: black;
        color: greenyellow;
    }
    select{
        width: 300px;
        height: 30px;
        border-radius: 10px;
        margin-left: 100px;
        margin-top: 0px;
    }

  
   

        </style>
        <script>
            //validation form
            function confirm(){
                var name=document.getElementById("name").value;
                var email=document.getElementById("email").value;
                var password=document.getElementById("password").value;
                var nid=document.getElementById("nid").value;
                var phone=document.getElementById("phone").value;
                var address=document.getElementById("address").value;
                if(name==""){
                    alert("name must be filled out");
                    return false;
                }
                if(email==""){
                    alert("email must be filled out");
                    return false;
                }
                if(password==""){
                    alert("password must be filled out");
                    return false;
                }
                
                else{
                    return true;
                }
            }
            document.onkeypress=confirm;
            document.onsubmit=confirm;
            </script>
            

        </script>
</html>
</style>
</html>