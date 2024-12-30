<?php
require_once 'conn.php';
if(isset($_POST['event']) && $_POST['event'] == 'upd')
{

    $name= $_POST['name'];
	$desc=$_POST['desc'];
	$status=$_POST['status'];
	$id = $_POST['id'];

		$query1 = "UPDATE events SET
		name='$name', description='$desc', status='$status' WHERE id=$id";

$execute=mysqli_query($conn, $query1);
	
	// $event_id = mysqli_insert_id($conn);
		
	// 	$photo = $_FILES['photos'];

	// for ($i = 0; $i < count($photo['name']); $i++) {
	// 	$tmp_name = $photo['tmp_name'][$i];
	// 	$name = basename($photo['name'][$i]);
	// 	$path = "../uploads/events/$name";
	// 	if (move_uploaded_file($tmp_name, $path)) {
	// 		$sql = "INSERT INTO pictures (event_id, picture) VALUES ('$event_id', '$path')";
	// 		$execute = mysqli_query($conn, $sql);
	// 		// if (!$execute) {
	// 		// 	echo "Error: " . mysqli_error($conn);
	// 		// } else {
	// 		// 	echo "File uploaded successfully!";
	// 		// }
	
	// 	}
	// }

	
		if($execute)
			{
				
					header('location:../albums.php?1');
					exit();
				}
				else{
					header('location:../albums.php?0');
					exit();
				}
				
			}
			

else
{
	echo "Error !!";
}

?>
