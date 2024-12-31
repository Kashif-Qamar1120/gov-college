<?php
require_once 'conn.php';

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']); // Fetch category ID

    // Update query with category
    $query = "UPDATE courses 
              SET c_name = '$name', 
                  c_desc = '$desc', 
                  category_id = '$category_id' 
              WHERE c_id = '$id'";
    
    $execute = mysqli_query($conn, $query);

    // Redirect based on query result
    if ($execute) {
        header("Location: ../courses.php?update=success");
    } else {
        header("Location: ../courses.php?update=error");
    }
}
?>

