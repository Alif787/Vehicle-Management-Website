<?php

class db
{
    function opencon ()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "vehicle";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) 
        {
            echo "error connecting to database";       
        }          
        return $conn;
    }
    function insert_admin ($fname, $lname, $age, $gender, $mobile, $email, $admin_name, $password, $cpass, $table, $conn){
        $sqlstr = "INSERT into $table (fname, lname, age, gender, admin_num, email, admin_name, pass, c_pass) VALUES ('$fname', '$lname', '$age', '$gender', '$mobile', '$email', '$admin_name', '$password', '$cpass')";
        
        if($conn->query($sqlstr)) 
        {
            echo "Data has been inserted";
        }

        else
        {
            echo "Cannot insert".$conn->error;
        }
    }
    function checklogin ($conn, $tablename, $adminname, $password)
    {
        $sqlstr = "SELECT admin_name, pass FROM $tablename WHERE admin_name='$adminname' AND pass = '$password'"; 
        return $conn-> query ($sqlstr);
    }
    function update ($conn, $tablename, $adminname, $password, $cpass)
    {
        $sqlstr = "UPDATE $tablename SET admin_name = '$adminname', pass = '$password', c_pass = '$cpass' WHERE admin_name = '$adminname'";
        return $conn-> query ($sqlstr);
    }
}
?>
