<?php



?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <!-- RIGHT SIDE MENU -->
    <div id="menu">
        <ul>
            <li><a href="..\view\index.php">Home</a></li>
            <li><a href="..\view\about.php">About</a></li>
            <li><a href="..\view\service.php">Services</a></li>
            <li><a href="..\view\contact.php">Contact</a></li>
        </ul>
    </div>

    </body>
    <style>
        #menu {
            float: right;
            margin-top: 20px;
            font-size: 25px;
        }
        #menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        #menu ul li {
            display: inline-block;
        }
        #menu ul li a {
            text-decoration: none;
            color: #000;
            padding: 5px 20px;
            float: left;
        }
        #menu ul li a:hover {
            background-color:black;
            color: cornsilk;
        }
        


</style>


</html>