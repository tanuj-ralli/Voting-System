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
  width:250px; 
  font-size:16px;
  font-weight:bold;
  font-family:"Arial Black", Gadget, sans-serif;
}
.sub:hover
{
   height:25px;
  width:250px; 	
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
  
<body data-spy="scroll" data-target="#navbar-scroll" style="color:#0033FF;" >
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

<center>
<h1 style="margin-top:40px;">DATA ENTRY </h1>
<pre style=" color:#0033FF; background-color:#33CCFF;">
<form name="f1" action="insert1.php" method="post">
Enter the details of the student,
<br>
   EMAIL : <input type="email" name="t1" value="" class="ema" required /><br>
PASSWORD : <input type="password" name="t2" class="ema" required /><br />
    NAME : <input type="text" name="t3" class="ema" required /><br />
 <input type="submit" name="b1" value="INSERT to data base." class="sub"/>

</form>
</pre>
</center>

<?php
if(isset($_POST['b1']))
{ 
   if(!empty($_POST['t1']) && !empty($_POST['t2']) && !empty($_POST['t3']))
   {
	$e=$_POST['t1'];
	$p=$_POST['t2'];
	$n=$_POST['t3'];
  $conn=new mysqli("localhost","root","","nitj");
  if($conn == true)
  {
     $sql = "INSERT INTO vote VALUES('$e','$p','$n')";
	 if($conn->query($sql) == true)
	 { 
	     echo"<h2><center>Inserted.</center></h2>";
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
 else
  {
		echo"<h3><center>Fill out Empty Fields.</h3></center>";  
  }

}
?>

</body>
</html>	