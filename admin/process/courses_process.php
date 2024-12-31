<?php
require_once('conn.php');

if (isset($_POST['submit']) && $_POST['events'] == 'form1') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $images = $_FILES['photos'];

    if (empty($category)) {
        die("Please select a valid category.");
    }

    $category_check_query = "SELECT id FROM categories WHERE id = '$category'";
    $category_check_result = mysqli_query($conn, $category_check_query);

    if (mysqli_num_rows($category_check_result) == 0) {
        die("Invalid category selected.");
    }

    $target_dir = "../uploads/courses/";
    foreach ($images['name'] as $key => $image_name) {
        $image_tmp_name = $images['tmp_name'][$key];
        $target_file = $target_dir . basename($image_name);

        if (move_uploaded_file($image_tmp_name, $target_file)) {
            $query = "INSERT INTO courses (c_name, c_desc, image, category_id) VALUES ('$name', '$desc', '$image_name', '$category')";
            if (!mysqli_query($conn, $query)) {
                die("Error inserting record: " . mysqli_error($conn));
            }
        } else {
            die("Failed to upload file: " . $image_name);
        }
    }

    header("Location: ../courses.php?insert=success");
    exit();
}

?>
