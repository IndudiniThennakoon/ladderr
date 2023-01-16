<?php
require 'config.php';
if(isset($_POST["contact"]))
{

    $CName=$_POST["name"];
    $CEmail=$_POST["email"];
    $ContactNo=$_POST["Tele"];
    $CMessage=$_POST["msg"];

    //$query = ("insert into contactus(CName,CEmail,CTelephone,CMessage)values('$CName', '$CEmail', '$ContactNo', '$Message')");
    $stmt = $conn->prepare("insert into contactus(CName,CEmail,CTelephone,CMessage)values(?,?,?,?)");
    $stmt->bind_param("ssss", $CName,$CEmail,$ContactNo,$CMessage);
    $stmt->execute();
    echo "Data Successfully";

   $stmt->close();
   $con->close();

}
?>