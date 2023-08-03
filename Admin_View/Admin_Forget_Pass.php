<?php 
include("../Admin_Control/Res_Pass.php");  
?>
<html>
    <title>Forget Password</title>
    <body>
        <form action="" method="POST">
            <fieldset>
                <h1>Password Re-New</h1>
            </fieldset>
            <fieldset>
                <legend><h2>Change Password</h2></legend>

                <table>
                    <tr>
                    <td>
                    Admin Name:
</td>
                    <td>

                    <input type="text" name="Ad_name">
                    </td></tr>
                    <tr>
                        <td>
                            New Pasword:
                        </td>
                        <td>
                            <input type="text" name="ad_new_pass">
                        </td>
                    </tr>
               
                    <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input type="text" name="con_pass">
                        </td>
                    </tr>
                    <td><input type="submit" name="save_pass" value="Save new password">
</td>
                </table>
                

            </fieldset>
        </form>
        <h4>

        Go To
            <a href="Admin_Login.php">
                Login Page
            </a>
        </h4>

        
    </body>
</html>