<?php

?>
<html>
<head>
<title>signup</title>
</head>
<body>
<?php  
include("../menu/menu.php")

?>

<div class="container">
    
<h1>Welcome To SignUp</h1>
<form id="" method="POST" action="../model/userinsert.php"action="..model/booking.php" acction="../model/bookingupdate.php">
<label>Name</label><BR><BR>
<input type="text" id="" name="name" required><br>

<label>Email</label><BR><BR>
<input type="email" id="" name="email" required><br>

<label>Password</label><BR><BR>
<input type="password" id="" name="password" required><br>

<label>Nid</label><BR><BR>
<input type="text" id="" name="nid" required><br>

<label>Phone</label><BR><BR>
<input type="text" id="" name="phone" required><br>


<label>Address</label><BR><BR>
<input type="text" id="" name="address" required><br><BR>
<input type="submit" name="submit"value="SignUp" onclick=" return confirm();"><br>
<h3><a href="login.php">Login</a></h3>


</form>
</div>



</body>
<style>
    body{
        background-color: ghostwhite;
        color: white;
        font-family: 'Times New Roman', Times, serif;
    }
    h3{
        text-align: center;
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
        margin-left: 60%;
        font-size: 20px;
        margin-top: 0px;
    }
    a{
        color:  burlywood;
    }
    .container{
        width: 550px;
        height: 650px;
        margin-left: 400px;
        margin-top: 20px;
        background-color: black;
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
        border-radius: 5px;
        margin-left: 100px;
    }
    input[type="submit"]{
        width: 100px;
        height: 30px;
        border-radius: 5px;
        margin-left: 200px;
        background-color: greenyellow;
        color: black;
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
                if(nid==""){
                    alert("nid must be filled out");
                    return false;
                }
                if(phone==""){
                    alert("phone must be filled out");
                    return false;
                }
                if(address==""){
                    alert("address must be filled out");
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