<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pasien</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .register-card {
            width: 100%;
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 30px;
        }

        .register-card h4 {
            text-align: center;
            margin-bottom: 20px;
            color: #4CAF50;
            font-weight: bold;
        }

        .form-control {
            border-radius: 4px;
            border: 1px solid #ced4da;
            padding: 10px;
        }

        .btn-register {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            padding: 10px;
        }

        .btn-register:hover {
            background-color: #45a049;
        }

        .text-muted {
            font-size: 0.9rem;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .password-toggle {
            position: relative;
        }

        .password-toggle .toggle-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="register-card">
        <h4>Registrasi Pasien</h4>
        <p class="text-center text-muted">Silakan isi data diri Anda dengan lengkap</p>
        <form action="pages/register/checkRegister.php" method="post" onsubmit="return validatePassword()">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label for="no_ktp">Nomor KTP:</label>
                <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="Masukkan nomor KTP" pattern="[0-9]+" title="Hanya angka diperbolehkan" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat" required></textarea>
            </div>
            <div class="form-group password-toggle">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" required>
                <i class="fas fa-eye toggle-icon" onclick="togglePassword('password')"></i>
            </div>
            <div class="form-group password-toggle">
                <label for="confirm_password">Konfirmasi Password:</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Masukkan kembali password" required>
                <i class="fas fa-eye toggle-icon" onclick="togglePassword('confirm_password')"></i>
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor Handphone:</label>
                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan nomor handphone" pattern="[0-9]+" title="Hanya angka diperbolehkan" required>
            </div>
            <button type="submit" class="btn btn-register btn-block">Buat Akun</button>
        </form>
        <div class="login-link">
            <p class="text-muted">Sudah punya akun? <a href="loginUser.php">Login disini</a></p>
        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <!-- Custom JS -->
    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const icon = field.nextElementSibling;
            if (field.type === "password") {
                field.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                field.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }

        function validatePassword() {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm_password").value;
            if (password !== confirmPassword) {
                Swal.fire("Kesalahan", "Password dan Konfirmasi Password tidak cocok!", "error");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>
