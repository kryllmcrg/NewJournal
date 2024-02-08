<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Calapan City Website!</title>
    <link rel="shortcut icon" href="assets/images/logggo.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/carousel/style.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            min-height: 80px;
            background-color: #dabfff;
            margin-bottom: 20px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            margin-right: 15px;
        }

        .navbar-brand img {
            max-height: 40px;
            margin-right: 10px;
            max-width: 160px;
        }

        .navbar-toggler {
            color: black;
            border-color: black;
        }

        .navbar-nav {
            font-weight: bold;
            justify-content: center;
            text-align: center;
        }

        .nav-item {
            margin: 0 20px;
        }

        .nav-link {
            color: black !important;
            font-size: 16px;
            display: block;
            text-align: center;
        }

        .navbar-icons {
            display: flex;
            align-items: center;
            margin-left: auto;
        }

        .navbar-icons i {
            font-size: 24px;
            margin-left: 25px;
            color: #3c096c;
            cursor: pointer;
        }

        #time-date {
            display: none;
            font-size: 16px;
            color: #3c096c;
            font-weight: bold;
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            background-color: #dabfff;
            padding: 2px;
            font-size: 12px;
        }

        .footer-section {
            flex: 1;
            margin: 0 10px;
            text-align: center;
        }

        .footer-section h3 {
            margin-bottom: 10px;
        }

        .social-icons {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .social-icons li {
            display: inline-block;
            margin: 0 10px;
        }

        .social-icons a {
            color: #3c096c;
            font-size: 24px;
        }

        .social-icons a:hover {
            color: #ffd700;
        }

        footer {
            text-align: center;
            background-color: #dabfff;
            padding: 5px;
            margin-top: auto;
        }

        @media (max-width: 767px) {
            .nav-item {
                margin: 0 10px;
            }

            #time-date {
                display: block;
            }
        }

        .nav-link:hover {
            color: #ffd700 !important;
        }

        .navbar-icons i:hover {
            color: #ffd700 !important;
        }

        .navbar form button:hover {
            background-color: #ffd700;
            color: black;
        }

        .navbar form input:focus {
            border-color: #ffd700;
            box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.25);
        }

        /* Dropdown Styles */
        .dropdown-menu.multi-column {
            columns: 3;
            padding: 20px;
            width: 400px;
        }

        .dropdown-column {
            display: table-cell;
            padding: 10px;
            border: none;
        }

        .dropdown-item {
            display: block;
            width: 100%;
            font-size: 16px;
            color: #212529;
            text-align: left;
            white-space: nowrap;
            background-color: transparent;
            border: none;
        }

        .dropdown-divider {
            height: 1px;
            margin: .5rem 0;
            overflow: hidden;
            background-color: #e9ecef;
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="Logo" class="img-fluid">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            News
                        </a>
                        <ul class="dropdown-menu multi-column" aria-labelledby="navbarDropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 dropdown-column">
                                        <a class="dropdown-item" href="#">Music</a>
                                        <a class="dropdown-item" href="#">Sports</a>
                                        <a class="dropdown-item" href="#">Education</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 dropdown-column">
                                        <a class="dropdown-item" href="#">Business</a>
                                        <a class="dropdown-item" href="#">Entertainment</a>
                                        <a class="dropdown-item" href="#">Fashion</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 dropdown-column">
                                        <a class="dropdown-item" href="#">Technology</a>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="announcements">Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                </ul>
                <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
            <div id="time-date"></div>
            <div class="navbar-icons">
                <i class="fa fa-bell"></i>
                <i class="fa fa-envelope"></i>
                <i class="fa fa-user"></i>
            </div>
        </div>
    </nav>

    <!-- Carousel Slider -->
    <div class="ism-slider" data-transition_type="zoom" data-image_fx="zoompan" id="my-slider">
        <ol>
            <li>
                <img src="assets/images/carousel1.jpg">
                <div class="ism-caption ism-caption-0"></div>
            </li>
            <li>
                <img src="assets/images/carousel2.jpg">
                <div class="ism-caption ism-caption-0"></div>
            </li>
            <li>
                <img src="assets/images/carousel2.jpg">
                <div class="ism-caption ism-caption-0"></div>
            </li>
            <li>
                <img src="assets/images/pic2.png">
                <div class="ism-caption ism-caption-0"></div>
            </li>
            <li>
                <img src="assets/images/pic1.png">
                <div class="ism-caption ism-caption-0"></div>
            </li>
        </ol>
    </div>
    <p class="ism-badge" id="my-slider-ism-badge"><a class="ism-link" href="http://imageslidermaker.com"
            rel="nofollow"></a></p>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section contact-us-section">
                <h3>Overview</h3>
                <p>Home<br>About Us<br>Contact Us<br>Announcements</p>
            </div>
            <div class="footer-section contact-us-section">
                <h3>Contact Us</h3>
                <p>Calapan City, Guibatan<br>Oriental MIMAROPA 5201<br>Phone: (123) 456-7890<br>Email:
                    lgu.calapancity@gmail.com</p>
            </div>

            <div class="footer-section social-media-section">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <li><a href="#" class="facebook"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>

            <div class="footer-section legal-section">
                <h3>Legal</h3>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>

        <p><strong>&copy; 2024 Calapan City Official Website | All Rights Reserved</strong></p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Time and Date -->
    <script>
        function updateTimeDate() {
            const currentDate = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true };
            const formattedDate = currentDate.toLocaleDateString('en-US', options);

            document.getElementById('time-date').textContent = formattedDate;
        }

        setInterval(updateTimeDate, 1000);
        updateTimeDate();

        document.addEventListener('DOMContentLoaded', function () {
            var dropdownTrigger = document.getElementById('navbarDropdown');
            var dropdownMenu = document.getElementById('navbarDropdownMenu');

            dropdownTrigger.addEventListener('click', function () {
                dropdownMenu.classList.toggle('show');
            });

            window.addEventListener('click', function (event) {
                if (!event.target.matches('.dropdown-toggle')) {
                    var dropdowns = document.getElementsByClassName('dropdown-menu');
                    for (var i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            });
        });

    </script>
    <script src="assets/js/carousel.js"></script>

</body>

</html>
