<?php
require 'config.php';
$companyID=$_GET['GETID'];
$query= "select * from company where companyID ='".$companyID."'";

$result =mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){
        $compID = $row['companyID'];
        $name = $row['companyName'];
        $field = $row['field'];
        $address = $row['headOfficeAddress'];
        $website = $row['website'];
        $email = $row['email'];
        $estYr = $row['establishedYear'];
        $CEO = $row['CEOname'];
        $Phone = $row['hotline'];
        $noOfemp = $row['varNOE'];
        $logo = $row['logo'];
        $description = $row['description'];
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Create Company profile</title>
        
        <!---------Link to CSS style sheet------>
        <link rel="stylesheet" href="..\CSS\style.css">
        <link rel="stylesheet" href="..\CSS\headerfooter.css">
        <link rel="stylesheet" href="../CSS/styleCompanyform.css">
        
        <!--------external link for icons-------->
        <script src="https://kit.fontawesome.com/d9dc65a069.js" ></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
        
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
	
        
        <section id="page">
        

        <!----Company Form starts---->
        
            <section class="Form" id="Form">
                <h1 class="heading">Update Company profile</h1>
                
                <center>
                    <img src="../images/office.gif" alt="" class="src">
                </center>
                
                <form method="post" action="update.php?ID=<?php echo  $compID?>">
            
                    <div class="inputBox">
                        <div class="input">
                            <span>Company Name</span>
                            <input type="text" name="C_name" placeholder="enter your company name" value = "<?php echo $name?>">
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>Field</span>
                            <input list="fields" name="fields" placeholder="Select relevent field" value = "<?php echo $field?>">
                                <datalist id="fields">
                                    <option value="IT">
                                    <option value="Construction">
                                    <option value="Security">
                                    <option value="Education">
                                    <option value="Food & beverages">
                                    <option value="Hotel & Tuorism">
                                    <option value="Agriculture">
                                    <option value="Engineering">
                                    <option value="Management">
                                    <option value="Textile & apparal">
                                </datalist>
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>Company Address</span>
                            <textarea name="C_address" rows="5" cols="30" required   ><?php echo $address?>
                                </textarea>
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>website</span>
                            <input type="url" name="C_url" value = "<?php echo $website?>" placeholder="enter your company website URL">
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>Email</span>
                            <input type="text" name="C_email" value = "<?php echo $email?>" placeholder="enter your company email" required>
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>Establishes Year</span>
                            <input type="number"  name="C_estYr" min="1900" max="2022" step="1" value = "<?php echo $estYr?>">
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>CEO name</span>
                            <input type="text" name="C_ceo" value = "<?php echo $CEO?>"placeholder="enter your CEO name" required>
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>Contact number</span>
                            <input type="phone" name="C_phone" pattern="[0-9]{10}" placeholder="0372249568" value = "<?php echo $Phone?>"required>
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>No of Employees</span>
                            <input type="number" name="C_noOfemp" value = "<?php echo $noOfemp?>" placeholder="">
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>Add company Logo</span>
                            <input type="file" name="C_logo" id="logo" value = "<?php echo $logo?>"onchange="logoValidation()" >
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>Description</span>
                            <textarea name="C_description" rows="5" cols="30" ><?php echo $description?>"
                                </textarea>
                        </div>
                    </div>
                </div>
                
                <div class="nxt-btn-box">
                    
                   

                    <!------Update button-->
                    <button id="button" name="update" type="submit">Update</button>
                
                </div>
            </form>
                
            </section>
        </section>
            <!----Company Form ends---->


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
                        <li><a href="t&c.html">Terms & Conditions</a></li>
                    </ul>
            </div>

            <!---------Social Media Icons--------->
            <div class="col2">
                <ul>
                    <li><a href=""><i class="fa-solid fa-envelope"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><i class="fa-brands fa-instagram-square"></i></a></li>
                    <li><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
                <p id="ALLRIGHTS">2022 ladderr. All Rights Reserved.</p>
            </div>
            
        </div>
        
    </footer>
    <!----------footer ends------>

    <script src="../JS/script.js"></script>
    <script src="../JS/scriptCompanyform.js"></script>
    
    </body>
</html>

