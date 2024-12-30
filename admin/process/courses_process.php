<?php
require_once('conn.php');

if (isset($_POST['submit']) && $_POST['events'] == 'form1') {
    // Sanitize inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);
    $images = $_FILES['photos'];

    // Check if files are uploaded
    if (!isset($images) || empty($images['name'][0])) {
        die("No files were uploaded.");
    }

    // Directory for uploading images
    $target_dir = "../uploads/courses/";

    foreach ($images['name'] as $key => $image_name) {
        $image_tmp_name = $images['tmp_name'][$key];
        $target_file = $target_dir . basename($image_name);

        if (move_uploaded_file($image_tmp_name, $target_file)) {
            // Insert into `courses` table
            $query = "INSERT INTO courses (c_name, c_desc, image) VALUES ('$name', '$desc', '$image_name')";
            if (!mysqli_query($conn, $query)) {
                die("Error inserting record: " . mysqli_error($conn));
            }
        } else {
            die("Failed to upload file: " . $image_name);
        }
    }

    // Redirect after successful insertion
    header("Location: ../courses.php?insert=success");
    exit();
}
?>
