<html>
<body>
<form name="f1" action="signup2.php" method="post">
<center>Password did</center>
<pre>
Email          :<input type="email" name="e1"><br>
Password       :<input type="password" name="e2" ><br>
Retype-Password:<input type="password" name="e3" ><br>
Name           :<input type="text" name="e4" ><br><br>
		<select name="e5">
				    <option>Security Question</option>
					<option>Favourite Book</option>
					<option>Favourite Place</option>
			    </select><br>
Answer         :<input type="text" name="e6" ><br>
                <input type="submit" name="b1" value="SUBMIT">
</pre>
</form>
<?php
if(isset($_POST['b1']))
{
  $e=$_POST['e1'];
  $p=$_POST['e2'];
  $rp=$_POST['e3'];
  $n=$_POST['e4'];
  $q=$_POST['e5'];
  $a=$_POST['e6'];
  if($p==$rp)
  {
      $conn=new mysqli("localhost","root","","facecopy");
	  if($conn == true)
	  {
		 $sql = "INSERT INTO register VALUES('$e','$p','$n','$q','$a')";
		 if($conn->query($sql) == true)
		 { 
			 echo"<h2><center>Successfully Signed In.</center></h2>";
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
     echo"<h2><center><a href=signup2.php></a></center></h2>";
  }  
}
?>
</body>
</html>
