<?php
require '../HTML/searchCompanies.html';
require 'config.php';

if(isset($_GET["searchbar"]))
{
    $searchText =  $_GET["searchbar"];
    if($searchText != "" && $searchText != null)
    {
        $sql = "SELECT * FROM company WHERE
        companyName LIKE '%$searchText%' OR noOfOpenings LIKE '%$searchText%' OR
        description LIKE '%$searchText%' OR establishedYear  LIKE '%$searchText%' OR
        hotline LIKE '%$searchText%' OR website LIKE '%$searchText%' OR field LIKE '%$searchText%' OR
        headOfficeAddress LIKE '%$searchText%' OR postalAddress LIKE '%$searchText%' OR 
        postBoxNumber LIKE '%$searchText%'" ;

        $result = $conn->query($sql);
        $searchData = array();
        if ($result->num_rows > 0) 
        {
            echo '<script>console.log("has records"); </script>';
            while($row = $result->fetch_assoc()) 
            {
                array_push($searchData, $row);    
            }
            $myjson = json_encode($searchData);

            echo "<script type=\"text/javascript\">displayResults($myjson, \"$searchText\")</script>";
        }
        else{
            echo "<script>alert(\"no companies found\")</script>";
            $sql = "SELECT * FROM company " ;

            $result = $conn->query($sql);
            $searchData = array();
            
            if ($result->num_rows > 0) {
                echo '<script>console.log("has records"); </script>';
            
                while($row = $result->fetch_assoc()) {
                    array_push($searchData, $row);    
                }
                $myjson = json_encode($searchData);
                
                echo "<script type=\"text/javascript\">displayResults($myjson, \"all\")</script>";
                
            }
            else{
                echo "<script>alert(\"no companies found\")</script>";
            }
        }
    }
}
else{
    $sql = "SELECT * FROM company " ;

    $result = $conn->query($sql);
    $searchData = array();
    
    if ($result->num_rows > 0) {
        echo '<script>console.log("has records"); </script>';
    
        while($row = $result->fetch_assoc()) {
            array_push($searchData, $row);    
        }
        $myjson = json_encode($searchData);
        
        echo "<script type=\"text/javascript\">displayResults($myjson, \"all\")</script>";
        
    }
    else{
        echo "<script>alert(\"no companies found\")</script>";
    }
}

/*

if(isset($_COOKIE["searchText"])) 
{
    $searchText = $_COOKIE["searchText"];
    $fromhome = $_COOKIE["fromHome"];
    if($searchText != "" && $searchText != null && !isset($_GET["searchbar"]))
    {
        echo '<script>console.log("searchText is set")</script>';
        echo "<script>console.log(\"$searchText\"); </script>";
        echo "<script>console.log(\"$fromhome\"); </script>";
        $sql = "SELECT * FROM company WHERE
            companyName LIKE '%$searchText%' OR noOfOpenings LIKE '%$searchText%' OR
            description LIKE '%$searchText%' OR establishedYear  LIKE '%$searchText%' OR
            hotline LIKE '%$searchText%' OR website LIKE '%$searchText%' OR field LIKE '%$searchText%' OR
            headOfficeAddress LIKE '%$searchText%' OR postalAddress LIKE '%$searchText%' OR 
            postBoxNumber LIKE '%$searchText%'" ;

        $result = $conn->query($sql);
        $searchData = array();
        if ($result->num_rows > 0) {
            echo '<script>console.log("has records"); </script>';
            while($row = $result->fetch_assoc()) {
                array_push($searchData, $row);    
            }
            $myjson = json_encode($searchData);
            
            echo "<script type=\"text/javascript\">displayResults($myjson, \"$searchText\")</script>";
            setcookie("searchText", "$searchText", time()-1000);
        }
        else{
            echo '<script>console.log("no records"); </script>';
            echo "no companies found";
        }
    }
} 
else 
{ 
    echo '<script>console.log("searchText not set")</script>';
}

$sql = "SELECT * FROM company " ;

$result = $conn->query($sql);
$searchData = array();

if ($result->num_rows > 0) {
    echo '<script>console.log("has records"); </script>';

    while($row = $result->fetch_assoc()) {
        array_push($searchData, $row);    
    }
    $myjson = json_encode($searchData);
    
    echo "<script type=\"text/javascript\">displayResults($myjson, \"all\")</script>";
    
}
else{
    echo "no companies found";
}
*/
?>
