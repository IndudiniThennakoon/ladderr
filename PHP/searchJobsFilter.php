<?php
require 'config.php';

if(isset($_GET["filterBtn"]))
{ 
    global $row;
    $searchText = $_COOKIE["searchText"];

    $sql = "SELECT * FROM job WHERE title LIKE '%$searchText'";

    if(isset($_GET["JobType"]))
    {
        $rt = $_GET["JobType"];
        $sql1 = "";
        foreach($rt as $type)
        {
            $sql1 = " OR jobType LIKE '%$type%' ";
            $sql = $sql . $sql1;
        }
    }

    if(isset($_GET["location"]))
    {
        $rt = $_GET["location"];
        $sql2 = " AND location LIKE '%$rt%' ";
        if($rt != "")
        {
            $sql = $sql . $sql2;
        }
    }

    if(isset($_GET["category"]))
    {
        $rt = $_GET["category"];
        $sql5 = " AND category LIKE '%$rt%' ";
        if($rt != "")
        {
            $sql = $sql . $sql5;
        }
    }
    
    if(isset($_GET["experiance"]))
    {
        $rt = $_GET["experiance"];
        $sql3 = " AND experiances LIKE '%$rt%' ";
        if($rt != "")
        {
            $sql = $sql . $sql3;
        }
    }

    if(isset($_GET["salary"]))
    {
        $rt = $_GET["salary"];
        $sql4 = " AND salary > $rt ";
        if($rt != "")
        {
            $sql = $sql . $sql4;
        }
    }

    $resultt = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Jobs - Ladderr</title>
    <link rel="stylesheet" href="../CSS/searchJobs.css">
    <script src="../JS/searchJobs.js"></script>
    <!---------Link to CSS style sheets------>
    <link rel="stylesheet" href="..\CSS\t&c.css">
    <link rel="stylesheet" href="..\CSS\headerfooter.css">
		<link rel="stylesheet" href="..\CSS\home.css">
        
        <!--------external CSS style sheets-------->   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
        </head>

        <!--------external link for icons-------->
        <script src="https://kit.fontawesome.com/d9dc65a069.js" ></script>
</head>
<body>
     
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
            <a href="../HTML/jobvacancies.html">Jobs > &nbsp;</a> 
            <a href="../PHP/searchJobs.php">Search Jobs ></a> 
            <a>Filter Results</a> 
        </div>
        <!-- #endregion -->

        <!-- #region Page title-->
        <div class="PageTitleStyle">
            <label>Filter Results</label>
        </div>
        <!-- #endregion -->
    </div>

    <div class="secondRowDiv">

        <!-- #endregion -->
        <div class="SortJobsdiv">
            <hr>
            <!-- #region Jobs-->
                <div id="AllJobsDiv" class="AllJobsDiv" >
                    <?php
                        if ($resultt->num_rows > 0) 
                        {
                            echo '<script>console.log("has records"); </script>';
                            while($row = $resultt->fetch_assoc())
                            {
                                echo '<div id="aJobDiv1" class="aJobDiv"  data-jobID="none" >
                                            <form action="../PHP/searchJobs.php" method="get" name="ajobform1">
                                                <input type="submit" name="SaveJob" id="SaveJob" 
                                                    value="Save" class="saveView" onclick="saveJob(parentElement, parentElement.parentElement)">
                                                <label name="jobIdLabel" value="stuff"></label>
                                            </form>'.
                                            "<label id=\"title\">".$row["title"]."</label>
                                            <label>".$row["companyName"]."</label>
                                            <label>".$row["location"]."</label>
                                            <label>".$row["jobType"]."</label>"
                                            .'<form action="../PHP/jobPage.php" method="get" >
                                                <input type="button" name="ViewJob" id="ViewJob" 
                                                value="View Details" class="saveView" onclick="createJobIDcookie(parentElement)">
                                            </form>
                                        </div>';
                            }
                        }
                        else{
                            echo '<div class="norecords" ><label>No Records found</label> </div>';
                        }
                    ?>
                </div>
            <!-- #endregion -->

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