<!DOCTYPE html>
<html>

    <head>
        <title>Post a job</title>
        
        <!---------Link to CSS style sheets------>
        <link rel="stylesheet" href="..\CSS\headerfooter.css">
		<link rel="stylesheet" href="..\CSS/post a job.css">
        
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
	
		<br><br><br><br><br><br><br><br>
		<center><h1 class="Ttxtstyle">Post a Job</h1></center>
		<center><div class="Post a Job">
			<section style="width:70%">
			<div id="formStyle1">
				<form action="post a job php.php" method="post">
					<fieldset>
						<div class="col-50">
							<label for="Job Title">Job Title:</label>
							<input type="text" name="Title" id="Job Title" required>
							
							<div class="col-50">				
								<label for="options">Job Type</label>
								<select name="Type" id="Job Type">
									<option value="" disabled selected>-- Select --</option>
									<option value="Part Time">Part Time</option>
									<option value="Full Time">Full Time</option>
									
								</select>
							
							</div>

							<label for="Job Description">Job Description</label>
							<input type="text" name="Description" id="Job Description" required><br>

							<label for="Location">Location</label>
							<input type="text" name="Location" id="Location" required><br>

							<label for="Job Title">Job Responsibilities</label>
							<input type="text" name="Responsibilities" id="Job Responsibilities" required><br>

							<div class="Education Qualifications">
								<div class="col-60">				
									<label for="options">Education Qualifications</label>
									<select name="Qualifications" id="Education Qualifications">
										<option value="" disabled selected>-- Select --</option>
										<option value="Bachelor's">Bachelor's</option>
										<option value="Higher Certificate">Higher Certificate</option>
										<option value="National Diploma">National Diploma</option>
										<option value="Master's Degree ">Master's Degree </option>
										
									</select>
								</div>
							</div>

							<label for="Required Experience">Required Experience</label>
							<input type="text" name="Experience" id="Required Experience" required><br>

							<div id="Salary">
								<div class="col-70"></div>
								<label class="firstlabel">Salary</label>
								<input type="text" name="Salary" id="Salary" required><br>
								<div id="currency">
									<!--<input class="lastname" type="text" name="Currency">-->
									<label class="lastlabel">Currency</label>
									<select name="Currency" id="Currency">
										<option value="" disabled selected>-- Select --</option>
										<option value="USD">USD</option>
										<option value="RS">RS</option>
										
									</select>
								</div>
							</div>
								

							<label for="Required Skills">Required Skills</label>
							<input type="text" name="Skills" id="Required Skills" required><br>

							<label for="Certifications">Certifications</label>
							<input type="text" name="Certifications" id="Certifications" required><br>

							<label for="License">License</label>
							<input type="text" name="License" id="License" required><br>

							<div class="Career Level">
								<div class="col-70">				
									<label for="options">Career Level</label>
									<select name="Level" id="Career Level">
										<option value="" disabled selected>-- Select --</option>
										<option value="Senior">senior</option>
										<option value="Junior">junior</option>
										>
										
									</select>
								</div>

								<div>
								<p class="Have a Poster?">Have a Poster?
								<div class="upload">
									<button type="button" >
									<input type="file">
									</button>
								</div>
							</div>

							<label for="Deadline to Apply">Deadline to Apply</label>
							<form action="../HTML/post a job php.php">
								<input type="Date" id="Date" name="date">
					
							</form>
						
						<div class ="btnn">
							<button id="paj" name="submit">Post a Job</button>
					</div>
				</center>



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