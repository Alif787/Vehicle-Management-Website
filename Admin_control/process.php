<?php
include("../Admin_control/Admin_login_Validation.php");
$cookie_name="Admin";
$cookie_value="Visited";
setcookie($cookie_name, $cookie_value,time() + 86400, "/");

if(isset($_SESSION["admin_name"])){
    echo "Welcome " .$_SESSION["admin_name"];
    echo "<br>";
}

if(isset($_COOKIE[$cookie_name])) {
    echo "Welcome again ".$cookie_name;
  }
  else {  
    echo "Welcome ".$cookie_name;	  
}  

?>