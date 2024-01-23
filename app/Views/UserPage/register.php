<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Font+Name" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Register</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('assets/images/bg.png'); 
            background-size: cover; 
            background-position: center; 
            height: 100vh; 
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
            position: relative; /* Add this to position the button relative to the body */
        }

        .back-button {
            position: absolute;
            top: 10px;
            right: 10px;
            text-decoration: none;
        }

        .back-button i{
            color: white;
            font-size: 1.7em;
        }
        
        .back-button span {
            display: block;
            color: black;
            font-size: 11px;
            text-decoration: none;
        }
        .form {
            position: absolute;
            top: 50%;
            right: 10%;
            transform: translateY(-50%);
            width: 500px;
            padding: 20px;
            background-color: #c8a2c8;
            border-radius: 10px;
        }

        .form h2 {
            margin-bottom: 20px; 
            text-align: center; /* Center the heading text */
        }

        button {
            width: 100%; /* Make the button fill the width of the container */
            padding: 10px;
            background-color: #a86add;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form label {
            display: block; 
            margin-bottom: 5px; 
            color: white;
        }

        .form input[type=text], .form input[type=email], .form input[type=password], .form input[type=date]{
            width: 95%; 
            padding: 8px; 
            margin-bottom: 20px;
            border-radius: 20px;
        }

        .logindesign {
            position: absolute;
            left: 10%;
            background-color: rgba(133, 73, 167, 0.8);
            height: 100%; 
            padding: 20px; 
            color: white; 
        }

        /* Added styles for the specified text */
        .logindesign p {
            font-size: 20px;
            font-style: italic;
        }

        /* Added styles to make the "Login" text clickable */
        .logindesign p.clickable {
            cursor: pointer;
            text-decoration: underline;
        }

        .logo {
            position: absolute;
            top: 30px; 
            right: 25px; 
            width: 90px; 
            height: 82px; 
        }
    </style>
</head>
<body>
    <a href="/" class="back-button">
        <i class="bi bi-arrow-left-circle-fill"></i>
        <span>back</span>
    </a>
    <div class="logindesign">
        <img src="assets\images\logggo.png" alt="Logo" class="logo">
        <p>CITY HALL</p>
        <p>CALAPAN CITY</p>
        <p>Create</p>
        <p style="font-size: 18px; font-style: italic;">Register</p>
        <p class="clickable" onclick="location.href='login'">Already Registered? Login</p>

        <img src="assets\images\regimage.png" alt="City Hall Image">
    </div>

    <div class="form">
        <h2>Register</h2>
        <form>
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="Insert your first name" required>

            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" placeholder="Insert your last name" required>

            <label for="email">E-mail Address</label>
            <input type="email" id="email" name="email" placeholder="Insert your e-mail address" required>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Create your username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Create your password" required>

            <label for="terms">I have read the Terms & Conditions</label>
            <input type="checkbox" id="terms" name="terms" required>

            <button type='submit'>Sign Up</button>
        </form>
        <p>Already have an Account? <a href="login">Click here to Sign In</a></p>
    </div>

</body>
</html>
