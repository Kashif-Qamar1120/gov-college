
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="home.php" class="site_title"><img src="images/logo.png"><span></span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="images/profile.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span><?php echo  @$_SESSION['admin_name']; ?></span>

            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
    <li><a href="events.php"><i class="fa fa-calendar-o"></i>Events<span class="fa fa-chevron-down"></span></a>
    </li>
    <li><a href="courses.php"><i class="fa fa-book"></i>Courses<span class="fa fa-chevron-down"></span></a>
    </li>
    <li><a href="staff.php"><i class="fa fa-users"></i>Staff<span class="fa fa-chevron-down"></span></a>
    </li>
    <li><a href="albums.php"><i class="fa fa-image"></i>Albums<span class="fa fa-chevron-down"></span></a>
    </li>
    <li><a href="contact.php"><i class="fa fa-users"></i>Contacts<span class="fa fa-chevron-down"></span></a>
    </li>
    <li><a href="leadership.php"><i class="fa fa-user"></i>Leadership Profile<span class="fa fa-chevron-down"></span></a></li>


    <li><a href="logout.php"><i class="fa fa-windows"></i> Logout <span class="fa fa-chevron-down"></span></a>
    </li>
</ul>

            </div>
         

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>