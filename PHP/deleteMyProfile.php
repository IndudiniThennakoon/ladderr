<?php
include 'config.php';
if(issert($_GET['deleteId'])){
    $Id=$_GET ['deleteId'];

    $sql = "DELETE FROM 'createmyprofile' WHERE Id = $Id";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        //echo "Deleted Successfull";
        header('location: ../HTML/home.html');

    }else{
        die(mysqli_error($conn));
    }
}
?>


