<!DOCTYPE html>
<html>

<style>
#aa1
{
  background-color:#0CF;
  height:350px;
  width:100%;
  float:left;
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
				<a class="navbar-brand site-name" href="#top"><img src="images/logo.gif" alt="logo"></a>
			  </div>
	 
			  <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="index.php">HOME</a></li>
				</ul>
			  </div>
		</div>
	</nav>
</div>

<br><br>
<div id="aa1">
<form name="f1" action="facecopy.php" method="post">

<center>
      <br>
<table border="0" cellpadding="30" cellspacing="20" align="center">
     <tr>
     <td height="50px">
        <input type="email" name="t1" placeholder="EMAIL" class="ema"/>
     </td>   
     </tr>
     <tr>
     <td height="50px">
       <input type="password" name="t2" placeholder="PASSWORD" class="ema"/>
     </td>   
     </tr>
     <tr>
     <td>
     <div style="width:170px;height:35px; float:left;">
     </div>
       <input type="submit" name="t3" value="login" class="log"/><br>
       <a href="forg.php"><font style="font-size:9px; color:#000000;">forgot password??</font></a><br>
     </td>   
     </tr>
   </table>
      
   
   
</center>  
</form>
</div aa1>
<?php
if(isset($_POST['t3']))
{
   if(!empty($_POST['t1']) && !empty($_POST['t2']))
   {	
   $e=$_POST['t1'];
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
					   session_start();
					   $_SESSION['e']=$rw[0];
					   header('location:mysql1.php');	 
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