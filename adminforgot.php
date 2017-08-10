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
  width:170px; 
}
.log:hover
{
  border:0;
  color:#666666;
  background-color:#FFFFFF; 
  border-radius:4px;
  height:25px;
  width:170px; 
}
.sel
{
  height:25px;
  width:125px;
  border:0;
  border-radius:4px;
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

<!-- Colors -->
<link href="css/css-index.css" rel="stylesheet" media="screen">
<!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

<!-- Google Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

</head>
  
<body data-spy="scroll" data-target="#navbar-scroll">

<!-- /.preloader -->
<div id="preloader"></div>
<div id="top"></div>
 
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
                    <li><a href="mysql1.php">Home</a></li>
				    <li><a href="delete.php">Delete Account</a></li>
                    <li><a href="signup.php">Create Account</a></li>
                    <li><a href="facecopy.php">Logout</a></li>
                </ul>
			  </div>
		</div>
	</nav>
</div>

<?php
$e=$_GET['id'];
?>
<form name="f1" action="adminforgot.php?id=<?php echo $e; ?>" method="post">
<center>
<pre style="height:400px; background-color:#0cf;">
<br><br><br>
   <br>
  <input type="password" name="t2" placeholder="CURRENT PASSWORD" class="ema" required/><br>
  <input type="password" name="e1" placeholder="NEW PASSWORD" class="ema" required ><br>
  <input type="password" name="e2" placeholder="RE-TYPE NEW PASSWORD" class="ema" required >
   <br><br>
   <input type="submit" name="b1" value="Change Password" class="log">

</pre>
</center>
</form> 
<?php

if(isset($_POST['b1']))
{  
  if(!empty($_POST['t2']) && !empty($_POST['e1']) && !empty($_POST['e2']))
   {
   $np=$_POST['e1'];
   $nrp=$_POST['e2'];
   $p=$_POST['t2'];
   $conn=new mysqli("localhost","root","","nitj");
  if($conn == true)
  {
     $sql = "SELECT * FROM register WHERE email='$e' and password='$p'";
	 if($result=$conn->query($sql))
	 { 
	    if($result->num_rows>0)
		{
		     while($rw=$result->fetch_array())
			 {
			     						
					   if($np==$nrp)
                 {
					
						 $sql1= "UPDATE register set email= '$rw[0]',password='$np',name='$rw[2]', ques='$rw[3]', ans='$rw[4]' WHERE email='$rw[0]'";
					 if($conn->query($sql1)==true)
					 {
					   echo"<center><h2>New Password is saved.</h2></center>"; 
					 }
					 else
					 {
						echo"<h2><center>Second Quary Problem.</center></h2>";
					 }
			     }
			     else
			     {
				    echo"<center><h2>Password didn't Match, Enter New password again.</h2></center>";
			     }	 
				 
			  }
		}
		else
		{
		     echo"<h2><center>Check your Current Password.</center></h2>";
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