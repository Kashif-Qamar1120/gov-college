<?php
// Include your database connection file
require_once('../admin/process/conn.php');

// Check database connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Fetch data for Latest Articles (limit 3)
$articles_query = "SELECT e.*, p.picture FROM events e LEFT JOIN pictures p ON e.id = p.event_id LIMIT 3";
$articles_result = mysqli_query($conn, $articles_query);
if (!$articles_result) {
    die("Error executing articles query: " . mysqli_error($conn));
}

// Fetch data for Most Popular Videos (fetch all remaining articles)
$videos_query = "SELECT e.*, p.picture FROM events e LEFT JOIN pictures p ON e.id = p.event_id LIMIT 999999 OFFSET 3";
$videos_result = mysqli_query($conn, $videos_query);
if (!$videos_result) {
    die("Error executing videos query: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News & Events</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">
  <link rel="stylesheet" href="assets/css/eventstyle.css">
  
  <!-- Custom CSS for Scrollable Videos Section -->
  <style>
    .video-container {
      max-height: 870px; /* Adjust this as per your design */
      overflow-y: auto;
    }
  </style>
</head>

<body>
  <?php include './include/header.php'; ?>

  <section class="news-events mt-5">
    <div class="container my-5">
      <div class="row">
        <!-- Latest Articles Section -->
        <div class="col-lg-8">
          <h3 class="mb-4">Latest Articles</h3>
          <?php
          if (mysqli_num_rows($articles_result) > 0) {
              while ($article = mysqli_fetch_array($articles_result)) {
          ?>
            <div class="article-card mb-4">
              <img src="../admin/uploads/events/<?php echo $article['picture']; ?>" alt="Article Image">
              <div class="article-card-body">
                <h5 class="article-title"><?php echo htmlspecialchars($article['name']); ?></h5>
                <p><?php echo htmlspecialchars($article['description']); ?></p>
              </div>
            </div>
          <?php
              }
          } else {
              echo "<p>No articles found.</p>";
          }
          ?>
        </div>

        <!-- Most Popular Videos Section -->
        <div class="col-lg-4">
          <h3 class="mb-4">Most Popular Videos</h3>
          <div class="video-container">
            <?php
            if (mysqli_num_rows($videos_result) > 0) {
                while ($video = mysqli_fetch_array($videos_result)) {
            ?>
              <div class="video-card mb-4">
                <img src="../admin/uploads/events/<?php echo $video['picture']; ?>" alt="Video Thumbnail">
                <div class="video-card-body">
                  <h5 class="video-title"><?php echo htmlspecialchars($video['name']); ?></h5>
                  <p><?php echo htmlspecialchars($video['description']); ?></p>
                </div>
              </div>
            <?php
                }
            } else {
                echo "<p>No videos found.</p>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include './include/footer.php'; ?>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>
