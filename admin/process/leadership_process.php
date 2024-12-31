<?php
require_once('conn.php');

if (isset($_POST['submit']) && $_POST['events'] == 'form1') {
    // Sanitize inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $desig = mysqli_real_escape_string($conn, $_POST['desig']);
    $images = $_FILES['photos'];
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);

    // Check if files are uploaded
    if (!isset($images) || empty($images['name'][0])) {
        die("No files were uploaded.");
    }

    // Directory for uploading images
    $target_dir = "../uploads/staff/";

    foreach ($images['name'] as $key => $image_name) {
        $image_tmp_name = $images['tmp_name'][$key];
        $target_file = $target_dir . basename($image_name);

        if (move_uploaded_file($image_tmp_name, $target_file)) {
            // Insert into `courses` table
            $query = "INSERT INTO leadership_profiles (name, designation, profile_image,description ) VALUES ('$name',  '$desig','$image_name','$desc' )";
            if (!mysqli_query($conn, $query)) {
                die("Error inserting record: " . mysqli_error($conn));
            }
        } else {
            die("Failed to upload file: " . $image_name);
        }
    }

    // Redirect after successful insertion
    header("Location: ../leadership.php?insert=success");
    exit();
}
?>
