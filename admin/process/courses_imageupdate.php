<?php
include "conn.php";

if(isset($_POST['update']) && $_POST['update'] == "img"){
    $id = $_POST['id'];
    $imgid = $_POST['imgid'];

    // Check if a new image is uploaded
    if($_FILES['newimg']['name'] != "") {
        $PhotoName = $_FILES['newimg']['name'];
        $PhotoSize = $_FILES['newimg']['size'];
        $PhotoType = $_FILES['newimg']['type'];
        $PhotoTamp = $_FILES['newimg']['tmp_name'];

        // Validate image type
        if ($PhotoType == "image/png" || $PhotoType == "image/jpg" || $PhotoType == "image/jpeg") {
            // Move the uploaded file to the target directory
            $upload = move_uploaded_file($PhotoTamp, "../uploads/courses/$PhotoName");

            // Check if the file was uploaded successfully
            if (!$upload) {
                die('Error: Failed to upload image.');
            }
        } else {
            die('Error: Invalid image type.');
        }

        // Update the image name in the database
        $sql = "UPDATE courses SET image = '$PhotoName' WHERE c_id = '$imgid'";
        $execute = mysqli_query($conn, $sql);

        // Check if the query was successful
        if($execute) {
            header('Location: ../courses.php?1');  // Success
            exit();
        } else {
            // Log the error if the query fails
            echo 'Error updating image: ' . mysqli_error($conn);
            exit();
        }
    } else {
        die('Error: No image selected.');
    }
}
?>
