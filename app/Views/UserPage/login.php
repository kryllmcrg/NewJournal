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
            background-image: url('assets/images/backgroundcc.jpg'); 
            background-size: cover; 
            background-position: center; 
            height: 100vh; 
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
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
    </style>
</head>
<body>
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
