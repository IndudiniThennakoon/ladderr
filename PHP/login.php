<?php
require 'config.php';

if(isset($_POST['login'])){
    $username =  $_POST['username'];
    $email =  $_POST['email'];
    $password = $_POST['password'];
    echo $email.' '.$password;


  $sql = "SELECT * FROM `account` WHERE email = '$email' ";
   $result = mysqli_query($conn,$sql);

   if (mysqli_num_rows($result)===1) 
   {
       $row = mysqli_fetch_assoc($result);//
       if ($row['email']===  $email && $row['password']===$password ) 
       {
           setcookie("email", $email , (time()+(86400*30)) , "../../");
           header("Location: ../HTML/home.html");
       }
       else{
        header("Location: ../HTML/login.html");
       }
   }
}
?>