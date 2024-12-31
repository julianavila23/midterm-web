<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-Library</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-image: url('GIGN.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            background-color: tan;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }
        .container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            max-width: 100%;
            text-align: center;
        }
        .login-box h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 1.5em;
        }
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }
        .login-box a.login-btn {
            display: block;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px;
            margin-top: 10px;
            font-size: 1em;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .login-box a.login-btn:hover {
            background-color: #45a049;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        .login-box a {
            display: block;
            margin-top: 15px;
            color: #4CAF50;
            text-decoration: none;
        }

        .return-btn {
            display: inline-block;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .return-btn:hover {
            background-color: #555;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">E-LIBRARY</div>
    </header>
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="admin.php" class="login-btn">Log In</a>
            </form>
            <a href="forgotpass.php">Forgot your password?</a>
            <a href="signup.php">Sign up</a>
            <a href="main.php" class="return-btn">Return to Main Page</a>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 E-Library. All rights reserved.</p>
    </footer>
</body>
</html>