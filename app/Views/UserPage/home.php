<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calapan City Official Website</title>
    <link rel="shortcut icon" href="assets/images/logggo.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

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

        .second-navbar {
            background-color: #907ad6;
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            min-height: 60px;
        }

        .second-navbar-nav {
            justify-content: center;
            text-align: center;
        }

        .second-nav-item {
            margin: 0 10px;
            padding: 10px 0;
        }

        .second-nav-link {
            color: #fff !important;
            font-size: 14px;
            display: block;
            text-align: center;
            transition: color 0.3s ease-in-out;
        }

        .second-nav-link:hover {
            color: #ffd700;
        }

        .second-navbar-nav {
            box-shadow: 0 4px 6px -6px #222;
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

        @media (min-width: 768px) {
            .navbar-toggler {
                display: none;
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
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                </ul>
            </div>
            <div id="time-date"></div>
            <div class="navbar-icons">
                <i class="fa fa-bell"></i>
                <i class="fa fa-envelope"></i>
                <i class="fa fa-user"></i>
            </div>
        </div>
    </nav>

    <nav class="navbar second-navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/loggo.png" alt="Logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#secondNavbarNav"
                aria-controls="secondNavbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="secondNavbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Entertainment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Politics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Music</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Travels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Science</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Technology</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Item 1</a>
                            <a class="dropdown-item" href="#">Item 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Another Item</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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

</body>

</html>
