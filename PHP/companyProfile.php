
<!DOCTYPE html>
<html>
    <head>
        <title>Company Profile</title>
        
            <!---------Link to CSS style sheets------>
        
        
        <link rel="stylesheet" href="..\CSS\headerfooter.css">
        <link rel="stylesheet" href="..\CSS\styleCompanyprofile.css">
		
        <!--------external CSS style sheets-------->   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
        
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
	
<div class="profile">
<?php
        require 'config.php';
        $sql="select * from logo where logoID = (select max(logoID) from logo)";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            //read data
            if($row = $result->fetch_assoc()){
                echo "<img src='../uploads/".$row["logo"].  "' alt='logo'>";
            }}
            else
        {
        echo "<h1 class='name'>No results!</h1>";
        }

        $conn->close();
    ?>

    <?php
        require 'config.php';
    
        $sql="select * from company where companyID = (select max(companyID) from company)";
        //echo "<script>console.log(\"$sql\")</script>";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            //read data
            if($row = $result->fetch_assoc()){

                $company_ID = $row['companyID'];
                //Read and utilize the row data
                
                echo "<h1 class='name'>".$row["companyName"].  "</h1>";
                echo "<p class='field'>".$row["field"].  "</p>";
                echo "<p class='field'>companyID: ".$company_ID.  "</p>";
                echo "<div class='container'><p class='reach'><i class='fa-solid fa-phone'></i>".$row["hotline"]."</p>";
                echo "<p class='reach'><i class='fa-solid fa-envelope'></i>".$row["email"]."</p>";
                echo "<p class='reach'><i class='fa-solid fa-globe'></i>".$row["website"]."</p>";
                echo "<p class='reach'><i class='fa-solid fa-location-dot'></i>".$row["headOfficeAddress"]."</p></div>";
                echo "<div class='other'><p>Etablished Year:  ".$row["establishedYear"]."<br>CEO Name:  ".$row["CEOname"]."<br>No of Employees:  ".$row["varNOE"]."</p></div>";
                echo "<div class='description'><p class='name'>-About-</p><p>".$row["description"]."</p></div>";
            
            }
        }
        else
        {
        echo "<h1 class='name'>No results!</h1>";
        }

        $conn->close();
    ?>

        <!----------Delete data btn----------->
        <form method="post" action="../PHP/deleteProfile.php">
            <input  type="submit" value="delete" class="b-t-n" name="delete"></input>
        </form><br><br>
       <a href="edit.php?GETID=<?php echo $company_ID?>" class="edit">Edit</a><br><br>

        <!---------Go to myvacancies---------->
        <button class="myvacancies"><i class='fa-solid fa-arrow-up-right-from-square'>
        <a href="../HTML/my vacancy.html">myVacancies</a>
        </i></button>
        <button class="myvacancies"><i class='fa-solid fa-arrow-up-right-from-square'>
        <a href="../PHP/post a job.php">Post Jobs</a>
        </i></button>
        

    </div>

    <!---------FOOTER--------->
        
    <footer>
        <div class="row">
            <!-------Other LINKs-------->
            <!-------Ladderr-------->
            <div class="col">
                <h3>ladderr</h3>
                    <ul>
                        <li><a href="">About</a></li>
                        <li><a href="">Feedback</a></li>
                        <li><a href="">Contact us</a></li>
                    </ul>
            </div>

            <!-------Products-------->
            <div class="col">
                <h3>Products</h3>
                    <ul>
                        <li><a href="">Find Jobs</a></li>
                        <li><a href="">Find Company</a></li>
                        <li><a href="">Register Job seeker</a></li>
                        <li><a href="">Register Company</a></li>
                    </ul>
            </div>

            <!-------Quick links-------->
            <div class="col">
                <h3>Quick Links</h3>
                    <ul>
                        <li><a href="">Remote jobs</a></li>
                        <li><a href="">Part time jobs</a></li>
                        <li><a href="">Top jobs</a></li>
                        <li><a href="">Top Companies</a></li>
                        
                    </ul>
            </div>

            <!-------Help Centre-------->
            <div class="col">
                <h3>Help Centre</h3>
                    <ul>
                        <li><a href="">FAQs</a></li>
                        <li><a href="">Policy</a></li>
                        <li><a href="">Terms & Conditions</a></li>
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
    <script src="../JS/script.js"></script>
    </body>
    </html>
   