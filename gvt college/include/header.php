<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .menu-trigger {
            cursor: pointer;
            display: none;
            font-size: 1.5rem;
            color: #333;
        }

        .main-nav {
            display: flex;
            gap: 10px;
        }

        .nav-item a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease-in-out;
            padding: 5px 2px;
        }

        .nav-item a:hover {
            color: #007bff;
        }

        @media (max-width: 992px) {
            .menu-trigger {
                display: block;
            }

            .main-nav {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 70px;
                left: 0;
                background-color: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                width: 250px;
                z-index: 1000;
                padding: 15px 0;
            }

            .main-nav.active {
                display: flex;
                padding-left: 20px;
            }

            .nav-item {
                margin: 10px 0;
                text-align: left;
                padding-left: 15px;
            }
        }
    </style>
</head>

<body>
    <header class="header-area header-sticky bg-white">
        <div class="container-fluid">
            <div class="row align-items-center">
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
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

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
</body>

</html>
