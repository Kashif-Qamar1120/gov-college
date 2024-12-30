<?php
require_once 'conn.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];

    $query = "UPDATE courses SET c_name = '$name', c_desc = '$desc' WHERE c_id = '$id'";
    $execute = mysqli_query($conn, $query);

    if ($execute) {
        header("Location: ../courses.php?update=success");
    } else {
        header("Location: ../courses.php?update=error");
    }
}
?>
