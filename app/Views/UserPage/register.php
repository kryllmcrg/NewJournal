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

        .form-grid {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .form-column {
            flex: 1;
            max-width: calc(50% - 20px); /* Adjust the width as needed */
        }

        @media screen and (max-width: 600px) {
            .form-column {
                max-width: 100%;
            }
        }

        .profile-image-label {
            display: block;
            margin-bottom: 10px;
            color: #4a4a4a;
            font-weight: bold;
            text-align: left;
        }

        /* Style for profile image input */
        .profile-image-input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            transition: border-color 0.3s ease;
        }

        /* Hover effect for profile image input */
        .profile-image-input:hover {
            border-color: #a86add;
        }

        /* Focus effect for profile image input */
        .profile-image-input:focus {
            outline: none;
            border-color: #a86add;
            box-shadow: 0 0 0 2px rgba(168, 106, 221, 0.2);
        }

        .required-sign {
            color: red;
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
    <form method="post" action="/store" enctype="multipart/form-data" class="form-grid">
        <div class="form-column">
            <label for="fullname">Full Name <span class="required-sign">*</span></label>
            <input type="text" id="fullname" name="fullname" placeholder="Insert your fullname" required>
            

            <label for="email">E-mail Address <span class="required-sign">*</span></label>
            <input type="email" id="email" name="email" placeholder="Insert your e-mail address" required>

            <label for="username">Username <span class="required-sign">*</span></label>
            <input type="text" id="username" name="username" placeholder="Create your username" required>

        </div>

        <div class="form-column">
            <label for="password">Password <span class="required-sign">*</span></label>
            <input type="password" id="password" name="password" placeholder="Create your password" required>

            <label for="role">Role <span class="required-sign">*</span></label>
            <select id="role" name="role" required>
                <option value="">Select Role</option>
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
                <option value="user">User</option>
            </select>

            <label for="profile_image" class="profile-image-label">Profile Image <span class="required-sign">*</span></label>
            <input type="file" id="profile_image" name="profile_image" accept="image/*" class="profile-image-input">
        </div>
        <button type="submit" class="full-width">Sign Up</button>
            <label for="terms">
                <input type="checkbox" id="terms" name="terms" required>
                I have read the Terms & Conditions
            </label>
    </form>
    <p>Already have an Account? <a href="login">Click here to Sign In</a></p>
</div>
</body>
</html>
