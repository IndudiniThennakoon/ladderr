
<!DOCTYPE html>
<html>
    <head>
        <title>My Profile</title>
        
            <!---------Link to CSS style sheets------>
        
        
        <link rel="stylesheet" href="..\CSS\headerfooter.css">
        <link rel="stylesheet" href="..\css\myProfile.css">
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
	
    <?php
        require 'config.php';
    
        $sql="SELECT * from createmyprofile where id = (select max(id) from createmyprofile)";
        //echo "<script>console.log(\"$sql\")</script>";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            //read data
            if($row = $result->fetch_assoc()){
                $id = $row["id"];

    ?>          
    <section id="webpage">
        <section class="myPofile" id="Form" >
            <h1 class="heading">My Profile</h1>
            <h3 class= "sub-heading">Your dream is waiting for you <br> This this the best place to find your dream jobs</h3>
            <center>
                <img src="../images/myprofile.png" alt="image" class="src">
            </center>
        
            <form class="signup-form"  method="post">
                
                <!-- form header -->
                <div class="form-header">
                    <h1>My Profile</h1>
                </div>
            
                <!-- form body -->
                <div class="form-body">
        
                    <!-- Firstname and Lastname -->
                    <div class="horizontal-group">
                        <div class="form-group left">
                            <label for="firstname" class="label-title">First name </label>
                            <input type="text" name="firstname" class="form-input"  value = "<?php echo $row['firstname']?>" />
                        </div>
                        <div class="form-group right">
                            <label for="lastname" class="label-title">Last name </label>
                            <input type="text" name="lastname" class="form-input"value = "<?php echo $row['lastname'];?>"  />
                        </div>
                    </div>
        
                    <!-- User Name -->
                    <div class="form-group">
                        
                        <label for="username" class="label-title">User Name</label>
                        <input type="text" name="username" class="form-input" value = "<?php echo $row ['username'];?>"  >
                    </div>
        
                    <!-- Address -->
                    <div class="form-group">
                        
                        <label for="address1" class="label-title">Address</label>
                        <input type="text" name="address1" class="form-input" value = "<?php echo $row ['address1'];?>"  >
                        <br><br>
                        <input type="text" name="address2" class="form-input" value = "<?php echo $row ['address2'];?>" >
                        
                    </div>
        
                    <!-- Province and City-->
                    <div class="horizontal-group">
                        <div class="form-group left">
                            
                            <label for="province" class="label-title">Province </label>
                            <input type="text" name="province" class="form-input"  value = "<?php echo $row ['province'];?>" />
                        </div>
                        <div class="form-group right">
                            
                            <label for="city" class="label-title">City </label>
                            <input type="text" name="city" class="form-input" value = "<?php echo $row ['city'];?>"  />
                        </div>
                    </div>
        
                    <!-- Email -->
                    <div class="form-group">
                        
                        <label for="email" class="label-title">Email</label>
                        <input type="email" name="email" class="form-input" value = "<?php echo $row ['email'];?>"  >
                    </div>
        
                    <!-- mobile -->
                    <div class="form-group">
                        
                        <label for="mobile" class="label-title">Mobile</label>
                        <input type="mobile" name="mobile" class="form-input" value = "<?php echo $row ['mobile'];?>" >
                    </div>
        
                    <!-- Bio -->
                    <div class="form-group">
                        
                        <label for="choose-file" class="label-title">Bio</label>
                        <textarea class="form-input" name="bio" rows="4" cols="50" style="height:auto" value = "<?php echo $row ['bio'];?>" ></textarea>
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
                        <textarea class="form-input" name="qualification" rows="4" cols="50" style="height:auto" value = "<?php echo $row ['qualification'];?>" ></textarea>
                    </div>
        
                    <!-- Institute -->
                    <div class="form-group">
                        
                        <label for="institute" class="label-title">Institute </label>
                        <input type="institute" name="institute" class="form-input" value = "<?php echo $row ['institute'];?>"  >
                    </div>
                    
                    <div class="horizontal-group">
                        <div class="form-group left">
                            
                            <label for="since" class="label-title">Since </label>
                            <input type="date" name="ins_since" class="form-input" value = "<?php echo $row ['ins_since'];?>" >
                        </div>
                        <div class="form-group right">
                            
                            <label for="since" class="label-title">Till *</label>
                            <input type="date" name="ins_till" class="form-input"  value = "<?php echo $row ['ins_till'];?>" >
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
                        <textarea class="form-input" name="skiil" rows="4" cols="50" style="height:auto"  value = "<?php echo $row ['skiil'];?>" ></textarea>
                    </div>
        
                    <!-- Languages -->
                    <div class="form-group">
                        
                        <label for="lang" class="label-title">Languages</label>
                        <input type="lang" name="language"  class="form-input" value = "<?php echo $row ['language'];?>">
                    </div>
                    
        
                    <!-- experience -->
        
                    <h3>Do you have work experience? </h3>
                    <br>
                    
                    <div class="form-group">
                        
                        <label for="experience" class="label-title">Experience </label>
                        <input type="text" name="experience" class="form-input"  value = "<?php echo $row ['experience'];?>">
                    </div>
                    <div class="form-group">
                        
                        <label for="company" class="label-title">Company Name</label>
                        <input type="text" name="company" class="form-input"  value = "<?php echo $row ['company'];?>" >
                    </div>	
                    
                    <div class="form-group">
                        
                        <label for="position" class="label-title">Position</label>
                        <input type="position" name="position" class="form-input"  value = "<?php echo $row ['position'];?>">
                    </div>
                    
                    <div class="horizontal-group">
                        <div class="form-group left">
                            
                            <label for="since" class="label-title">Since </label>
                            <input type="date" name="since" class="form-input"  value = "<?php echo $row ['since'];?>">
                        </div>
                        <div class="form-group right">
                            
                            <label for="since" class="label-title">Till </label>
                            <input type="date" name="till" class="form-input" value = "<?php echo $row ['till'];?>" >
                        </div>
                </div>
        
                <!-- form footer -->
                <div class="form-footer">
                    <span></span>
                    
                    <button type="myjob" class="btn" name="myjob "><a href="../HTML/AppliedJobs.html">My Jobs</a></button>
                    <button type="edit" class="btn" name ="edit"> <a href="../PHP/updateMyProfile.php?GETID=<?php echo $id?>" >Edit</a></button>
                    <button type="delete" class="btn" name ="delete"><a herf = "../PHP/deleteMyProfile.php? GETID=<?php echo $id?>"> Delete<a></button>
                </div>
        
            </form>
        
        </section>
        
    </section>
    <?php
        }                 
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
