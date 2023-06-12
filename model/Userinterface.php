<?php
include'../menu/menu.php'
?>
<html>
    <head>
        <title>Enjoy Ride</title>
    </head>
    <body>
        <div class="container">

          <div class="for">
            <form action="post"action="../model/userin.php">
                <h1>User Dashbord</h1>
             <label>From</label><br>
             <input type="text" name="from" value="" placeholder="Enter Your Location"><br><br >

             <label>To</label><br>
             <input type="text" name="to" value=""placeholder="Enter Your Destination"><br><br>

             <label>Cycle Type</label><br>
              <input type="text" name="typr" value=""placeholder="Enter Types Of Cycle"><br><br>

              <input type="submit" value="Booking" onclick=" return confirm();"><br>
            



             

            </form>

          </div>
            
          
            
        </div>
    </body>
      <style>
      .container{
        width:400px;
        height: 400px;
        margin-left: 25%;
        margin-top: 5%;
        color: black;
        text-align: center;

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
    label{
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
        color: white;
        margin-left: 100px;
     
        
        width: 100px;
        font-weight: bold;

    }
      </style>
</html>
