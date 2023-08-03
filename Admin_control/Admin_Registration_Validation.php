<?php
include("../Admin_Model/db.php");

$validfname="";
$validlname="";
$validemail="";	
$validpass="";
$invalidfname="";
$invalidlname="";
$invalidemail="";
$invalidpass="";
$invalidcf="";
$fnamelen="";
$lnamelen="";
$validage="";
$invalidage="";
$invalidmob="";
$validmob="";
$invalidgen="";
$validadmin="";
$invalidadmin="";
$validcon="";
$validgen="";

$x=0;
//email regex
$email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/"; 
//password regex
$pass_regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
// mobile reg pattern
$mob_regex ="^([01]|\+88)?\d{11}^";

if(isset($_POST["Submission"])){
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$age=$_REQUEST["age"];
$pass=$_REQUEST["pass"];
$email=$_REQUEST["Email"];

$mob_no=$_REQUEST["Admin_num"];
$cf=$_REQUEST["c_pass"];
$admin_name=$_REQUEST["Admin_name"];
if(empty($fname) || is_numeric($fname)|| strlen($fname)<5){	
    $invalidfname=" Please Enter your First name";

}

else{
    
    echo "Valid First Name<br>";
        $validfname=$fname;
        $x++;
        echo "First Name : " . $validfname;
}
echo "<br>";

if(empty($lname)|| is_numeric($lname)|| strlen($lname)<5){	
    $invalidlname=" Please Enter your First name";

}

else{
    
    echo "Valid Last Name<br>";
    $validlname=$lname;
    $x++;
    echo "Last Name : " . $validlname;
}
echo "<br>";

if(empty($email)){
    $invalidemail="Please Enter a Valid Email";
    echo "<br>";
 
}
else{
    if(preg_match($email_regex,$email)){
        echo "Valid Email<br>";
        $validateemail=$email;
        $x++;
    }
    else{
        $invalidemail="Email is not valid";
        echo "<br>";
        echo  $invalidemail;
        
    }
   
}
echo "<br>";

if(empty($pass)){
    $invalidpass="Please Enter a Valid Password";
    echo "<br>";
}
else{
   
    if(strlen($pass)>=5 && preg_match($pass_regex,$pass)){
        echo "Passwored Entered<br>";
        $validpass=$pass;
        $x++;
    }
    else{
        $invalidpass="Password is not valid!";
        echo "<br>";
    }
}
echo "<br>";
if(empty($cf)){
    $invalidcf="Please Confirm Password";
    echo "<br>";
}
else{
    if($cf==$pass){

        $validcf=$cf;
        $x++;
        echo "Confirm Password Entered<br>";
    }
    else{
        $invalidcf="Password not matched try again!";
        echo "<br>";
        echo $invalidcf;
    }
}

if(empty($age)){
    $invalidage="Please Enter your Age!";
    echo "<br>";
}
else{
    echo "Valid Age<br>";
    $validage=$age;
    $x++;
}
echo "<br>";

if(isset($_REQUEST["g1"])){
    $validgen=$_REQUEST["g1"];	
    $x++;

    echo "<br>";
}
else{  
    $invalidgen= "Please select a Gender<br>";
}
echo "<br>";

if(strlen($mob_no)>=11 && preg_match($mob_regex,$mob_no)){
    echo "Valid Mobile Number";
    echo "<br>";
    $validmob=$mob_no;
    $x++;
    echo "Mobile Number : " . $validmob;
}
else{
    $invalidmob="Please Enter a Valid Mobile Number!";

}
echo "<br>";

if(empty($admin_name)){
    $invalidadmin="You must enter your name!";
    echo "<br>";	
}
else{
    $validadmin=$admin_name;
    $x++;
}

if(empty($fname) || is_numeric($fname)|| strlen($fname)<5 || empty($lname)|| is_numeric($lname)|| strlen($lname)<5 || empty($email) || !preg_match($email_regex,$email) || empty($pass) || !preg_match($pass_regex,$pass) || empty($age)||empty($cf)){
    echo "Please fill up all the fields";
}

if($x==9){

//Get form data 
$Admindata=array(
    'FirstName'=>$_POST['fname'],
    'LastName'=>$_POST['lname'],	
    'Age'=>$_POST['age'],
    'Mobile'=>$_POST["Admin_num"],
    'E-mail'=>$_POST["Email"],
    'Admin_Name'=>$validadmin,
    'Password'=>$_POST["pass"],

);
$existing_data=file_get_contents("../Admin_Data/admin_data.json");
$tempdata=json_decode($existing_data);
$tempdata[]=$Admindata;

$jsondata=json_encode($tempdata,JSON_PRETTY_PRINT);

if(file_put_contents("../Admin_Data/admin_data.json", $jsondata)) {
    echo " Successfully Registered <br>";
   
}
else {
    echo "Not Registered Successfully!<br>";
}
    $mydb = new db();
    $myconn = $mydb->opencon();
    $mydb-> insert_admin($validfname, $validlname, $validage, $_REQUEST["g1"],$validmob, $validateemail, $validadmin, $validpass, $validcf, "admin", $myconn);
    
}

    
}

?>