<?php
require 'config.php';
if(isset($_POST["feedback"])){

    $FName=$_POST["Name"];
    $FEmail=$_POST["Email"];
    $FTelephone=$_POST["Tele"];
    $FProffession=$_POST["Prf"];
    $FDiscription=$_POST["Des"];
   
    
   
   $stmt = $conn->prepare("insert into feedback(FName,FEmail,FTelephone,FProffession,FDiscription)values(?,?,?,?,?)");
   $stmt->bind_param("sssss", $FName,$FEmail,$FTelephone,$FProffession,$FDiscription);

   $stmt->execute();
   echo "Data Successfully added";

   

   $stmt->close();
   $conn->close();

}
?>