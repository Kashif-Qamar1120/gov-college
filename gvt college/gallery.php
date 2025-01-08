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
    <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->

</head>

<body>



    <?php
    include './include/header.php'
    ?>


    <section class="meetings-page" id="meetings">
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
                    $execute = mysqli_query($conn, $query);

                    while ($record = mysqli_fetch_array($execute)) {
                    ?>
                        <div class="col-md-4 col-sm-6 post-masonry">
                            <div class="post-thumb">
                                <img src="../admin/uploads/events/<?php echo $record['picture'] ?>" alt="Event Image">
                                <div class="title-over">
                                    <h6><?php echo $record['name']; ?></h6>
                                </div>
                                <div class="post-hover text-center">
                                    <div class="inside">
                                        <i class="fa fa-plus"></i>
                                        <h6><?php echo $record['description']; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- End of last row -->
            </div>
        </div>





        <?php include './include/footer.php' ?>

    </section>

    <script src="./vendor/jquery/jquery-1.10.2.min.js"></script>
    <script src="./vendor/jquery/plugins.min.js"></script>
    <script src="./vendor/jquery/main.min.js"></script>


</body>

</html>