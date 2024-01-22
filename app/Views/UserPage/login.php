<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Font+Name" rel="stylesheet">

    <title>Login</title>
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
        }
        
        .form {
            position: absolute;
            top: 50%;
            right: 10%;
            transform: translateY(-50%);
            width: 300px;
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

        /* Media queries for responsiveness */
        @media only screen and (max-width: 768px) {
            .form {
                width: 100%;
                right: 0;
            }

            .logindesign p {
                font-size: 16px;
            }
        }

        .logo {
            position: absolute;
            top: 30px; /* Adjust the top distance as needed */
            right: 10px; /* Adjust the right distance as needed */
            width: 80px; /* Adjust the width as needed */
            height: 80px; /* Adjust the height as needed */
        }
    </style>
</head>
<body>
    <a href="/" class="back-button">
        <button type="button">Back</button>
    </a>
    <div class="logindesign">
        <img src="assets\images\loggo.png" alt="Logo" class="logo">
        <p>CITY HALL</p>
        <p>CALAPAN CITY</p>
        <p>Create</p>
        <p style="font-size: 18px; font-style: italic;">New Account</p>
        <p class="clickable" onclick="location.href='register'">Don't have an account?  Register</p>

        <img src="assets\images\loginimage.png" alt="City Hall Image">
    </div>

    <div class="form">
        <h2>Login</h2>
        <form>
            <label for="name">NAME</label>
            <input type="text" id="name" name="name" placeholder="Enter Name" required>

            <label for="email">EMAIL</label>
            <input type="email" id="email" name="email" placeholder="Enter Email" required>

            <label for="password">PASSWORD</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>

            <label for="dob">DATE OF BIRTH</label>
            <input type="date" id="dob" name="dob" required>
            <br>
            <br>
            <button type='submit'>Sign In</button>
        </form>
    </div>
</body>
</html>
