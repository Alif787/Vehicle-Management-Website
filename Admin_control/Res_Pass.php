<?php

$invalid_email="";
$invalid_newpass="";
$invalid_confirm="";

if(isset($_REQUEST["save_pass"])){
    

    if(empty($_REQUEST['Ad_name'])){
        $invalid_email="Please enter your email";
    }

    if(empty($_REQUEST['ad_new_pass'])){
        $invalid_newpass="*Insert new password";
    }
    else if(!empty($_REQUEST['ad_new_pass']) && strlen($_REQUEST['ad_new_pass'])<8){
        $invalid_newpass="*Password must be atleast 8 characters";
    }

    if(empty($_REQUEST['con_pass'])){
        $invalid_confirm="*Confirm your password";
    }
    else if(!empty($_REQUEST['con_pass']) && $_REQUEST['ad_new_pass']!=$_REQUEST['con_pass']){
        $invalid_confirm="*Password does not match";
    }
    
      
//change password from data.json
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if($_REQUEST['Ad_name'] && $_REQUEST['ad_new_pass'] && $_REQUEST['con_pass'])
  {
   
      $admin_name = $_REQUEST['Ad_name'];
      $new_pass = $_REQUEST['ad_new_pass'];
      $confirm_pass = $_REQUEST['con_pass'];
      $data = json_decode(file_get_contents('../Admin_Data/admin_data.json'), true);

      foreach ($data as $key => $value) {
        if($value['Admin_Name'] == $admin_name){
          if(($new_pass == $confirm_pass) && (strlen($new_pass)>=8)){
            $data[$key]['Password'] = $new_pass;
            
            //fetching remaining data
            $remaining_data=file_get_contents("../Admin_Data/admin_data.json");
            $fetch_data=json_decode($remaining_data);
            $fetch_data[]=$data;

            file_put_contents('../Admin_Data/admin_data.json', json_encode($data,JSON_PRETTY_PRINT));
            echo "Password changed successfully";
          }
          else{
            echo "Password not saved";
          }
        }
      }
      }
      else{
        echo "Please fill all the fields";
      }
      
}
    }
?>