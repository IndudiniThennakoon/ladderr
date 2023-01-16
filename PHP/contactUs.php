<!DOCTYPE html>
<html>

    <head>
        <title> Home </title>
        
        <!---------Link to CSS style sheets------>
        <link rel="stylesheet" href="../CSS/headerfooter.css">
        <link rel="stylesheet" href="../CSS/contactUs.css">
        
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
	

        <br>
        
            <center><h1 class="Ttxtstyle">Contact us</h1>
                <img src="../images/contact us.jpg" width="350" height="263" alt="Klematis">

            
                <!--<div class="box">-->
                    <h1>Send Us a Message</h1>
                    <br><br>
                    <p>Send us a message we will respond within 24 hours. Check our FAQ's fprf more questions been answered.</p>
                    <br><br></center>
          <div class="ContactBody">
                <section style="width:70%">
          <div id="formStyle1">
               <form action="../PHP/contactUsphp.php" method="POST">
                   <fieldset>
                      <br><br>
                           <label name="name"for="Name">Name:</label>
                           <input type="text" name="name" id="name" placeholder="Enter name here..." required>
                           
                           <label name="email"for="Email">Email:</label>
                           <input type="text" name="email" id="email" placeholder="Enter email" required>
                           
                           <label name="Telephone"for="Telephone">Telephone:</label>
                           <input type="text" name="Tele" id="Telephone" placeholder="Enter Telephone" required>
                           
                           <label name="msg" for="message">Message:</label><br>
                           <textarea name="msg" id="message" placeholder="Your message here"></textarea>
                           
                           <button value="submit" id="send" name= "contact" type="submit" class="Btn1" onclick="ValidatinCDetails()">Send</button>
                       
                   </fieldset>
               </form>
           </div> 
           </section><br><br>
        </div> 
          <center><section style="width:30%" >
           <div id="formStyle2">
              <form>
                   <fieldset>
                       <center><h1 class="style2">Contact information</h1></center><br><br>
                       <img class="img1" src="../images/contact1.png">011-1111111
                       <img class="img2" src="../images/contact2.jpeg">ladderrcompany@gmail.com
                   </fieldset>
               </form>
           </div>
           </section></center> 
        
    
           
       <br><br>

        
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
        <!--<script src="../JS/script.js"></script>-->
    </body>

</html>