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

    <title>Education Template - Meeting Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/gallerystyle.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

   

<?php 
 include './include/header.php'
 ?>



<div class="main-posts">
    <div class="container">
        <div class="gallery">
            <h1>GALLERY</h1>
            <p>
                Our college gallery is a vibrant showcase of creativity, innovation, and excellence, capturing the essence of student life, academic achievements, and cultural events.
            </p>
        </div>
        <div class="row">
            <?php 
            $query = "SELECT events.name, events.description, pictures.picture 
            FROM events 
            JOIN pictures ON events.id = pictures.event_id";
            $excute = mysqli_query($conn, $query);

            $count = 0; // Counter to track columns
            while ($record = mysqli_fetch_array($excute)) {
                ?>
                <div class="col-md-4 col-sm-6 post-masonry">
                    <div class="post-thumb">
                        <img src="../admin/uploads/albums/<?php echo $record['picture']?>" alt="">
                        <div class="title-over">
                            <h4><a href="#"><?php echo $record['name']; ?></a></h4>
                        </div>
                        <div class="post-hover text-center">
                            <div class="inside">
                                <i class="fa fa-plus"></i>
                                <!-- <span class="date">25 Jan 2084</span> -->
                                <h4><a href="#"><?php echo $record['description']; ?></a></h4>
                                <!-- <p>Cum sociis natoque penatibus et magnis dis parturient</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $count++;

                // Close and open a new row after every 3 columns
                if ($count % 3 == 0) {
                    echo '</div><div class="row">';
                }
            }
            ?>
        </div> <!-- End of last row -->
    </div>
</div>


            
            <?php 
   include './include/footer.php'
   ?>
        </div>


        <script src="./vendor/jquery/jquery-1.10.2.min.js"></script>
        <script src="./vendor/jquery/plugins.min.js"></script>
        <script src="./vendor/jquery/main.min.js"></script>


 </body>
</html>