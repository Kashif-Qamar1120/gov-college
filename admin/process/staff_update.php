<?php
require_once 'conn.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];

    $query = "UPDATE staff SET s_name = '$name', s_desc = '$desc' WHERE s_id = '$id'";
    $execute = mysqli_query($conn, $query);

    if ($execute) {
        header("Location: ../staff.php?update=success");
    } else {
        header("Location: ../staff.php?update=error");
    }
}
?>
