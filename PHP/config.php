<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="ladderr_db";

//Create connection

$conn = new mysqli($servername, $username, $password, $dbname);


//Check connection 

if (!$conn)
{
    die(mysqli_error($conn));
}
?>  
