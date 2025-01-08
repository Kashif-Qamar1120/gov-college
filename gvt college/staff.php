<?php
require_once('../admin/process/conn.php');

// Query to fetch all staff data
$query = "SELECT * FROM staff";
$execute = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Education</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/staff-style.css">
</head>

<body>

    <?php include './include/header.php'; ?>
    <section class="meetings-page" id="meetings">
        <div class="container">
            <h1 class="staff-title" style="color:white;">Our Staff</h1>
            <p class="staff-description">Our staff are highly qualified and experienced in their fields. They are the backbone of our success, working collaboratively to deliver exceptional results.</p>

            <div class="staff-grid">
                <?php
                // Loop through the result set and display each staff record
                while ($record = mysqli_fetch_array($execute)) {
                ?>
                    <!-- Staff Card -->
                    <div class="staff-card">
                        <img src="../admin/uploads/staff/<?php echo $record['image']; ?>" alt="<?php echo $record['s_name']; ?>">
                        <div class="card-info">
                            <h3><?php echo $record['s_name']; ?></h3>
                            <p class="staff-role"><?php echo $record['s_desc']; ?></p>
                            <div class="social-icons">
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <?php include './include/footer.php'; ?>
    </section>
    

</body>

</html>