<?php
session_start();
error_reporting(0);
include('includes/config.php');?><!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width,intial-scale=1.0">
	<title> Student Login </title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
      <section class="header">
      	<nav>
      		<a href="project1.html"><img src="images/logo2.jpg"> </a>
      		<div class="nav-links">
      			<ul>
      				<li><a href="">HOME</a></li>
      				<li><a href="admin.php">ADMIN</a></li>
      				<li><a href="">ABOUT</a></li>

      			</ul>
      		</div>		


      	</nav> 

<div class="form-box"> 
	<h1>Student Login</h1>




                           

                                <form action="result.php" method="post">
	<div class="input-box">
		<input type="text" name="rollid" placeholder="USN">
	</div>
<div class="input-box">

		<input type="password" name="class" placeholder="class" Id="myInput">


		



		<span class="eye" onclick="myfunction()">
		<i id="hide1" class="fa fa-eye"></i>
		<i id="hide2" class="fa fa-eye-slash"></i>
	</span>
</div>
<a href="#"> Forgot Password?</a>

<button type="button" class="Login-btn">LOGIN</button>

  
</div> 

                                </form>

 


      </section>

    <script>
  	function myfunction(){
  		var x =document.getElementById("myInput");
  		var y =document.getElementById("hide1");
  		var z =document.getElementById("hide2");

  		if(x.type==='password'){
  			x.type="text";
  			y.style.display="block";                                                                                                                                           
  			z.style.display="none";

  		}
  		else{
  			x.type="password";
  			y.style.display="none";
  			z.style.display="block";
  		}

  	}
  </script>


      <!--------------footer--->

       <footer>
        <div class="main-content">
          <div class="left-box">
           <h2>About us</h2>
           <div class="content">
           	<p>The evaluation process is carried
           	hello rockstar for more updates 
           
           </p>
           	<div class="social">
           		<a href="https://www.facebook.com/akhileshreddy.ravula"><span class="fa fa-facebook-f"></span></a>
           		<a href="https://twitter.com/ReddyAkhilesh92"><span class="fa fa-twitter"></span></a>
           		<a href="https://www.instagram.com/akhilesh__reddy/"><span class="fa fa-instagram"></span></a>
           		<a href="#"><span class="fa fa-youtube"></span></a>
           	</div>
           </div>
         </div>

         <div class="center-box">
         	<h2>Adress</h2>
         	  <div class="content">
         	  	<div class="place">
         	  		<span  class="fas fa-bullseye"></span>
         	  		<span class="text">Hydearbad,Telangana</span>
         	  	</div>
         	  	<div class="phone">
         	  		<i class="fas fa-cog fa-spin"></i>
         	  		<span class="text">+0908456783</span>
         	  	</div>
         	  	<div class="email">
         	  		<i class="fas fa-cog fa-spin"></i>
         	  		<span class="text">abcv@gmal.com</span>
         	  	</div>
         	  </div>
         	</div>
         	<div class="right box">
         		<h2> contact us </h2>
         		<div class="content">
         			<form action="#">
         				<div class="email">
         					<div class="text">Email</div>
         					<input type="email" required>
         				</div>
         				<div class="msg">
         					<div class="text">Message</div>
         					<textarea rows="2" cols="25" required></textarea>
         				</div>
         				<div class="btn">
         					<button type="submit">Send</button>
         				</div>
         			</form>
         		</div>
         	</div>





         	</div>
         </div>



               


                    



       </footer>




      		
      		

     




      


</body>
</html>