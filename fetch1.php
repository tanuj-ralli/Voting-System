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
  
<body data-spy="scroll" data-target="#navbar-scroll" style=" color:#0033FF; background-color:#33CCFF;">
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
                    <li><a href="facecopy.php">Logout</a></li>
				</ul>
			  </div>
		</div>
	</nav>
</div>
<form name="f1" action="fetch1.php" method="post">
    <center>
	<br/><br><br><br>
	Enter the Email whose information is needed : <input type="email" name="t1" class="ema" required /><br /><br/> 
	<input type="submit" name="b1" value="SUBMIT" class="sub"/><br/><br>
    </center>
</form>

<?php
if(isset($_POST['b1']))
{
  if(!empty($_POST['t1']))
  {	
  $e=$_POST['t1'];
  $conn=new mysqli("localhost","root","","nitj");
  if($conn == true)
  {
     $sql = "SELECT * FROM vote WHERE email='$e'";
	 echo"<center><table border=2 cellpadding=5 cellspacing=3>";
	 echo"<th>Email<td>Password</td><td>Name</td><td>Vote</td><td>Entered Name</td><td>Message</td></th>";
	 if($result=$conn->query($sql))
	 { 
	    if($result->num_rows>0)
		{
		     while($rw=$result->fetch_array())
			 {
			     echo"<tr align=center><td>".$rw[0]."</td><td>".$rw[1]."</td><td>".$rw[2]."</td><td>".$rw[3]."</td><td>".$rw[4]."</td><td>".$rw[5]."</td></tr>";				 
			 }
			 
		}
		else
		{
		     echo"<h2>No Record Found.</h2>";
			 
		}
	 }
	 else
	 {
	     echo"<h2>Quary Problem.</h2>";
	 }
  }  
  else
  {
      echo"<h2>Connection not Established.</h2>";
  }
 }
 else
  {
		echo"<h3><center>Fill out Empty Fields.</h3></center>";  
  }

}
?>

	
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