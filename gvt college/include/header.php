                    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="manifest" href="site.php" />
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
    <!-- fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />


    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");



        /* ---------------------- navbar --------------------------  */

        .content {
            max-width: 1250px;
            margin: auto;
            padding: 0 30px;
        }

        .navbar {
            width: 100%;
            z-index: 2;
            transition: all 0.3s ease;
            background-color: white;
            padding: 0.4rem;
        }

        .navbar .content .logo {
            width: 90px;
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .navbar .content .logo img {
            width: 100%;
        }

        .navbar.sticky {
            background-color: white;
            box-shadow: 0px 3px 5px 0px rgba(69, 199, 14, 0.1);
        }

        .navbar .content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            position: relative;
        }

        .navbar .menu-list {
            display: inline-flex;
            padding-top: 0.8rem;
        }

        .menu-list li {
            list-style: none;
            position: relative;
            color: black;
        }

        .menu-list li a {
            color: #fff;
            font-size: 0.9rem;
            font-weight: 400;
            margin-left: 20px;
            text-decoration: none;
            transition: all 0.3s ease;
            color: black;

        }

        .menu-list li a:hover {
            color: #d8d8d8;
        }

        .navbar ul li::after {
            content: "";
            width: 0;
            height: 2px;
            background-color: rgb(148, 142, 142);
            position: absolute;
            bottom: -8px;
            left: 22px;
            transition: 0.3s linear;
        }

        .navbar ul li:hover::after {
            width: 75%;
        }

        main {
            position: absolute;
            top: 40%;
        }





        .icon {
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            display: none;
        }

<<<<<<< HEAD
        .main-nav {
            display: flex;
            gap: 10px;
        }

        .nav-item a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease-in-out;
            padding: 5px 2px;
=======
        .menu-list .cancel-btn {
            position: absolute;
            right: 30px;
            top: 20px;
        }

        /* ---------------- Responsiveness ----------  */

        @media (max-width: 1230px) {
            .content {
                padding: 0 60px;
            }
>>>>>>> fe00e0726e6eb8b3a3703973a02165655a98dbf1
        }

        @media (max-width: 1100px) {
            .content {
                padding: 0 40px;
            }
        }

        @media (max-width: 900px) {
            .content {
                padding: 0 30px;
            }
        }

        @media (max-width: 868px) {
            body.disabled {
                overflow: hidden;
            }

            .navbar {
                padding: 0.4rem 0;
            }

            .navbar h5 {
                display: none;
            }

            .icon {
                display: block;
                color: rgb(255, 255, 255);
                font-size: 1.5rem;
            }

            .icon.hide {
                display: none;
            }

            .navbar {
                padding: 1.3rem 0;
            }

            .navbar h5 {
                display: none;
            }

            .headerContent {
                display: none;
            }

            .navbar .menu-list {
                position: fixed;
                height: 100vh;
                width: 100%;
                left: -100%;
                top: 0px;
                display: block;
                padding: 40px 0;
                text-align: center;
                background: white;
                transition: all 0.3s ease;
            }

            .navbar.show .menu-list {
                left: 0%;
            }

            .navbar .menu-list li {
                margin-top: 32px;
            }

            .navbar .menu-list li a {
                font-size: 18px;
                margin-left: -100%;
                transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            }

            .navbar.show .menu-list li a {
                margin-left: 0px;
            }

            .headerContent h1 {
                font-size: 2.6rem;
            }

            .headerContent p {
                font-size: 0.9rem;
                padding: 0 3rem;
            }
        }

        @media (max-width :414px) {
            .bg-02-a .about-content h2 {
                font-size: 2.1rem !important;
                color: #fff;
            }
        }

        @media (max-width: 380px) {
            .banner {
                height: 115vh;
            }

            .navbar .content .logo img {
                width: 60%;
            }

            .bg-02-a .about-content h2 {
                font-size: 2.1rem;
                color: #fff;
            }

            .headerContent h1 {
                font-size: 2rem;
            }

            .headerContent p {
                font-size: 0.9rem;
                padding: 0 0.8rem;
                word-spacing: 1px;
            }

            .headerContent .buttons {
                margin: 0.5rem 0;
            }

            .headerContent .buttons .btn-1 {
                font-size: 12px;
                padding: 15px 17px;
            }

            .headerContent .buttons .btn-2 {
                font-size: 12px;
                padding: 15px 17px;
            }
        }
    </style>
</head>


<body>
    <header class="header-area header-sticky ">
        <div class="container-fluid">
            <div class="row align-items-center">
<<<<<<< HEAD
                <div class="col-6 col-lg-4 d-flex align-items-center">
                    <img src="./assets/images/left-logo2.png" alt="Edu Meeting Logo" class="logo img-fluid mx-2"
                        style="width: 50px; height: 50px;">
                    <h2 class="mb-0 text-primary">GPI Ekka Ghund</h2>
                    <img src="./assets/images/right-logo1.png" alt="Edu Meeting Logo" class="logo img-fluid mx-2"
                        style="width: 50px; height: 50px;">
                </div>
                <div class="col-6 col-lg-8 text-end">
                    <span class="menu-trigger" id="menu-trigger">&#9776; Menu</span>
                    <nav class="main-nav bg-white" id="main-nav">
                        <ul class="nav flex-column flex-lg-row">
                            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="events.php" class="nav-link">News & Events</a></li>
                            <li class="nav-item"><a href="staff.php" class="nav-link">Our Staff</a></li>
                            <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
                            <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="downloadsDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Downloads</a>
                                <ul class="dropdown-menu" aria-labelledby="downloadsDropdown">
                                    <li><a class="dropdown-item" href="meetings.php">Admission Form</a></li>
                                    <li><a class="dropdown-item" href="meeting1-details.php">Chalan Slip</a></li>
                                    <li><a class="dropdown-item" href="./courses.php">Courses Outline</a></li>
                                    <li><a class="dropdown-item" href="meeting1-details.php">Results</a></li>
                                </ul>
                            </li>
=======
                <nav class="navbar">
                    <div class="content">
                        <h2 style="font-size:15px;">GPI EKKA GHUND</h2>
                        <div class="logo">
                            <img src="./assets/images/right-logo1.png" alt="">
                        </div>

                        <ul class="menu-list">
                            <div class="icon cancel-btn">
                                <i class="fas fa-times" style="color:black;"></i>
                            </div>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="./courses.php">Courses </a></li>
                            <li><a href="staff.php">Our Staff</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                         <!-- Dropdown Menus -->
<ul style="list-style: none; padding: 0; margin: 0; text-align: center;">
    <!-- Menus Dropdown -->
    <li class="has-sub" id="downloads-button1" style=" display: inline-block;">
        <a href="javascript:void(0);" onclick="toggleSubMenu1()" style="text-decoration: none;  display: inline-block;">Menus</a>
        <ul class="sub-menu" id="sub-menu1" style="display: none; width: 120px; position: absolute; background: #fff; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); margin: 0; padding: 0;">
            <li><a href="gallery.php" style="font-size: 10px; padding: 7px; display: block; text-align: left;">Gallery</a></li>
            <li><a href="events.php" style="font-size: 10px; padding: 7px; display: block; text-align: left;">News and Events</a></li>
        </ul>
    </li>

    <!-- Downloads Dropdown -->
    <li class="has-sub" id="downloads-button" style=" display: inline-block;">
        <a href="javascript:void(0);" onclick="toggleSubMenu()" style="text-decoration: none;  display: inline-block;">Downloads</a>
        <ul class="sub-menu" id="sub-menu" style="display: none; width: 120px; position: absolute; background: #fff; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); margin: 0; padding: 0;">
            <li><a href="meetings.php" style="font-size: 10px; padding: 7px; display: block; text-align: left;">Admission Form</a></li>
            <li><a href="meeting1-details.php" style="font-size: 10px; padding: 7px; display: block; text-align: left;">Chalan Slip</a></li>
            <li><a href="meeting1-details.php" style="font-size: 10px; padding: 7px; display: block; text-align: left;">Results</a></li>
        </ul>
    </li>
</ul>
>>>>>>> fe00e0726e6eb8b3a3703973a02165655a98dbf1
                        </ul>

                        <div class="icon menu-btn">
                            <i class="fas fa-bars" style="color:black;"></i>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

<<<<<<< HEAD
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuTrigger = document.getElementById('menu-trigger');
            const mainNav = document.getElementById('main-nav');

            menuTrigger.addEventListener('click', () => {
                mainNav.classList.toggle('active');
                menuTrigger.innerHTML = mainNav.classList.contains('active') ? '✖ Close' : '&#9776; Menu';
            });

            const navLinks = mainNav.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (mainNav.classList.contains('active')) {
                        mainNav.classList.remove('active');
                        menuTrigger.innerHTML = '&#9776; Menu';
                    }
                });
            });
        });
    </script>
=======
    <script src="index.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1200,
        });
    </script>
    <script src="/Jquery/jquery.counterup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        console.log("JavaScript file");

        const body = document.querySelector("body");
        const navbar = document.querySelector(".navbar");
        const menuBtn = document.querySelector(".menu-btn");
        const cancelBtn = document.querySelector(".cancel-btn");
        menuBtn.onclick = () => {
            navbar.classList.add("show");
            menuBtn.classList.add("hide");
            body.classList.add("disabled");
        };
        cancelBtn.onclick = () => {
            body.classList.remove("disabled");
            navbar.classList.remove("show");
            menuBtn.classList.remove("hide");
        };
        window.onscroll = () => {
            this.scrollY > 20 ?
                navbar.classList.add("sticky") :
                navbar.classList.remove("sticky");
        };
    </script>
   

<!-- JavaScript -->
<script>
    function toggleSubMenu1() {
        const subMenu1 = document.getElementById('sub-menu1');
        if (subMenu1.style.display === 'none' || subMenu1.style.display === '') {
            subMenu1.style.display = 'block';
        } else {
            subMenu1.style.display = 'none';
        }
    }

    function toggleSubMenu() {
        const subMenu = document.getElementById('sub-menu');
        if (subMenu.style.display === 'none' || subMenu.style.display === '') {
            subMenu.style.display = 'block';
        } else {
            subMenu.style.display = 'none';
        }
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function (event) {
        const menuButton1 = document.getElementById('downloads-button1');
        const subMenu1 = document.getElementById('sub-menu1');
        const menuButton = document.getElementById('downloads-button');
        const subMenu = document.getElementById('sub-menu');

        if (!menuButton1.contains(event.target)) {
            subMenu1.style.display = 'none';
        }
        if (!menuButton.contains(event.target)) {
            subMenu.style.display = 'none';
        }
    });
</script>

<!-- CSS -->
<style>
    ul {
        padding: 0;
        margin: 0;
    }

    .has-sub a {
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: bold;
        color: #000;
    }

    .sub-menu li {
        list-style: none;
        padding: 0;
    }

    .sub-menu li a {
        text-decoration: none;
        color: #000;
    }

    .sub-menu li a:hover {
        background-color: #f0f0f0;
    }
</style>
>>>>>>> fe00e0726e6eb8b3a3703973a02165655a98dbf1
</body>

</html>
