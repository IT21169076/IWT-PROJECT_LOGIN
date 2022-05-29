<?php

?>
<!DOCTYPE html>
<html>

    <head>
        <title> login </title>
        
        <!---------Link to CSS style sheets------>
        <link rel="stylesheet" href="../CSS/LOGIN.css">
        
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
                
                <button id="search-btn"><a href="index.html">Login</a></button>
                <button id="login-btn">Register</button>
                <div class="fas fa-bars" id="menu-btn"></div>
               
            </div>
            <!--------MENU slide------>
            <div class="MENU">

                <div class="box">
                    <a href="#home">Home</a> 
                </div>
                <div class="box">
                    <a href="#">Find a Job</a> 
                </div>
                <div class="box">
                    <a href="#">Find a Company</a>
                </div>
                
            </div>
        
           
        </header>
		<br><br><br><br><br><br><br><br>
        <!-------Header ends---->      

        <h2><div class="start">
            <center>
            <form class="login" action="../PHP/login.php" method="post">
              <p class="title">Login to your account</p><br>
              
              <div class="input-container">
              <i class="fa fa-user icon"></i>
             <input type="text" name="username" placeholder="Enter Your Username" autofocus/><br><br>
            </div>
              
             <div class="input-container">
             <i class="fa fa-envelope icon"></i>
              <input type="text" name="email" placeholder="Enter Your Email" /><br><br></div>

              <div class="input-container">
              <i class="fa fa-key icon"></i>
                 <input type="password" name="password" placeholder="Enter Your Pasword" /><br></div>
              
              <button type="submit" name="login" class="btn">login</button><br><br>

             <a href="../HTML/createaccount.html">don't have an account?</a><br><br>
			 <a href="../HTML/forgot.html">Forgot passord</a></li>
              </form></center>
        </div></h2>  </div>



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
