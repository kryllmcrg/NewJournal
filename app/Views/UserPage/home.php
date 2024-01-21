<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calapan City Official Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        .navbar {
            min-height: 80px; /* Adjust the minimum height as needed */
            background-color: #dabfff;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            margin-right: 15px;
        }

        .navbar-brand img {
            max-height: 40px; /* Adjust the logo height as needed */
            margin-right: 10px; /* Add some spacing between the logo and text */
            max-width: 160px;
        }

        .navbar-toggler {
            color: black;
            border-color: black;
        }

        .navbar-nav {
            font-weight: bold;
            justify-content: center;
            text-align: center; /* Center the text */
        }

        .nav-item {
            margin: 0 20px; /* Adjust the margin as needed */
        }

        .nav-link {
            color: black !important;
            font-size: 18px;
            display: block; /* Make the links full-width */
            text-align: center; /* Center the text */
        }

        .navbar-icons {
            display: flex;
            align-items: center;
            margin-left: auto;
        }

        .navbar-icons i {
            font-size: 24px;
            margin-left: 15px;
            color: #3c096c;
            cursor: pointer;
        }

        #time-date {
            display: none;
            font-size: 16px;
            color: #3c096c;
            font-weight: bold;
        }

        @media (min-width: 768px) {
            .navbar-toggler {
                display: none;
            }

            #time-date {
                display: block;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="#">Login</a>
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

<!-- Bootstrap JS (optional, but needed for some features like the responsive navbar toggle) -->
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
</script>

</body>
</html>
