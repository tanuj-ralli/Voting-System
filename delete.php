<!DOCTYPE html>
<html>
<style>
.head
{
  color:#00CCFF;
  background-color:#0033FF;
}
.sub
{
  color:#0033FF;
  background-color:#33CCFF;
  border:#0033FF;
  border:solid;
  border-width:2px;
  border-radius:5px;
  

}
.sub:hover
{
  color:#33CCFF;
  background-color:#0033FF;
  border:#FF0000;
  border:solid;
  border-width:2px;
  border-radius:5px;
  bo
}
.ema
{
  width:250px;
  height:30px;
  padding-left:5px;
  border-radius:5px;
}
.log
{
  border:0;
  color:#000;
  background-color:#CCCCCC; 
  border-radius:4px;
  height:25px;
  width:70px; 
}
.log:hover
{
  border:0;
  color:#000;
  background-color:#FFFFFF; 
  border-radius:4px;
  height:25px;
  width:70px; 
}

</style>
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
				<a class="navbar-brand site-name" href="index.php"><img src="images/logo.gif" alt="logo"></a>
			  </div>
	 
			  <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
				<ul class="nav navbar-nav">
                    <li><a href="mysql1.php">Home</a></li>
                    <li><?php
					session_start();
                    $e = $_SESSION['e'];
                    echo"<a href=adminforgot.php?id=".$e.">Change Password</a>";
					?></li>
                    <li><a href="signup.php">Create Account</a></li>
                    <li><a href="facecopy.php">Logout</a></li>
				</ul>
			  </div>
		</div>
	</nav>
</div>

<form name="f1" action="delete.php" method="post">
<center>
<pre style="background-color:#0CF; height:350px;">
<br><br><br>
Email          :<input type="email" name="e1" class="ema" required><br>
Password       :<input type="password" name="e2" class="ema" required ><br>
Are you sure u want to delete ??

<input type="submit" name="e3" value="CONFIRM" class="log">

</pre>
</center>
</form>

<?php
if(isset($_POST['e3']))
{
  if(!empty($_POST['e1']) && !empty($_POST['e2']))	
  $e=$_POST['e1'];
  $p=$_POST['e2'];
  $conn=new mysqli("localhost","root","","nitj");
  if($conn == true)
  {
     $sql = "SELECT * FROM register WHERE email='$e'";
	 if($result=$conn->query($sql))
	 { 
	    if($result->num_rows>0)
		{
		     while($rw=$result->fetch_array())
			 {
			   if($rw[1]==$p)
			   {
			     $sql1= "DELETE FROM register WHERE email='$e'";
				 if($conn->query($sql1)==true)
				 {
				    echo"<h2><center>Account Deleted.</center></h2>";
				 }
				 else
				 {
				    echo"<h2><center>Account NOT Deleted.</center></h2>";
				 }
			   }
				 else
				 {
				     echo"INVALID EMAIL ID OR PASSWORD";
				 }	 
			 }
		}
		else
		{
		     echo"<h2><center> Email Doen't EXIST.</center></h2>";
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

<!-- /.footer -->
<footer id="footer">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-4">	
			<div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright 2017 <a href="#">NITJ</a></div>
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