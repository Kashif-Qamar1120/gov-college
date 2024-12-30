<?php

include "conn.php";

if(isset($_POST['update']) && $_POST['update'] == "img"){
    $id = $_POST['id'];
    $imgid = $_POST['imgid'];
    if($_FILES['newimg']['name'] != "")
        {
            $PhotoName = $_FILES['newimg']['name'];
            $PhotoSize = $_FILES['newimg']['size'];
            $PhotoType = $_FILES['newimg']['type'];
            $PhotoTamp = $_FILES['newimg']['tmp_name'];
            if ($PhotoType == "image/PNG" || $PhotoType == "image/jpg" || $PhotoType == "image/jpeg") {
            $upload = move_uploaded_file($PhotoTamp, "../uploads/events/$PhotoName");
        }
        }
        $sql = "UPDATE pictures SET 
                event_id = '$id', 
                picture = '$PhotoName'
                WHERE picture_id ='$imgid'";
			$execute = mysqli_query($conn, $sql);
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

if(isset($_GET['dlt']) && $_GET['dlt'] != ""){
    $dlt = $_GET['dlt'];
    $sql = "DELETE FROM pictures where picture_id = '$dlt'";
    $execute =  mysqli_query($conn, $sql);
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

?>