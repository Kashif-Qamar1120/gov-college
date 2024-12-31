<?php
require_once 'conn.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $desig = $_POST['desig'];
    $desc = $_POST['desc'];

    $query = "UPDATE leadership_profiles SET name = ?, designation = ?, `description` = ? WHERE lp_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssi", $name, $desig, $desc, $id);

    if ($stmt->execute()) {
        header("Location: ../leadership.php?update=success");
        exit();
    } else {
        header("Location: ../leadership.php?update=error");
        exit();
    }
}

?>
