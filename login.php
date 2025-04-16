<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color:#4CAF50 ;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .register-link {
            text-align: center;
            margin-top: 10px;
        }
        .register-link a {
            text-decoration: none;
            color: #4CAF50;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>login</h2>
        <form action="/login" method="POST">
            <label for="email">e-mail</label>
            <input type="email" id="email" name="email" placeholder="enter your email" required>

            <label for="password">password</label>
            <input type="password" id="password" name="password" placeholder="enter your password" required>

            <button type="submit">login</button>
        </form>
        <div class="register-link">
            <p>you do not have an account?<br><a href="/register">create an account</a></p>
        </div>
    </div>

</body>
</html>
