<?php
// Database connection variables
$host = "localhost";
$username = "root";
$password = ""; // Use your database password
$dbname = "gtvcbpes_website";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into database
    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}

// Query to fetch data from leadership_profiles table
$query = "SELECT lp_id, name, designation, profile_image, description FROM leadership_profiles";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Meeting HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

 <?php 
 include './include/header.php'
 ?>

  <!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hello Students</h6>
              <h2>Welcome to Education</h2>
              <p>Founded in 1989, the Govt Polytechnic Institute in Distt. Mohmand offers diverse technical programs. Initially focused on certificate courses, it became a full-fledged institute in 2004, offering a 3-year Diploma in Telecommunication. In 2017, the institute expanded to include Diplomas in Mining, Electrical, Civil Engineering, and a one-year IT Diploma, empowering the next generation of professionals.</p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
</section>
  <!-- ***** Main Banner Area End ***** -->
  <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">
                        <?php 
                        // Loop through the fetched data and display each leadership profile
                        while ($row = mysqli_fetch_assoc($result)) { 
                        ?>
                            <div class="item">
                                <div style="padding-right:85px;">
                                    <div class="icon">
                                        <!-- Use the fetched profile image URL from the database -->
                                        <img src="./assets/images/<?php echo $row['profile_image']; ?>" alt="" style="height: 160px; width: 160px;">
                                    </div>
                                </div>
                                <div class="down-content">
                                    <!-- Display fetched name and designation -->
                                    <h4><?php echo $row['name']; ?> <br>(<?php echo $row['designation']; ?>)</h4>
                                    <!-- Display fetched description -->
                                    <p><?php echo $row['description']; ?></p>
                                </div>
                            </div>
                        <?php 
                        } // End of the while loop
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    // Close the database connection after all operations are done
    mysqli_close($conn);
    ?>
  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading" style= "padding-top: 100px;">
            <h2>Courses</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>Available Courses</h4>
            <ul>
              <li><a href="#">Mining</a></li>
              <br>
              <li><a href="#">Telecommunication</a></li>
              <br>
              <li><a href="#">Civil</a></li>
              <br>
              <li><a href="#">Electrical</a></li>
              <br>
              <li><a href="#">DIT</a></li>
            </ul>
            <div class="main-button-red">
              <a href="./courses.php">View All Courses</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <!-- <div class="price">
                    <span>$22.00</span>
                  </div> -->
                  <a href="meeting-details.html"><img src="assets/images/telecom.jpg" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content">
                  <!-- <div class="date">
                    <h6>Nov <span>10</span></h6>
                  </div> -->
                  <a href="meeting-details.html"><h4>Telecommunication</h4></a>
                  <p>The Telecommunication course at our institute provides students with in-depth knowledge of modern communication systems. It equips them with the skills needed to excel in the rapidly evolving field of telecommunication technology.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <!-- <div class="price">
                    <span>$36.00</span>
                  </div> -->
                  <a href="meeting-details.html"><img src="assets/images/elect.jpg" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                  <!-- <div class="date">
                    <h6>Nov <span>24</span></h6>
                  </div> -->
                  <a href="meeting-details.html"><h4>Electrical</h4></a>
                  <p>The Electrical Engineering diploma offers students comprehensive training in electrical systems, circuits, and power generation, preparing them for careers in the energy and automation sectors.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <!-- <div class="price">
                    <span>$14.00</span>
                  </div> -->
                  <a href="meeting-details.html"><img src="assets/images/dit.jpg" alt="Higher Education"></a>
                </div>
                <div class="down-content">
                  <!-- <div class="date">
                    <h6>Nov <span>26</span></h6>
                  </div> -->
                  <a href="meeting-details.html"><h4>Diploma in Information Technology (DIT)</h4></a>
                  <p>The DIT program provides practical knowledge in computer systems, programming, and network management, equipping students with essential IT skills for the digital age.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <!-- <div class="price">
                    <span>$48.00</span>
                  </div> -->
                  <a href="meeting-details.html"><img src="assets/images/mining.jpg" alt="Student Training"></a>
                </div>
                <div class="down-content">
                  <!-- <div class="date">
                    <h6>Nov <span>30</span></h6>
                  </div> -->
                  <a href="meeting-details.html"><h4>Mining</h4></a>
                  <p>The Mining Engineering course focuses on the extraction of natural resources, teaching students about mining processes, safety measures, and environmental impact, paving the way for careers in the mining industry.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- #############tabs########## -->
 <section>
  <div class="tabs-content" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="section-heading">
            <h4>Our Staff</h4>
            <div class="line-dec"></div>
            <p>
              Nam vulputate elementum nulla, sit amet congue ipsum malesuada pretium.
              Vivamus vel gravida quam.
            </p>
            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
              <li><a href="#tab1" class="active">HOD Mining</a></li>
              <li><a href="#tab2">HOD Electrical</a></li>
              <li><a href="#tab3">HOD Telecommunication</a></li>
            </ul>
            <div class="main-button-red">
              <a href="staff.php">View All</a>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <section id="first-tab-group" class="tabgroup">
            <div id="tab1">
              <img src="assets/images/chairman.png" alt="Image for Tab 1" style="margin: 0px 64px; width:45%;">
              <div class="text-content">
              <p>
                      <b>A/P (Assistant Professor):</b> Teaches advanced mining subjects, guides research, and mentors students. <br>
                      <b>Lecturer:</b> Teaches core mining courses and supports students. <br>
                      <b>Instructor:</b> Conducts practical sessions on mining techniques. <br>
                      <b>Junior Instructor:</b> Assists instructors and supports practical lessons. <br>
                     <b> Shop Assistant:</b> Manages mining workshops and equipment. <br>
                      <b>Shop Attendant:</b> Assists with workshop operations and safety.</p>
              </div>
            </div>
            <div id="tab2">
              <img src="assets/images/managingdirector.png" alt="Image for Tab 2" style="margin: 0px 64px; width:45%;">
              <div class="text-content">
              <p>The HOD of Electrical oversees the department, managing academic schedules and guiding faculty in electrical systems. <br>
                      <b>A/P (Assistant Professor):</b> Teaches advanced electrical courses and mentors students. <br>
                      <b>Lecturer:</b> Focuses on electrical systems and energy technologies. <br>
                      <b>Instructor:</b> Provides practical electrical training. <br>
                      <b>Junior Instructor:</b> Assists instructors in labs. <br>
                      <b>Shop Assistant:</b> Supports electrical labs and equipment. <br>
                      <b>Shop Attendant:</b> Ensures safety and equipment readiness in the workshop.</p>
              </div>
            </div>
            <div id="tab3">
              <img src="assets/images/principal.png" alt="Image for Tab 3" style="margin: 0px 64px; width:45%;">
              <div class="text-content">
              <p>
                        The HOD of Telecom manages the department, ensuring up-to-date training in telecom systems. <br>
                        <b>A/P (Assistant Professor):</b> Teaches telecom technologies and supervises research. <br>
                        <b>Lecturer</b>: Delivers lessons on telecom systems and networks. <br>
                        <b>Instructor:</b> Provides practical telecom training. <br>
                        <b>Junior Instructor:</b> Assists in practical telecom sessions. <br>
                        <b>Shop Assistant:</b> Maintains telecom lab equipment. <br>
                        <b>Shop Attendant:</b> Supports telecom lab operations.</p>
              </div>
            </div>
            <div id="tab4">
              <img src="assets/images/secretaryindustrier.png" alt="Image for Tab 4" style="margin: 0px 64px; width:45%;">
              <div class="text-content">
                <h4>Vivamus Purus Neque</h4>
                <span><a href="#">E-Commerce</a> / <a href="#">George</a> / <a href="#">14 July 2020</a></span>
                <p>
                  Aliquam erat volutpat. Nulla at nunc nec ante rutrum congue id in diam.
                  Nulla at lectus non turpis placerat volutpat lacinia ut mi. Quisque ultricies
                  maximus justo a blandit. Donec sit amet commodo arcu. Sed sit amet iaculis mi,
                  vel fermentum nisi. Morbi dui enim, vestibulum non accumsan ac, tempor non nisl.
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Gallery</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="assets/images/playground.jpeg" alt="Course One">
              <div class="down-content">
                <h4>Play_Ground</h4>
                <!-- <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$160</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="item">
              <img src="assets/images/lawn.jpeg" alt="Course Two">
              <div class="down-content">
                <h4>Lawn</h4>
                <!-- <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$180</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="item">
              <img src="assets/images/classes.jpeg" alt="">
              <div class="down-content">
                <h4>Classes</h4>
                <!-- <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$140</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="item">
              <img src="assets/images/hostal.jpeg" alt="">
              <div class="down-content">
                <h4>Hostal</h4>
                <!-- <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$120</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="item">
              <img src="assets/images/classes1.jpeg" alt="">
              <div class="down-content">
                <h4>Classes</h4>
                <!-- <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$250</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="item">
              <img src="assets/images/lawn.jpeg" alt="">
              <div class="down-content">
                <h4>Lawn</h4>
                <!-- <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$270</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="item">
              <img src="assets/images/playground.jpeg" alt="">
              <div class="down-content">
                <h4>Play_Ground</h4>
                <!-- <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$340</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="item">
              <img src="assets/images/classes.jpeg" alt="">
              <div class="down-content">
                <h4>Classes</h4>
                <!-- <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$360</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="item">
              <img src="assets/images/classes1.jpeg" alt="">
              <div class="down-content">
                <h4>Classes</h4>
                <!-- <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$400</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="item">
              <img src="assets/images/playground.jpeg" alt="">
              <div class="down-content">
                <h4>Play-Ground</h4>
                <!-- <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$430</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="item">
              <img src="assets/images/hostal.jpeg" alt="">
              <div class="down-content">
                <h4>Hostal</h4>
                <!-- <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$480</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="item">
              <img src="assets/images/lawn.jpeg" alt="">
              <div class="down-content">
                <h4>Lawn</h4>
                <!-- <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$560</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-button-red" style = "text-align: center;">
              <a href="./gallery.php">View All Gallery</a>
            </div>
  </section>


  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Facts About Our University</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">94</div>
                    <div class="count-title">Succesed Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">126</div>
                    <div class="count-title">Current Teachers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">2345</div>
                    <div class="count-title">New Students</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">32</div>
                    <div class="count-title">Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>010-020-0340</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>info@meeting.edu</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.meeting.edu</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>


   <?php 
   include './include/footer.php'
   ?>


  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/main.js"></script>
    <script src="vendor/bootstrap/js/plugins.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>