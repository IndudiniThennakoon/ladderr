<?php
require 'config.php';

if(isset($_COOKIE["ViewCompanyID"]))
{
    if(isset($_COOKIE["email"]))
    {
        $companyID = $_COOKIE["ViewCompanyID"];
        if($companyID != "none" && $companyID !== null)
        {
            $sql = "SELECT * FROM company WHERE companyID = $companyID";

            if($conn->query($sql) == TRUE)
            {
                $result = $conn->query($sql);
                $searchData = array();
                if ($result->num_rows > 0) 
                {
                    echo '<script>console.log("has records"); </script>';
                    $row  = $result->fetch_assoc() ;
                }
                else{
                    echo '<script>console.log("no records"); </script>';
                } 
            }
        }
    }
    else{
        echo '<script>console.log("regID is not set")</script>';
        echo '<script> alert("Please sign up to save job"); </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Description - Ladderr</title>
    <link rel="stylesheet" href="../CSS/jobDescription.css">
    <script type="text/javascript" src="../JS/jobDescription.js"></script>

    <!---------Link to CSS style sheets------>
    <link rel="stylesheet" href="..\CSS\headerfooter.css">
        
    <!--------external CSS style sheets-------->   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
</head>
<body >
	<!----------Menu---------->
	<header class="header">

		<h2 class="logo">
			<span class='bi bi-ladder' style='color:#ff7800'></span> ladderr </h2>

		<nav class="navbar">
			<a href="../HTML/home.html">Home</a>
			<a href="../HTML/jobvacanciesPage.html">Find a Job</a>
			<a href="../HTML/companiespage.html">Find a Company</a>
		</nav>

		<div class="icons">
			
			<button id="search-btn"><a class="noUndreline" href="../HTML/login.html">Login</a></button>
			<button id="login-btn"><a class="noUndreline" href="../HTML/createaccount.html">Register</a></button>
			<div class="fas fa-bars" id="menu-btn"></div>
		
		</div>
		<div class="MENU">
			<div class="box">
				<a href="../HTML/home.html">Home</a> 
			</div>
			<div class="box">
				<a href="../HTML/jobvacanciesPage.html">Find a Job</a> 
			</div>
			<div class="box">
				<a href="../HTML/companiespage.html">Find a Company</a>
			</div>
		</div>
	</header>
	<!----------end of header---->
	
    <div class="firstRowDiv">
        <!-- #region Bread Crumb-->
        <div class="breadCrumbStyle">
            <a href="../HTML/Home.html">Home > &nbsp;</a>  
            <a href="../HTML/companiespage.html">Companies > &nbsp;</a> 
            <a href="../HTML/companyPage.html"> Company Description</a> 
        </div>
        <!-- #endregion -->

        <!-- #region Page title-->
        <div class="PageTitleStyle">
            <label id="jobTitle" name="jobTitle" ></label>
        </div>
        <!-- #endregion -->
    </div>

    <div class="secondRowDiv">
        <div id="aJobDiv1" class="aJobDiv"  data-companyID="none" >
            <div class="jobDets">
                <div id="fieldList">
                    <?php 
                    foreach($row as $field => $vall)
                    {
                        $columnName = "";
                        switch($field)
                        {
                            case "companyName":
                                $columnName = "Company Name";
                                break;
                            case "noOfOpenings":
                                $columnName = "No. Of Openings";
                                break;
                            case "establishedYear":
                                $columnName = "EstablishedYear";
                                break;
                            case "hotline":
                                $columnName = "Hotline";
                                break;
                            case "website":
                                $columnName = "Website";
                                break;
                            case "postalAddress":
                                $columnName = "Address";
                                break;
                            case "field":
                                $columnName = "Field";
                                break;
                            case "CEOname":
                                $columnName = "CEO Name";
                                break;
                            case "email":
                                $columnName = "Email";
                                break;
                            case "varNOE":
                                $columnName = "No. Of Employees";
                                break;
                        }

                        if($columnName !== "" )
                        {
                            echo "<label>$columnName </label>";
                        }
                    }
                    ?>
                </div> 
                <div id="dataList">
                    <?php
                    foreach($row as $field => $vall)
                    {
                        $columnName = "";
                        switch($field)
                        {
                            case "companyName":
                                $columnName = "Company Name";
                                break;
                            case "noOfOpenings":
                                $columnName = "No. Of Openings";
                                break;
                            case "establishedYear":
                                $columnName = "EstablishedYear";
                                break;
                            case "hotline":
                                $columnName = "Hotline";
                                break;
                            case "website":
                                $columnName = "Website";
                                break;
                            case "postalAddress":
                                $columnName = "Address";
                                break;
                            case "field":
                                $columnName = "Field";
                                break;
                            case "CEOname":
                                $columnName = "CEO Name";
                                break;
                            case "email":
                                $columnName = "Email";
                                break;
                            case "varNOE":
                                $columnName = "No. Of Employees";
                                break;
                        }
                        if($columnName !== "" )
                        {
                            //echo "<script>console.log(\"$vall\"); </script>";
                            echo "<label>: $vall</label>";
                        }
                    }
                    ?>
                </div> 
            </div>
        </div>
    </div>

    <!---------FOOTER--------->	
	<footer>
		<div class="row">
			<!-------Other LINKs-------->
			<!-------Ladderr-------->
			<div class="col">
				<h3>ladderr</h3>
					<ul>
						<li><a href="../HTML/about us.html">About</a></li>
						<li><a href="../HTML/feedback.html">Feedback</a></li>
						<li><a href="../PHP/new.php">Contact us</a></li>
					</ul>
			</div>

			<!-------Products-------->
			<div class="col">
				<h3>Products</h3>
					<ul>
						<li><a href="../HTML/my vacancy.html">Find Jobs</a></li>
						<li><a href="../HTML/companiespage.html">Find Company</a></li>
						<li><a href="../PHP/createMyProfile.php">Register Job seeker</a></li>
						<li><a href="../HTML/companyForm.html">Register Company</a></li>
					</ul>
			</div>

			<!-------Quick links-------->
			<div class="col">
				<h3>Quick Links</h3>
					<ul>
						<li><a href="../HTML/searchJobs.html">Remote jobs</a></li>
						<li><a href="../HTML/searchJobs.html">Part time jobs</a></li>
						<li><a href="../HTML/searchJobs.html">Top jobs</a></li>
						<li><a href="../HTML/searchCompanies.html">Top Companies</a></li>
						
					</ul>
			</div>

			<!-------Help Centre-------->
			<div class="col">
				<h3>Help Centre</h3>
					<ul>
						<li><a href="privacy.html">Policy</a></li>
						<li><a href="t&c.html">Terms & Conditions</a></li>
					</ul>
			</div>

			<!---------Social Media Icons--------->
			<div class="col2">
				<ul>
					<li><a href=""><i class="fa-solid fa-envelope"></i></a></li>
					<li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
					<li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
					<li><a><i class="fa-brands fa-instagram-square"></i></a></li>
					<li><a><i class="fa-brands fa-linkedin-in"></i></a></li>
				</ul>
				<p id="ALLRIGHTS">2022 ladderr. All Rights Reserved.</p>
			</div>
			
		</div>
		
	</footer>
	<!----------footer ends------>
</body>
</html>
