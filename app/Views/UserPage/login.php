<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
    <title>Welcome Calapan City Website!</title>
    <link rel="shortcut icon" href="assets/images/ciologo.png" />
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('assets/images/bglogin.png'); 
            background-size: cover; 
            background-position: center; 
            height: 100vh; 
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
            position: relative;
        }

        .back-button {
            position: absolute;
            top: 10px;
            right: 10px;
            text-decoration: none;
            color: white;
            font-size: 1.5em;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 30px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-family: 'Oswald', sans-serif;
            color: #4a4a4a;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
            color: #4a4a4a;
            font-weight: bold;
            text-align: left;
        }

        .form-container input[type=email],
        .form-container input[type=password] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            border: 1px solid #ccc;
            box-sizing: border-box; /* Ensure padding and border are included in width */
        }

        .form-container button[type=submit] {
            width: 100%;
            padding: 12px;
            background-color: #a86add;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        .form-container p {
            margin-top: 15px;
            font-size: 14px;
            color: #4a4a4a;
        }

        .form-container p a {
            color: #a86add;
            text-decoration: none;
            font-weight: bold;
        }

        .logindesign {
            position: absolute;
            left: 15%;
            background-color: rgba(133, 73, 167, 0.8);
            height: 100%;
            padding: 20px;
            color: white;
            border-radius: 10px;
        }

        .logindesign span {
            font-size: 24px;
            font-style: italic;
        }

        .logindesign p {
            font-size: 16px;
        }

        .logindesign p.clickable {
            cursor: pointer;
            text-decoration: underline;
        }

        @media only screen and (max-width: 768px) {
            .form-container {
                max-width: 90%;
            }
        }
    </style>
</head>
<body>
    <a href="/" class="back-button">
        <i class="bi bi-arrow-left-circle-fill"></i>
        <!-- You can adjust the text as needed -->
        <span></span>
    </a>
    <div class="form-container">
        <h2>Login</h2>
        <form action="/loginAuth" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <button type="submit">Sign In</button>
            <p>Don't have an account? <a href="/register">Sign up</a></p> 
        </form>
    </div>
</body>
</html>
