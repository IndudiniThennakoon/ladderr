<?php
require '../HTML/searchJobs.html';
require 'config.php';

if(isset($_GET["searchbar"]) && isset($_COOKIE["searchText"]))
{
    if(isset($_GET["searchbar"]))
    {
        $searchText =  $_GET["searchbar"];
    }
    else if(isset($_COOKIE["searchText"]))
    {
        $searchText =  $_COOKIE["searchText"];
    }

    if($searchText != "" && $searchText != null)
    {
        $sql = "SELECT * FROM job WHERE title LIKE '%$searchText%' OR location LIKE '%$searchText%' OR description LIKE '%$searchText%' OR companyName LIKE '%$searchText%' OR category LIKE '%$searchText%' OR certification LIKE '%$searchText%' OR requiredSkills LIKE '%$searchText%' OR  experiances LIKE '%$searchText%' OR qaulifications LIKE '%$searchText%' OR jobType LIKE '%$searchText%' OR salary LIKE '%$searchText%' OR visibility LIKE '%$searchText%'" ;
    }
    
    $result = $conn->query($sql);
    $searchData = array();
    if ($result->num_rows > 0) {
        echo '<script>console.log("has records"); </script>';
        while($row = $result->fetch_assoc()) {
            array_push($searchData, $row);    
        }
        $myjson = json_encode($searchData);
        
        echo "<script type=\"text/javascript\">displayResults($myjson, \"$searchText\")</script>";
    }
    else{
        echo '<script>console.log("no records"); </script>';
    }
}
else 
{ 
    echo '<script>console.log("searchbar not set")</script>';
    echo '<script>console.log("searchText set")</script>';
    $sql = "SELECT * FROM job";
    $result = $conn->query($sql);
    $searchData = array();
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            array_push($searchData, $row);    
        }
        $myjson = json_encode($searchData);
        $data = $searchData;
        echo "<script type=\"text/javascript\">displayResults($myjson, \"all\")</script>";
    }
    else{
        echo '<script>console.log("no records"); </script>';
    }
}

if($_GET["SaveJob"])
{
    if(isset($_COOKIE["saveJobID"])){

        $searchText = $_COOKIE["searchText"];
        $sql = "SELECT * FROM job WHERE title LIKE '%$searchText%' OR location LIKE '%$searchText%'  OR description LIKE '%$searchText%'  OR companyName  LIKE '%$searchText%' OR category LIKE '%$searchText%'  OR certification LIKE '%$searchText%'  OR requiredSkills LIKE '%$searchText%'  OR experiances LIKE '%$searchText%'  OR qaulifications LIKE '%$searchText%'  OR jobType LIKE '%$searchText%'  OR salary LIKE '%$searchText%'  OR  visibility LIKE '%$searchText%'" ;
            
        $result = $conn->query($sql);
        $searchData = array();
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) {
                array_push($searchData, $row);    
            }
            $myjson = json_encode($searchData);
            
            echo "<script type=\"text/javascript\">displayResults($myjson, \"$searchText\")</script>";
        }
        else{
            echo '<script>console.log("no records"); </script>';
        }

        if(isset($_COOKIE["email"]))
        {
            $regID = null;
            $getSeekers = "SELECT * FROM seeker";
 
            $results =$conn -> query($getSeekers);
            $email = $_COOKIE["email"];
            
            if ($results->num_rows > 0) {
                while($roww = $result->fetch_assoc())
                {
                    if($roww["email"] == $email)
                    {
                        $regID = $roww["registeredID"];
                        break;
                    }
                }
            }
            else{
                echo "<script>alert(\"Error: $getSeekers . $conn->error\")</script>";
            }

            $jobID = $_COOKIE["saveJobID"];

            $sqlSave = "INSERT INTO saves(registeredID, jobID) VALUES(8, $jobID);";
            echo '<script> alert("successfully saved!"); </script>';
 
            if ($conn -> query($sqlSave) == TRUE) 
            {
                echo '<script> alert("successfully saved!"); </script>';
            }
            else{
                echo "<script>alert(\"Error: $sqlSave . $conn->error\")</script>";
            }
        
            if($_COOKIE["email"])
            {}
            else{
                echo '<script> alert("Recruiters cannot save jobs!"); </script>';
            }
        }
        else{
            echo '<script>console.log("regID is not set")</script>';
            echo '<script> alert("Please sign up to save job"); </script>';
        }
    }   
}

?>



