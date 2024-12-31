<?php
require_once('conn.php');

if (isset($_GET['dlt'])) {
    $id = $_GET['dlt'];

    // Delete course record
    $query = "DELETE FROM contacts WHERE c_id = '$id'";
    $execute = mysqli_query($conn, $query);

    if ($execute) {
        header("Location: ../contact.php?delete=success");
    } else {
        header("Location: ../contact.php?delete=error");
    }
}

if (isset($_GET['all'])) {
    $query = "TRUNCATE TABLE staff";
    $execute = mysqli_query($conn, $query);

    if ($execute) {
        header("Location: ../contact.php?delete_all=success");
    } else {
        header("Location: ../contact.php?delete_all=error");
    }
}
?>
