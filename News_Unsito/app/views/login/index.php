<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
          background: linear-gradient(to right, #000000, #666666);
          display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background: #0f0f0f;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(255, 255, 255, 0.1);
        }
        .login-card h3 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #ffffff;
        }
        .form-control {
            height: 45px;
            border-radius: 5px;
            margin-bottom: 1rem;
            background-color: #1a1a1a;
            border-color: #333;
            color: #ffffff;
        }
        .form-control::placeholder {
            color: #888;
        }
        .btn-primary {
            background-color: #000000;
            border: 1px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s;
            color: #ffffff;
        }
        .btn-primary:hover {
            background-color: #1a1a1a;
            border-color: #555;
        }
        .btn-light {
            background-color: #1a1a1a;
            color: #ffffff;
            border: 1px solid #333;
            border-radius: 5px;
        }
        .btn-light:hover {
            background-color: #333;
        }
        .btn-block {
            padding: 10px;
        }
        .exit-button {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h3>Iniciar Sesión</h3>
        <form action="<?php echo constant('URL').'loginAdmin/validate'; ?>" method="post">
            <input type="text" name="userLogin" placeholder="Admin User" class="form-control" required>
            <input type="password" name="passLogin" placeholder="Password" class="form-control" required>
            <input type="submit" name="sendLogin" value="INGRESAR" class="btn btn-primary btn-block">
        </form>
        <a href="<?php echo constant('URL'); ?>" class="btn btn-light btn-block exit-button">SALIR</a>
    </div>
</body>
</html>