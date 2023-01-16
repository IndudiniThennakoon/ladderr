
<!DOCTYPE html>
<html>
    <head>
        <title>Company Profile</title>
        
        <!---------Link to CSS style sheets------>
        <link rel="stylesheet" href="..\CSS\headerfooter.css">
        <link rel="stylesheet" href="..\CSS\styleinsertProfiledata.css">
		
        <!--------external CSS style sheets-------->   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    </head>
        
    <body>

    <!--------external link for icons-------->
    <script src="https://kit.fontawesome.com/d9dc65a069.js" ></script>

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
	
		<?php
        //Linking the configuration file
        require 'config.php';

        $name = $_POST['C_name'];
        $field = $_POST['fields'];
        $address = $_POST['C_address'];
        $website = $_POST['C_url'];
        $email = $_POST['C_email'];
        $estYr = $_POST['C_estYr'];
        $CEO = $_POST['C_ceo'];
        $Phone = $_POST['C_phone'];
        $noOfemp = $_POST['C_noOfemp'];
        $logo = $_POST['C_logo'];
        $description = $_POST['C_description'];
        //Read recruiter data
        $Rfname = $_POST['Rfname'];
        $RLname = $_POST['RLname'];
        $Raddr = $_POST['Raddr'];
        $gender = $_POST['gender'];
        $NIC = $_POST['NIC'];
        $Post = $_POST['Post'];
        $Remail = $_POST['Remail'];
        $RpNo = $_POST['RpNo'];
        
    
        global $sql1;

        //insert company data
        $sql1 = "INSERT INTO company(companyName, field, headOfficeAddress, website,  establishedYear,hotline,CEOname,email,varNOE, description ) VALUES ('$name', '$field', '$address', '$website', $estYr, $Phone, '$CEO','$email', $noOfemp, '$description' )";
       
        //insert Recruiter data
        
        $sql2 = "INSERT INTO recruiter( firstName, lastName, address, gender, recNIC, recPosition,email,	mobileNum)  VALUES ('$Rfname', '$RLname', '$Raddr', '$gender', '$NIC', '$Post', '$Remail', $RpNo )";
        

        if($conn->query($sql1) && $conn->query($sql2)){

           // header("location:companyProfile.php");
           echo "<center><h1>Profile created successfully</h1></center>";

            echo"<center><h2><a href='companyProfile.php'>Go to profile</a><i class='fa-solid fa-arrow-up-right-from-square'></i></h2></center>";

            echo"<center><img src='../images/right-icon.png' alt='' ></center>";
        }
            
        else{
            echo "<h1>Error!</h1>". $conn->error;
        }

        //image upload
        if(isset($_POST['submit'])){
            $image =$_FILES['C_logo']['name'];
            $Type =$_FILES['C_logo']['type'];
            $Temp =$_FILES['C_logo']['tmp_name'];
            $size =$_FILES['C_logo']['size'];

            $imgExt = explode(".",$image);
            $allowEXT = strtolower(end($imgExt));
            $allow = array('jpg', 'jpeg', 'png');
            $dir ="../uploads/".$image;
            
            if(in_array($allowEXT,$allow)){
                if($size<1000000){
                      $sql3="insert into logo(logo) values('$image')" ; 
                      $result = mysqli_query($conn,$sql3);
                      move_uploaded_file($Temp,$dir);
                }
                else{
                    echo "image size too large!";
                }
            }
            else{
                echo "Your image extention can't upload!";
            }
            //print_r($image);
        }
        else{
            header("location:../HTML/companyForm.html");
        }


        $conn->close();

        ?>

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
   