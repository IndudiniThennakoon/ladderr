<!DOCTYPE html>
<html>

	<head>
        <title> feedback </title>
        
        <!---------Link to CSS style sheets------>
        <link rel="stylesheet" href="../CSS/headerfooter.css">
		<link rel="stylesheet" href="../CSS/feedback.css">
		
        
        <!--------external CSS style sheets-------->   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--------external link for icons-------->
        <script src="https://kit.fontawesome.com/d9dc65a069.js" ></script>

    </head>
    <body>
<div class id="container">
		<span class="fa fa-star fa-fw"></span>
		<span class="fa fa-star fa-fw"></span>
		<span class="fa fa-star fa-fw"></span>
		<span class="fa fa-star fa-fw"></span>
		<span class="fa fa-star fa-fw"></span>
</div>

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
	

	<div class="feedback-title">
        <center><form action="feedbackphp.php" method="POST" >
        <h1>Feedback Form</h1><br><br><br>
        <div class="p1"><br><br>
        <p>We’d love to know more about your experience at our website.
            Filling out this short form can help us improve our practices and know
            More about how we provide the best for you.
        </p></div><br><br><br></center>
    </div>
    <center>
       <div class="feedback-form">
            <form id="feedback-form" action="../PHP/feedbackphp.php">
            <hr class="solid">
            <input name="Name" type="text" class="form-control" placeholder="Name"required>
            <br><br>
            <hr class="solid">
            <input name="Email" type="E-mail" class="form-control" placeholder="Email" required>
            <br><br>
            <hr class="solid">
            <input name="Tele" type="Telephone" class="form-control" placeholder="Telephone" required>    
            <br><br>
            <hr class="solid">
            <input name="Prf" type="Proffession" class="form-control" placeholder="Proffession" required>
            <br><br>
            <hr class="solid">
            <input name="Des" type="Description" class="form-control" placeholder="Description"  required>
            <br>
                <textarea name="msg" class="form-control" rows="4">  </textarea>
        <hr class="solid">
        <button value="submit" id="send" name= "feedback" type="submit" class="Btn1" onclick="ValidatinCDetails()">Send</button>
        </form>
        </div></center><br><br><br>
    
        
        <center>
            <div class="upload">
                <button type="button" class="btn-warning">
                <i class="fa fa-upload"></i>Upload From Device  
                <input type="file">
                </button>
            </div><br><br>
            <div class ="p2">
            <h2>Rate us on a scale of 1 to 5 stars on the following aspects.</h2> 
        </div>  
        </center>
       
                       

        <!--<div class="container">-->


 <center> 
<fieldset class="rate">
    <h3 class="name">Proffessionalism</h3>
    <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
    <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
    <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
    <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
    <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
    <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
    <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
    <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
    <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
    <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
    <input type="radio" id="rating0" name="rating" value="0" /><label for="rating0" title="No star"></label>
</fieldset><br>
<fieldset class="rate">
    <h3 class="name">Responsiveness</h3>
    <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
    <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
    <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
    <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
    <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
    <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
    <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
    <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
    <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
    <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
    <input type="radio" id="rating0" name="rating" value="0" /><label for="rating0" title="No star"></label>
</fieldset><br>
<fieldset class="rate">
    <h3 class="name">Alternativeness</h3>
    <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
    <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
    <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
    <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
    <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
    <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
    <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
    <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
    <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
    <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
    <input type="radio" id="rating0" name="rating" value="0" /><label for="rating0" title="No star"></label>
</fieldset><br>
<fieldset class="rate">
    <h3 class="name">Accuracy</h3>
    <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
    <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
    <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
    <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
    <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
    <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
    <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
    <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
    <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
    <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
    <input type="radio" id="rating0" name="rating" value="0" /><label for="rating0" title="No star"></label>
</fieldset></center>



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