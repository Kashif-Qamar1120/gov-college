<?php
include 'conn.php';
if(isset($_POST['events']) && $_POST['events'] =='form1')
{
	$name= $_POST['name'];
	$desc=$_POST['desc'];
	$status=$_POST['status'];

		$query1 = "INSERT INTO events 
		(name, description, `status`)
		VALUES('$name', '$desc', '$status')";

	mysqli_query($conn, $query1);
	
	$event_id = mysqli_insert_id($conn);
		
		$photo = $_FILES['photos'];

	for ($i = 0; $i < count($photo['name']); $i++) {
		$tmp_name = $photo['tmp_name'][$i];
		$name = basename($photo['name'][$i]);
		$path = "../uploads/albums/$name";
		if (move_uploaded_file($tmp_name, $path)) {
			$sql = "INSERT INTO pictures (event_id, picture) VALUES ('$event_id', '$name')";
			$execute = mysqli_query($conn, $sql);
			// if (!$execute) {
			// 	echo "Error: " . mysqli_error($conn);
			// } else {
			// 	echo "File uploaded successfully!";
			// }
	
		}
	}
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