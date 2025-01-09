<?php
require_once('../admin/process/conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/gallery_style.css">
    <link rel="stylesheet" href="assets/css/eventstyle.css">
<style>

.gallery {
  text-align: center;
  margin-bottom: 30px;
  color: white;
}

.gallery h1 {
  font-size: 36px;
  color: #333;
}

.gallery p {
  font-size: 16px;
  color: #666;
}

.card {
    background-color: #1c1c1c; /* Light black background */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(128, 128, 128, 0.5); /* Bottom grey shadow */
    overflow: hidden;
    margin-bottom: 20px;
    padding: 20px;
}

.card-title {
  font-size: 24px;
  font-weight: bold;
  color: #fff;
  margin-bottom: 10px;
}

.card-description {
  font-size: 16px;
  color: #bbb;
  margin-bottom: 15px;
}

.card-body {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  justify-content: center;
}

.card-body img {
  width: 200px;
  height: 150px;
  /* object-fit: cover; */
  border-radius: 8px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-body img:hover {
  transform: scale(1.1);
  box-shadow: 0 4px 12px rgba(255, 255, 255, 0.4);
}

</style>

</head>

<body>

<?php 
 include './include/header.php';
?>
<section class="meetings-page" id="meetings">
<div class="main-posts">
    <div class="container">
        <div class="gallery">
            <h1 style= "color: white;">NEWS & EVENTS</h1>
        </div>

        <div class="row">
            <?php 
            $query = "SELECT events.id AS id, events.name AS name, events.description AS description, pictures.picture AS picture 
            FROM events 
            JOIN pictures ON events.id = pictures.event_id
            ORDER BY events.id";
  $execute = mysqli_query($conn, $query);
  
  $currentEventId = null;
  while ($record = mysqli_fetch_array($execute)) {
      if ($currentEventId !== $record['id']) {
          if ($currentEventId !== null) {
              // Close the previous event's card
              echo '</div></div>';
          }
  
          // Start a new event card
          $currentEventId = $record['id'];
          echo '<div class="col-md-12">';
          echo '<div class="card p-4" style= "background-color:rgb(61, 61, 61);">';
          echo '<h3 class="card-title text-center">' . $record['name'] . '</h3>';
          echo '<h6 class="card-description text-center">' . $record['description'] . '</h6>';
          echo '<div class="card-body">';
      }
  
      // Display each image
      echo '<img src="../admin/uploads/events/' . $record['picture'] . '" alt="Event Image">';
  }
  
  if ($currentEventId !== null) {
      // Close the last event's card
      echo '</div></div>';
  }
  
            ?>
        </div>

    </div>
</div>

<?php 
 include './include/footer.php';
?>
</section>

<script src="./vendor/jquery/jquery-1.10.2.min.js"></script>
<script src="./vendor/jquery/plugins.min.js"></script>
<script src="./vendor/jquery/main.min.js"></script>

</body>

</html>
