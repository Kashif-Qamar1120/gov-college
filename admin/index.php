<?php
include('process/conn.php');
session_start();
if(isset($_POST['admin']))
{
	$a_email=$_POST['a_email'];
	$a_pass=$_POST['a_pass'];
	$log = mysqli_query($conn, "select * from admins where admin_email='$a_email' and admin_password='$a_pass'");
	$count = mysqli_num_rows($log);
	if($count>0)
	{

		$record_fetch=mysqli_fetch_array($log);
		$_SESSION['admin_id']=$record_fetch['admin_id'];
		$_SESSION['admin_name']=$record_fetch['admin_name'];
       $_SESSION['admin_email']=$record_fetch['admin_email'];
       

     
       header('location:home.php?welcome');
		exit();
	}
	else{
		header('location:index.php?msg=0');
		exit();
	}
}	

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>َAnimated Login Form</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<form class="box" action="" method="post">
		<?php 
			if(isset($_GET['msg']) && $_GET['msg'] == 0){
		?>
		<span class="valid">Inavlid Email or Password</span>
		<?php } ?>
		<h1>Login</h1>
		<input type="email" name="a_email" placeholder="Email">
		<input type="password" name="a_pass" placeholder="Password">
		<input type="submit" name="admin" value="Login">

	</form>


</body>
</html>