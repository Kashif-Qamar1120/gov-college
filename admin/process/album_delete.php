<?php
require_once('conn.php');
if(isset($_GET['dlt']) && $_GET['dlt'] !='')
{
	$dlt=$_GET['dlt'];
	
	$query="delete from events where id='$dlt'";
	$excute=mysqli_query($conn, $query);
	if($excute)
	{
		header('location:../albums.php?1');
			exit();
	}
	else{
		header('location:../albums.php?0');
			exit();
	}
}




if(isset($_GET['all']));
{
	$all=$_GET['all'];
	$all_query="delete from events where status = 0";
	$exc=mysqli_query($conn, $all_query);
	if($exc)
	{
		header('location:../albums.php?1');
			exit();
	}
	else{
		header('location:../albums.php?0');
			exit();
	}
}


?>

