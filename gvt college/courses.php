<?php
require_once('../admin/process/conn.php');

// Get the filter category if it is set in the URL, default to 'All'
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : 'All';
$categoryFilter = mysqli_real_escape_string($conn, $categoryFilter);

// Build the query with proper escaping
if ($categoryFilter == 'All') {
    $query = "SELECT courses.* FROM courses";
} else {
    $query = "SELECT courses.* FROM courses 
              JOIN categories ON courses.category_id = categories.id 
              WHERE categories.name = '$categoryFilter'";
}


// Execute the query
$execute = mysqli_query($conn, $query);
if (!$execute) {
    die("SQL Error: " . mysqli_error($conn));
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Education</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
<body>

<?php include './include/header.php'; ?>

<section class="meetings-page" id="meetings">
    <div class="container">
    <div class="heading" style= "color: white; text-align: center;">
        <h1>COURSES</h1>
    </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="filters">
                <ul>
                    <li class="<?= ($categoryFilter == 'All') ? 'active' : '' ?>"><a href="?category=All">All Courses</a></li>
                    <li class="<?= ($categoryFilter == 'Mining') ? 'active' : '' ?>"><a href="?category=Mining">Mining</a></li>
                    <li class="<?= ($categoryFilter == 'Electrical') ? 'active' : '' ?>"><a href="?category=Electrical">Electrical</a></li>
                    <li class="<?= ($categoryFilter == 'Telecommunication') ? 'active' : '' ?>"><a href="?category=Telecommunication">Telecommunication</a></li>
                </ul>

                </div>
            </div>

            <div class="col-lg-12">
                <div class="row grid">
                    <?php
                    // Loop through the results and dynamically display each course
                    while ($record = mysqli_fetch_array($execute)) {
                    ?>
                        <div class="col-lg-4 templatemo-item-col all <?php echo strtolower($record['category']); ?>">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <a href="meeting-details.php"><img src="../admin/uploads/courses/<?php echo $record['image']; ?>" alt=""></a>
                                </div>
                                <div class="down-content">
                                    <a href="meeting-details.php"><h4><?php echo $record['c_name']; ?></h4></a>
                                    <p><?php echo $record['c_desc']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="pagination">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include './include/footer.php'; ?>
</section>


<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>
