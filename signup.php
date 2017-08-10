<!DOCTYPE html>
<html>
<style>
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
                    <li><a href="delete.php">Delete Account</a></li>
                    <li><a href="facecopy.php">Logout</a></li>
				</ul>
			  </div>
		</div>
	</nav>
</div>
<form name="f1" action="signup.php" method="post">
<center>
<pre style="background-color:#0CF; height:450px;">
<br><br><br>
Email          :<input type="email" name="e1" class="ema" required><br>
Password       :<input type="password" name="e2" class="ema" required ><br>
Retype-Password:<input type="password" name="e3" class="ema" required ><br>
Name           :<input type="text" name="e4" class="ema" required ><br><br>
		<select name="e5" class="ema">
				    <option>Security Question</option>
					<option>Favourite Book</option>
					<option>Favourite Place</option>
			    </select><br>
Answer         :<input type="text" name="e6" class="ema" required ><br>
                <input type="submit" name="b1" value="SUBMIT" class="log">
</pre>
</center>
</form>
<?php
if(isset($_POST['b1']))
{
  if(!empty($_POST['e1']) && !empty($_POST['e2']) && !empty($_POST['e3']) && !empty($_POST['e4']) && !empty($_POST['e6']))
  {	
  $e=$_POST['e1'];
  $p=$_POST['e2'];
  $rp=$_POST['e3'];
  $n=$_POST['e4'];
  $q=$_POST['e5'];
  $a=$_POST['e6'];
  if($p==$rp)
  {
      $conn=new mysqli("localhost","root","","nitj");
	  if($conn == true)
	  {
		 $sql = "INSERT INTO register VALUES('$e','$p','$n','$q','$a')";
		 if($conn->query($sql) == true)
		 { 
			 echo"<h2><center>Account Created</center></h2>";
		 }
		 else
		 {
			 echo"<h2><center>Not Signed In.</center></h2>";
		 }
	  }  
	  else
	  {
		  echo"<h2><center>Connection not Established.</center></h2>";
	  }
  }
  else
  {
      echo"<h2><center>Password did not match, Enter again.</center></h2>";
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