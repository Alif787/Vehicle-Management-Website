<?php

include("../Admin_control/process.php");

?>

<html >

    <title>Admin HomePage</title>

<body>
    
<form action="" method="POST">
    <fieldset>
        <fieldset>
            <h2 align="center">BD vehicle service center</h2>
            <h4 align="center">Grab The Best Vehicle Service For Your Vehicle</h4>
        </fieldset>
        <fieldset>
    <p>
    | <a href="../Admin_View/Employee_info.php">Contact with Employee</a>
    | <a href="../Admin_View/Manager_info.php">Contact with Manager</a>
    | <a href="https://github.com/Alif787">Admin Panel</a>
    | <a href="BD vehicle service center.php">About us</a>
    | <a href="../Admin_control/Admin_logout.php">Logout</a>
    
 </p>
 </fieldset>
 
        <fieldset>
            
        </fieldset>
    </fieldset>
    <br><br><br>
   
<center>

 
        <img src="../images/privatecar.jpg" srcset="" width="40%"><br> 
        <a href='../Admin_View/Private_Car_Service.php'> <b>Private Car Service</b>
        <br><br>
</a>
<b>Servicing Type<br></b>
        <input type="radio" name="servicetype" value="Premium" >Premium
        <br>
        <input type="radio" name="servicetype" value="Normal">Normal
    <br><br>


        <img src="../images/bike.jpg" srcset="" width="40%"><br>
        <a href='../Admin_View/Bike_Service.php'> <b>Bike Service</b>
        <br><br>
</a>
<b>Servicing Type<br></b>
        <input type="radio" name="servicetype" value="Premium" >Premium
        <br>
        <input type="radio" name="servicetype" value="Normal">Normal
    <br><br>

        
    <img src="../images/micro.jpg" srcset="" width="40%"><br>
        <a href='../Admin_View/Micro_Service.php'> <b>Micro Service</b>
        <br><br>
</a>
<b>Servicing Type<br></b>
        <input type="radio" name="servicetype" value="Premium" >Premium
        <br>
        <input type="radio" name="servicetype" value="Normal">Normal
    <br><br>
</center>

 <table>
    <tr>
        <td>
        Contact Admin:<a href="https://github.com/Alif787">Admin</a>
</td>
<td>
        
 Phone: 01681234567</td>
 
</tr>
 </table>

 </h2>
<br><br>
<center>
<input type="submit" name="submit" value="DONE">
</center>
</form>
</body>
</html>