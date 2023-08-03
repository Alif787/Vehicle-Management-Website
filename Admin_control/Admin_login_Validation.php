<?php
include("../Admin_Model/db.php");
$invalid_adminname="";
$invalid_password="";
$valid_adminname="";
$valid_password="";
session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_REQUEST['Submission']))
        {
            $adminname=$_REQUEST["admin_name"];
            $password=$_REQUEST["admin_pass"];
            if (empty($_REQUEST["admin_name"]) || empty($_REQUEST["admin_pass"]))
                {
                    echo "Admin name and password cannot be empty!";
                }
            else
                {
                    $mydb = new db();
                    $conn = $mydb->opencon();
                    $results = $mydb->checklogin($conn, "admin", $adminname, $password);
                if($results->num_rows>0)
                {
                    $_SESSION["admin_name"]=$_REQUEST["admin_name"];
                    $_SESSION["admin_pass"]=$_REQUEST["admin_pass"];
                }
                else
                {
                    echo "Admin not found!";
                }
                }
            if(empty($adminname))
            {
                $invalid_adminname= "*you must enter Admin Name";
            }
            else
            {
               $valid_adminname=$adminname;
            }
            if(empty($password))
            {
                $invalid_password= "*you must enter password";
            }
            
            else if(!empty($password) && strlen($password)<8)
            {
                $invalid_password= "*your password must Contain 8 characters";
            }
            else
            {
                $valid_password=$password;
            }
           
        }   

        //login using json
        $login_data=file_get_contents("../Admin_Data/admin_data.json");
        $fetch_login_data=json_decode($login_data);

        foreach($fetch_login_data as $login_data)
        {
            if($login_data->Admin_Name==$valid_adminname && $login_data->Password==$valid_password)
            {
               
                header("location:../Admin_View/Admin_Homepage.php");
            }
            else
            {
                if(empty($adminname))
                {
                    $invalid_adminname= "*you must enter Admin Name";
                }
               else
               {
                $invalid_adminname= "*Invalid Admin Name or password";
               }
            }
        }
  

    }

      

?>