<html>
<head>
<title>online course enrollment</title>
<link rel="stylesheet" type="text/css" href="css/login1.css">

</head>
<body>
		
	<ul>
<li><a href="/php/parking/index.php">Home</a></li>

<li><a href="/php/parking/login.php">Login</a></li>
<li><a href="/php/parking/about.php" >About</a></li>
<li><a href="/php/parking/contact.php" >Contact</a></li>
<li><a href="/php/parking/admin.php" >Admin</a></li>

	</ul>

		</div>
<div class="box">
<h4>
<center>
<div class="login">
<img src="icon.jpg">
</div>



</center>
<center>
<form action="admin.php" method="POST">
<h3>Sign In With User Name</h3>
<br>
admin id
<br>
<input type="text" name="aid" placeholder="username or email id" required>
<br><br>
PASSWORD
<br>
<input type="password" name="password"  placeholder="password" required>
<br><br>

<input type="submit" name="submit" value="LOGIN">
<br>
<br>

</form>
</center>
</h4>
</div>
</body>
</html>


<?php

session_start();
include"dbconnection.php";
$message="";
if(isset($_POST['submit']))
{
$a=$_POST['aid'];
$p=$_POST['password'];
$sql="select * from admin where email='$a' and password='$p'";
$result=pg_query($con,$sql);
if(pg_num_rows($result)>0)
{
$_SESSION['admin_id']=$a;

header('location:chart.php');
}
 else
{
$message="invalid id or password";
}
}
?>

