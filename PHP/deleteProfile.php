<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete profile</title>
    <link rel="stylesheet" href="..\CSS\created.css">
</head>
<body>
<?php
   
   include 'config.php';  
    
   global $conn;
   $sql = "delete from company where companyID= (select max(companyID) from company)";
   
   echo "<script>alert(\"successfully deleted!\")</script>";
      
   header("location:../HTML/home.html");
   if($conn->query($sql))
   {
      echo "<h1>Deleted successfully!</h1>";
      
      header("location:../HTML/home.html");
   }
   else{
    echo "Error: ".$conn->error;
   }
   
  $conn->close();
  ?>
</body>
</html>

