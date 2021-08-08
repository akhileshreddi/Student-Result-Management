<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}

}

?>



<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width,intial-scale=1.0">
	<title> Admin Login </title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <link  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
      <section class="sub-header">
      	<nav>
      		<a href="project1.html"><img src="images/admin1.jpg"> </a>
      		<div class="nav-links">
      			<ul>
      				<li><a href="find-result.php ?>">HOME</a></li>
      				<li><a href="">ADMIN</a></li>
      				<li><a href="">ABOUT</a></li>

      			</ul>
      		</div>		


      	</nav> 

<div class="form-box"> 
	<h1>Admin</h1>

	  <form class="form-horizontal" method="post">
	<div class="input-box">
		<input type="text" name="username" placeholder="UserName">
	</div>
<div class="input-box">

		<input type="password" name="password"  placeholder="Password" Id="myInput">
		<span class="eye" onclick="myfunction()">
		<i id="hide1" class="fa fa-eye"></i>
		<i id="hide2" class="fa fa-eye-slash"></i>
	</span>
</div>
<a href="#"> Forgot Password?</a>


<div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">

                                                    			<button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    		</div>
                                                    	</div>


         </form>                                           	




  
</div> 

 


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