<?php
require_once('conn.php');

if (isset($_GET['dlt'])) {
    $id = $_GET['dlt'];

    // Delete course record
    $query = "DELETE FROM leadership_profiles WHERE lp_id = '$id'";
    $execute = mysqli_query($conn, $query);

    if ($execute) {
        header("Location: ../leadership.php?delete=success");
    } else {
        header("Location: ../leadership.php?delete=error");
    }
}

if (isset($_GET['all'])) {
    $query = "TRUNCATE TABLE leadership_profiles";
    $execute = mysqli_query($conn, $query);

    if ($execute) {
        header("Location: ../leadership.php?delete_all=success");
    } else {
        header("Location: ../leadership.php?delete_all=error");
    }
}
?>
