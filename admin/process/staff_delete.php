<?php
require_once('conn.php');

if (isset($_GET['dlt'])) {
    $id = $_GET['dlt'];

    // Delete course record
    $query = "DELETE FROM staff WHERE s_id = '$id'";
    $execute = mysqli_query($conn, $query);

    if ($execute) {
        header("Location: ../staff.php?delete=success");
    } else {
        header("Location: ../staff.php?delete=error");
    }
}

if (isset($_GET['all'])) {
    $query = "TRUNCATE TABLE staff";
    $execute = mysqli_query($conn, $query);

    if ($execute) {
        header("Location: ../staff.php?delete_all=success");
    } else {
        header("Location: ../staff.php?delete_all=error");
    }
}
?>
