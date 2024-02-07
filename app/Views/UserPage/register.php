<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
    <title>Welcome Calapan City Website!</title>
    <link rel="shortcut icon" href="assets/images/logggo.png" />
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
            max-width: 500px;
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

        .form-container input[type=text],
        .form-container input[type=email],
        .form-container input[type=password],
        .form-container select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            border: 1px solid #ccc;
        }

        .form-container input[type=checkbox] {
            margin-right: 5px;
            vertical-align: middle;
        }

        .form-container button[type=submit] {
            width: 100%;
            padding: 12px;
            background-color: #a86add;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
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
    </style>
</head>
<body>
    <a href="/" class="back-button">
        <i class="bi bi-arrow-left-circle-fill"></i>
        <!-- You can adjust the text as needed -->
        <span>Back</span>
    </a>

    <div class="form-container">
        <h2>Register</h2>
        <form method="post" action="/register">
            <label for="first_name">Full Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="Insert your first name" required>

            <label for="email">E-mail Address</label>
            <input type="email" id="email" name="email" placeholder="Insert your e-mail address" required>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Create your username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Create your password" required>

            <label for="role">Role</label>
            <select id="role" name="role" required>
                <option value="">Select Role</option>
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
                <option value="user">User</option>
            </select>

            <label for="terms">
                <input type="checkbox" id="terms" name="terms" required>
                I have read the Terms & Conditions
            </label>

            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an Account? <a href="login">Click here to Sign In</a></p>
    </div>
</body>
</html>
