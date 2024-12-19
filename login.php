<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dokter</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 30px;
        }

        .login-card h4 {
            text-align: center;
            margin-bottom: 20px;
            color: #4CAF50;
        }

        .form-control {
            border-radius: 4px;
            border: 1px solid #ced4da;
        }

        .btn-login {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #45a049;
        }

        .secondary-link {
            text-align: center;
            margin-top: 15px;
        }

        .secondary-link a {
            color: #007bff;
            text-decoration: none;
        }

        .secondary-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <h4>Login Dokter</h4>
        <p class="text-center text-muted">Masukkan username dan password untuk login</p>
        <form action="pages/login/checkLogin.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" id="username" required placeholder="Masukkan username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" required placeholder="Masukkan password">
            </div>
            <button type="submit" class="btn btn-login btn-block">Masuk</button>
        </form>
        <div class="secondary-link">
            <a href="loginUser.php">Login sebagai Pasien</a>
        </div>
    </div>
</body>

</html>
