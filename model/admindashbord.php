<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>
</head>
<body>
    <h1>Welcome to Admin Dashbord</h1>
     <!--Left Sidebar-->
     <div class="sidebar">
             <!--inner link create-->
                <ul>
                    <li><a href="admindashbord.php">Dashbord</a></li>

                    
                    <button class="dropbtn">User List
                       <i class="userlist"></i>
                     </button>
                        <div class="dropdown-content">
                        <a href="userlist.php">User List</a>
                        <a href="adduser.php">Add User</a>
                        <a herf="#">Delete User</a>
                        <a herf="#">Update User</a>
                        </div>

               

               
     
        
     </div>




         

    <div class="continer1">
       
       
        
    </div>


    <div>
        
    </div >




    <div>
        
    </div>



    <div>
        
    </div>


</body>
<style>
.continer1{
    width: 100px;
    height: 100px;
    float: left;
    background-color: crimson;
    color:black;

    

}
h1{
    text-align: center;
    background-color: darkslategray;
    color: white;
    width: 100%;
    height: 60px;
    margin-top: 0px;
    padding-top: 10px;
    font-size: 30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    
}


ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: black !important;
    color: white;
    position: fixed;
    height: 100%;
    overflow: auto;
    text-align: center;


}
a{
    display: block;
    color: white !important;
    padding: 8px 16px;
    text-decoration: none;

}
a:hover{
    background-color: #555;
    color: white;
}
.sidebar{
    margin-top: 60px;
    width: 200px;
    height: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: black;
    overflow-x: hidden;
    padding-top: 20px;
    text-align: center;
}


</style>
</html>