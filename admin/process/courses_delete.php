<?php
require_once('conn.php');

if (isset($_GET['dlt'])) {
    $id = $_GET['dlt'];

    // Delete course record
    $query = "DELETE FROM courses WHERE c_id = '$id'";
    $execute = mysqli_query($conn, $query);

    if ($execute) {
        header("Location: ../courses.php?delete=success");
    } else {
        header("Location: ../courses.php?delete=error");
    }
}

if (isset($_GET['all'])) {
    $query = "TRUNCATE TABLE courses";
    $execute = mysqli_query($conn, $query);

    if ($execute) {
        header("Location: ../courses.php?delete_all=success");
    } else {
        header("Location: ../courses.php?delete_all=error");
    }
}
?>
