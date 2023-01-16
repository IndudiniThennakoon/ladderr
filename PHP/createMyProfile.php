<?php

//linking the congiguration file
require 'config.php';


if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
	$dob=$_POST['dob'];
	$gender = $_POST['gender'];
    $bio = $_POST['bio'];
    $qualification = $_POST['qualification'];
    $institute = $_POST['institute'];
    $ins_since = $_POST['ins_since'];
    $ins_till = $_POST['ins_till'];
    $skiil = $_POST['skiil'];
    $language = $_POST['language'];
    $experience = $_POST['experience'];
	$company=$_POST['company'];
    $position = $_POST['position'];
    $since = $_POST['since'];
    $till = $_POST['till'];

	global $sql;

	// insert seeker profile data
    $sql = "INSERT INTO createmyprofile(firstname,lastname,username, address1,address2,province,city,email,mobile,dob,gender,bio,qualification,institute,ins_since, ins_till,skiil,language,experience,company,position,since,till) VALUES('$firstname','$lastname','$username','$address1','$address2','$province','$city','$email',$mobile,'$dob','$gender','$bio','$qualification','$institute','$ins_since','$ins_till','$skiil','$language','$experience','$company','$position','$since','$till')";
	
	echo "<script>console.log(\"$sql\")</script>";
	$result = $conn->query($sql);

    if($result)
    {
        header('location: myProfile.php');
        //echo "Insert successfull";
        
    }
    else 
	{
        echo "<h1>Error!</h1>". $conn->error; 
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Create My Profile</title>
        
            <!---------Link to CSS style sheets------>
        
        <link rel="stylesheet" href="..\CSS\headerfooter.css">
        <link rel="stylesheet" href="..\css\createMyProfile.css">
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
	<section id="webpage">
		<section class="createProfile" id="Form">
			<h1 class="heading">Create My profile</h1>
			<h3 class= "sub-heading">Your dream is waiting for you <br> This this the best place to find your dream jobs</h3>
			<center>
				<img src="../images/editmyprofile.jpg" alt="image" class="src">
			</center>
		
			<form class="signup-form" method="post">
				
				<!-- form header -->
				<div class="form-header">
					<h1>Create My Profile</h1>
				</div>
			
				<!-- form body -->
				<div class="form-body">
		
					<!-- Firstname and Lastname -->
					<div class="horizontal-group">
						<div class="form-group left">
							
							<label for="firstname" class="label-title">First name </label>
							<input type="text" name="firstname" class="form-input" placeholder="enter your first name"  />
						</div>
						<div class="form-group right">
							<label for="lastname" class="label-title">Last name </label>
							<input type="text" name="lastname" class="form-input" placeholder="enter your last name" />
						</div>
					</div>
		
					<!-- User Name -->
					<div class="form-group">
						
						<label for="username" class="label-title">User Name</label>
						<input type="text" name="username" class="form-input" placeholder="enter your username" >
					</div>
		
					<!-- Address -->
					<div class="form-group">
						
						<label for="address1" class="label-title">Address</label>
						<input type="text" name="address1" class="form-input" placeholder="Street,P.O. Box,etc" >
						<br><br>
						<input type="text" name="address2" class="form-input" placeholder="Spt,Suite,Unite (Optional) ">
						
					</div>
		
					<!-- Province and City-->
					<div class="horizontal-group">
						<div class="form-group left">
							
							<label for="province" class="label-title">Province </label>
							<input type="text" name="province" class="form-input" placeholder="enter your city" />
						</div>
						<div class="form-group right">
							
							<label for="city" class="label-title">City </label>
							<input type="text" name="city" class="form-input" placeholder="enter your city" />
						</div>
					</div>
		
					<!-- Email -->
					<div class="form-group">
						
						<label for="email" class="label-title">Email</label>
						<input type="email" name="email" class="form-input" placeholder="enter your email">
					</div>
		
					<!-- mobile -->
					<div class="form-group">
						
						<label for="mobile" class="label-title">Mobile</label>
						<input type="mobile" name="mobile" class="form-input" placeholder="">
					</div>

					<div class="form-group">
						
						<label for="dob" class="label-title">Date Of Birth</label>
						<input type="date" name="dob" class="form-input" placeholder="">
					</div>

					<div class="form-group">
						
						<label for="gender" class="label-title">Gender</label>
						<input type="dob" name="gender" class="form-input" placeholder="">
					</div>
		
					<!--profile picture-->
					<div class="form-group" >
						
						<label for="choose-file" class="label-title">Upload Profile Picture</label>
						<br>
						<input type="file" name="profile" size="80">
						
					</div>
		
					<!-- Bio -->
					<div class="form-group">
						
						<label for="choose-file" class="label-title">Bio</label>
						<textarea class="form-input" name="bio" rows="4" cols="50" style="height:auto"></textarea>
					</div>
					<br><br>
					<hr>
					<br><br>
					<!-- Education -->
					<div class ="education" >
						<h3>Education </h3>
					</div>
					<!-- qulification -->
					<div class="form-group">
						
						<label for="qualification" class="label-title">Qualification</label>
						<textarea class="form-input" name="qualification" rows="4" cols="50" style="height:auto"></textarea>
					</div>
		
					<!-- Institute -->
					<div class="form-group">
						
						<label for="institute" class="label-title">Institute </label>
						<input type="text" name="institute" class="form-input" placeholder="enter your email">
					</div>
					
					<div class="horizontal-group">
						<div class="form-group left">
							
							<label for="since" class="label-title">Since </label>
							<input type="date" name="ins_since" class="form-input" placeholder="">
						</div>
						<div class="form-group right">
							
							<label for="since" class="label-title">Till </label>
							<input type="date" name="ins_till" class="form-input" placeholder="">
						</div>
					</div>
		
					<br>
					<hr>
					<br>
		
					<!-- Skiils & Languages -->
					<div class ="Skiils & Languages" >
						<h3>Skiils & Languages </h3>
					</div>
					<!-- Skiils -->
					<div class="form-group">
						
						<label for="skiil" class="label-title">Skiils </label>
						<textarea class="form-input" name="skiil" rows="4" cols="50" style="height:auto"></textarea>
					</div>
		
					<!-- Languages -->
					<div class="form-group">
						
						<label for="lang" class="label-title">Languages</label>
						<input type="text" name="language"  class="form-input" placeholder="">
					</div>
					
					<br>
					<hr>
					<br>
		
					<!-- Certificates -->
		
					<br>
					<div class="form-group" >
						
						<label for="choose-file" class="label-title">Certificates</label>
						<br>
						<input type="file" name="certificate" size="80">
					</div>
					
					
		
					<!-- My resume -->
		
					<br>
					<div class="form-group" >
						
						<label for="choose-file" class="label-title">My Resume</label>
						<br>
						<input type="file" name="resume" size="80">
					</div>
					
					<br>
					<hr>
					<br>
		
					<!-- experience -->
		
					<h3>Do you have work experience? </h3>
					<br>
					<div class="form-group">
						
						<label for="experience" class="label-title">Experience</label>
						<input type="text" name="experience"  class="form-input" placeholder="Yes or No">
					</div>
					<div class="form-group">
						
						<label for="company" class="label-title">Company Name</label>
						<input type="text" name="company" class="form-input" placeholder="" >
					</div>	
					
					<div class="form-group">
						
						<label for="position" class="label-title">Position</label>
						<input type="position" name="position" class="form-input" placeholder="">
					</div>
					
					<div class="horizontal-group">
						<div class="form-group left">
							
							<label for="since" class="label-title">Since </label>
							<input type="date" name="since" class="form-input" placeholder="">
						</div>
						<div class="form-group right">
							
							<label for="since" class="label-title">Till </label>
							<input type="date" name="till" class="form-input" placeholder="">
						</div>
		
		
			
				</div>
		
				<!-- form footer -->
				<div class="form-footer">
					<span></span>
					<button type="reset" class="btn" name="reset">Reset</button>
					<button type="submit" class="btn" name ="submit">Create</button>
				</div>
		
			</form>
		
		</section>
		
		
			
			<!---------FOOTER--------->
			
		
	</section>

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
   