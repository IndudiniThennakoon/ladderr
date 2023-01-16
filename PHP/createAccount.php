<?php
require 'config.php';

if(isset($_POST['create']))
{
  $email = "\"".$_POST['email']."\"";
  $password = "\"".$_POST['email']."\"";
  $type = "\"".$_POST['type']."\"";
  
  
  $sql = "INSERT INTO account (email,password,userType) VALUES ($email,$password,$type)";  

  
  $result = $conn->query($sql);
  if($result)
  {
      echo "Data Added";
      header("Location: ../HTML/RegisterMain.html");
  }else{
      echo "Error inserting record : ".$conn->error;
      
      header("Location: createAccount.html");
  }
}
?>