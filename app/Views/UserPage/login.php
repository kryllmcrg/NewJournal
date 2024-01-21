<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        }
        .form {
            position: absolute;
            top: 50%;
            right: 10%;
            transform: translateY(-50%);
            width: 300px;
            padding: 20px;
            background-color: #c8a2c8;
        }

        .form h2 {
            margin-bottom: 20px; 
        }

        .form label {
            display:block; 
            margin-bottom:5px; 
        }

        .form input[type=text], .form input[type=email], .form input[type=password] {
            width:100%; 
            padding:10px; 
            margin-bottom:20px; 
        }

        .form select {
            width:100%; 
            padding:10px; 
            margin-bottom:20px;  
        }
        label {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <div class="form">
        <h2>Login</h2>
        <form>
            <label for="name">NAME</label>
            <input type="text" id="name" name="name" required>

            <label for="email">EMAIL</label>
            <input type="email" id="email" name="email" required>

            <label for="password">PASSWORD</label>
            <input type="password" id="password" name="password" required>

            <label for="dob">DATE OF BIRTH</label>
            <input type="date" id="dob" name="dob" required>
            <br>
            <br>

            <button type='submit'>Sign Up</button>
        </form>
    </div>

</body>
</html>
