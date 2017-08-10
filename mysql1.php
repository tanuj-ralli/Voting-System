<!DOCTYPE html>
<html>
<style>
.head
{
  color:#0033FF;
  background-color:#00CCFF;
}
.sub
{
  color:#0033FF;
  background-color:#33CCFF;
  border:#0033FF;
  border:solid;
  border-width:2px;
  border-radius:5px;
   height:25px;
  width:100px; 
  font-size:16px;
  font-weight:bold;
  font-family:"Arial Black", Gadget, sans-serif;
}
.sub:hover
{
   height:25px;
  width:100px; 	
  color:#33CCFF;
  background-color:#0033FF;
  border:#FF0000;
  border:solid;
  border-width:2px;
  border-radius:5px;
  font-size:16px;
  font-weight:bold;
  font-family:"Arial Black", Gadget, sans-serif;
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
                    <li><?php
					session_start();
                    $e = $_SESSION['e'];
                    echo"<a href=adminforgot.php?id=".$e.">Change Password</a>";
					?></li>
                    <li><a href="delete.php">Delete Account</a></li>
                    <li><a href="signup.php">Create Account</a></li>
                    <li><a href="facecopy.php">Logout</a></li>
				</ul>
			  </div>
		</div>
	</nav>
</div>

    <center><h2 class="head">STUDENT RECORD</h2></center>
<body style="font-size:20px; color:#0033FF;">
<center>
<pre style="background-color:#0CF; height:400px;">
<br />
<form name="f1"  method="post">
<input type="radio" name="c1" value="insert" /> INSERT DATA<br />
<input type="radio" name="c1" value="fetch" /> FETCH DATA <br />
<input type="radio" name="c1" value="delete" /> DELETE DATA<br />
<input type="radio" name="c1" value="update" /> UPDATE DATA<br />
<input type="radio" name="c1" value="view" />  VIEW  DATA<br /><br /><br />	
<input type="submit" name="b1" value="SELECT" class="sub"/> </form> 
</pre>
</center>
<?php
if(isset($_POST['b1']))
{
	if(!empty($_POST['c1']))
	{
		$choice=$_POST['c1'];
		session_start();
		$ee=$_SESSION['e'];
	
		switch($choice)
		{
			case "insert":
			{ 
				//echo"<a href=insert1.php></a>";
				header('location:insert1.php');
				break;
			}	
			case "fetch":
			{
				//echo"<a href=fetch1.php></a>";
				header('location:fetch1.php');
				break;
			}
			case "delete":
			{
				header('location:delete1.php');
				break;
			}
			case "update":
			{
				header('location:update1.php');
				break;
			}
			case "view":
			{
				header('location:view1.php');
				break;
			}
		}
   }
  else
  {
		echo"<h3><center>Choose any Option.</h3></center>";  
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