<!DOCTYPE html>
<html>
<head>

<!-- /.website title -->
<title>NIT Jalandhar</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- CSS Files -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/css-index.css" rel="stylesheet" media="screen">
</head>
  
<body data-spy="scroll" data-target="#navbar-scroll">

<!-- /.preloader -->
<div id="preloader"></div>
<div id="top"></div>

<!-- /.parallax full screen background image -->
<div class="fullscreen landing parallax" style="background-image:url(images/logo101.jpg.jpg);" data-img-width="2000" data-img-height="1333" data-diff="100">
	
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
				
					<!-- /.logo -->
					<div class="logo wow fadeInDown"> <a href=""><img src="images/logo.gif" alt="logo" height="300"></a></div>

					<!-- /.main title -->
						<h1 class="wow fadeInLeft">
						VOTE!!! VOTE!! VOTE!
							</h1>

					<!-- /.header paragraph -->
					<div class="landing-text wow fadeInUp">
						<p>This time even better. Just login and choose your leader by casting your vote.<br>Because one vote can make a difference. </p>
					</div>				  

					<!-- /.header button -->
					<div class="head-btn wow fadeInLeft">
						<a href="#intro" class="btn-primary">About Us</a>
					</div>
	
		  

				</div> 
				
				<!-- /.signup form -->
				<div class="col-md-5">
				
					<div class="signup-header wow fadeInUp">
						<h3 class="form-title text-center">Login, To cast your vote.</h3>
						<form class="form-header" action="index.php" role="form" method="POST" id="#">
							<div class="form-group">
								<input class="form-control input-lg" name="MERGE1" id="name" type="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input class="form-control input-lg" name="MERGE0" id="email" type="password" placeholder="Password" required>
							</div>
							<div class="form-group last">
								<input type="submit" class="btn btn-warning btn-block btn-lg" name="t3" value="LOGIN">
							</div>
                            <?php
if(isset($_POST['t3']))
{
   if(!empty($_POST['MERGE1']) && !empty($_POST['MERGE0']))
   {		
   $e=$_POST['MERGE1'];
   $p=$_POST['MERGE0'];
   $conn=new mysqli("localhost","root","","nitj");
  if($conn == true)
  {
     $sql = "SELECT * FROM vote WHERE email='$e' and password='$p'";
	 if($result=$conn->query($sql))
	 { 
	    if($result->num_rows>0)
		{
		     while($rw=$result->fetch_array())
			 {
	                   session_start();
	                   $_SESSION['ps']=$rw[0];
	                   header('location:studentpage.php');									
			 }
		}
		else
		{
		     echo"<h2><center>No Record Found.</center></h2>";
		}
	 }
	 else
	 {
	     echo"<h2><center>Quary Problem.</center></h2>";
	 }
  }  
  else
  {
      echo"<h2><center>Connection not Established.</center></h2>";
  }
 }
 else
  {
		echo"<h3><center>Fill out Empty Fields.</h3></center>";  
  }

}
	
?>
							<p class="privacy text-center">We will not share your email and password. Read our <a href="privacy.php">privacy policy</a>.</p>
						</form>
					</div>				
				
				</div>
			</div>
		</div> 
	</div> 
</div>
 
<!-- NAVIGATION -->
<div id="menu">
	<nav class="navbar-wrapper navbar-default" role="navigation">
		<div class="container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand site-name" href="#top"><img src="images/logo.gif" alt="logo"></a>
			  </div>
	 
			  <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="#intro">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			  </div>
		</div>
	</nav>
</div>

<!-- /.intro section -->
<div id="intro">
	<div class="container">
		<div class="row">

		<!-- /.intro image -->
			<div class="col-md-6 intro-pic wow slideInLeft">
				<img src="images/logo102.jpg" alt="image" class="img-responsive">
			</div>	
			
			<!-- /.intro content -->
			<div class="col-md-6 wow slideInRight">
				<h2>Bhartiya Janta Party</h2>
				<p>Good marketing makes the company look smart. <a href="#">Great marketing</a> makes the customer feel smart, - Joe Chernov. Never doubt a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has, - Margaret Mead. The best way to predict the future is to create it, - Peter Drucker.
				</p>

					<div class="btn-section"><a href="#" class="btn-default">About...</a></div>
		
			</div>
		</div>			  
	</div>


<!-- /.feature 2 section -->
<div id="feature-2">
	<div class="container">
		<div class="row">
	
			<!-- /.feature content -->
			<div class="col-md-6 wow fadeInLeft">
				<h2>Indian National Congress</h2>
				<p>Good marketing makes the company look smart. <span class="highlight">Great marketing</span> makes the customer feel smart, - Joe Chernov. Never doubt a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has, - Margaret Mead. The best way to predict the future is to create it, - Peter Drucker.
				</p>

					<div class="btn-section"><a href="#" class="btn-default">About...</a></div>
		
			</div>
			  
			<!-- /.feature image -->
			<div class="col-md-6 feature-2-pic wow fadeInRight">
				<img src="images/logo103.png" alt="macbook" class="img-responsive">
			</div>				  
		</div>			  
  
	</div>
</div>
</div>

<!-- /.contact section -->
<div id="contact">
	<div class="contact fullscreen parallax" style="background-image:url(images/logo101.jpg.jpg);" data-img-width="2000" data-img-height="1334" data-diff="100">
		<div class="overlay">
			<div class="container">
				<div class="row contact-row">
				
					<!-- /.address and contact -->
					<div class="col-sm-5 contact-left wow fadeInUp">
						<h2><span class="highlight">Get</span> in touch</h2>
							<ul class="ul-address">
							<li><i class="pe-7s-map-marker"></i>Dr. B.R. Ambedkar National Institue of Technology, Amritsar Byepass Road, jalandhar,141011
							</li>
							<li><i class="pe-7s-phone"></i>0181 269 0301</li>
							<li><i class="pe-7s-mail"></i><a href="mailto:info@yoursite.com">nitj@gmail.com</a></li>
							<li><i class="pe-7s-look"></i><a href="#">www.nitj.ac.in</a></li>
							</ul>	
								
					</div>
					
					<!-- /.contact form -->
					<div class="col-sm-7 contact-right">
						<form method="POST" id="contact-form" class="form-horizontal" action="index.php" onSubmit="alert('Thank you for your feedback!');">
							<div class="form-group">
							<input type="text" name="name" id="Name" class="form-control wow fadeInUp" placeholder="Name" required/>
							</div>
							<div class="form-group">
							<input type="email" name="email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
							</div>					
							<div class="form-group">
							<textarea name="message" rows="20" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message" required></textarea>
							</div>
							<div class="form-group">
							<input type="submit" name="b2" value="Submit" class="btn btn-success wow fadeInUp" />
							</div>
						</form>		
					</div>
                    
                    <?php

if(isset($_POST['b2']))
{  
   if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']))
   {
   $na=$_POST['name'];
   $em=$_POST['email'];
   $me=$_POST['message'];
   $conn=new mysqli("localhost","root","","nitj");
  if($conn == true)
  {
     $sql = "SELECT * FROM vote WHERE email='$em'";
	 if($result=$conn->query($sql))
	 { 
	    if($result->num_rows>0)
		{
		     while($rw=$result->fetch_array())
			 {
					 $sql1= "UPDATE vote set email= '$rw[0]',password='$rw[1]',name='$rw[2]', vote='$rw[3]', enteredname='$na', message='$me' WHERE email='$rw[0]'";
					 if($conn->query($sql1)==true)
					 {
					   echo"<center><h2></h2></center>"; 
					 }
					 else
					 {
						echo"<h2><center>Second Quary Problem.</center></h2>";
					 } 
			  }
		}
		else
		{
		     $conn=new mysqli("localhost","root","","nitj");
			  if($conn == true)
			  {
				 $sql = "INSERT INTO vote VALUES('$em','','','','$na','$me')";
				 if($conn->query($sql) == true)
				 { 
					 echo"<h2><center> </center></h2>";		
				 }
				 else
				 {
					 echo"<h2><center>Not Inserted.</center></h2>";
				 }
			  }  
			  else
			  {
				  echo"<h2><center>Connection not Established.</center></h2>";
			  }
		}
	 }
	 else
	 {
	     echo"<h2><center>Quary Problem.</center></h2>";
	 }
  }  
  else
  {
      echo"<h2><center>Connection not Established.</center></h2>";
  }
}
else
  {
		echo"<h3><center>Fill out Empty Fields.</h3></center>";  
  }
}
	
?>

                    
                    
                    
                    
				</div>
			</div>
		</div>
	</div>
</div>
  
<!-- /.footer -->
<footer id="footer">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-4">	
			<div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright 2017 <a href="facecopy.php">NITJ</a></div>
			<a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
		</div>	
	</div>	
</footer>
	
	<!-- /.javascript files -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.sticky.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script>
		new WOW().init();
	</script>
  </body>
</html>