<!-- <?php
include("../Admin_control/Admin_Registration_Validation.php");
?> -->


<html>
    <head>
        <title>Admin Registration </title>
        <link rel="stylesheet" type="text/css" href="reg.css">
    </head>
   
    <body>

    <h1>Admin Registration Page</h1>
        
        <form action="" method="POST"  enctype="multipart/form-data">
           <div class="first">
            <fieldset>
                <legend>Registration Details:</legend>
            <table>
                <tr> 
                <td>First Name: </td>
                <td><input class="fname" type= "text" name="fname" placeholder="Enter First Name">
                <?php echo $invalidfname; ?>
               
                </tr></td>
        
                <tr><td>Last Name: </td>
                <td><input class="fname" type="text"  name="lname" placeholder="Enter Last Name">
                <?php echo $invalidlname; ?>

                </tr></td>
                <tr><td>Age: </td>  
        <td><input type="text" class="fname" name="age" placeholder="Enter Age">
        <?php echo $invalidage; ?>
    </tr></td>
    <tr>
        <td>Gender: </td>
        <td>
            <input type="radio" name="g1" value = "Male">Male
            <input type="radio" name="g1" value = "Female">Female
            <input type="radio" name="g1" value = "Others"> Others
        </td>
    </tr>
    <tr>
        <td>Mobile No:</td>
        <td>
            <input type="tel"class="fname" name="Admin_num" placeholder="Enter Phone Number">
         <?php echo $invalidmob; ?>
        </td>
    </tr>


        <tr><td>E-mail: </td>
            
        <td><input type="email" class="fname" name="Email" placeholder="Enter E-mail">
        <?php echo $invalidemail; ?>
        
    </tr></td>
</table>

        
    </fieldset>
           </div>
           <br><br><br>
           <div class="sec">
            <fieldset>
                <legend>Important Informations</legend>
        
                <table>
        
                <tr>
                    <td>Admin Name: </td>
                    <td>
                        <input class="fname" type="text" name="Admin_name" placeholder="Enter your Admin Name">
                    <?php echo $invalidadmin; ?>
                    </td>
                </tr>
        
                <tr><td>Password: </td>
        
                <td><input class="fname" type="password" name="pass" placeholder="Enter your Password"> 
            
                <?php echo $invalidpass; ?>
            
            </tr></td>
        
            <tr><td>Confirm Password: </td>
        
                <td><input class="fname" type="password" name="c_pass" placeholder="Please Confirm Password"> 
             <?php echo $invalidcf; ?>
            
            </tr></td>
               
                <br>
        
               
               <tr><td> <input class="submit"  type="submit" name="Submission"value="Submit"> <br><br> <input class="reset" type= "reset" name="Res" value = Reset></td></tr>
                       
                    </table>
        
                </form>
                </table>
        </fieldset>
        
        
           </div>

    
<h4>Go To <a href="Admin_Login.php">Login Page</a></h4>
    </body>
</html>