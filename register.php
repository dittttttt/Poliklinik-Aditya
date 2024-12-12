<!DOCTYPE html>
<html>

<head>
     <!--  Poliklinik Udinus dibuat oleh Aditya Herdiansyah Putra - A11.2021.13948 -->
    <title>Poliklinik</title>
    <link rel="icon" type="image/png" href="assets\images\logo1.svg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #F5FDFE;
        }

        .register-card {
            width: 600px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin: 30px 0;
        }

        .register-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card-body {
            padding: 30px;
        }

        .register-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
        }

        .register-form button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-link {
            text-align: center;
            margin-top: 10px;
        }

        .login-link a {
            color: #3498db;
            text-decoration: none;
        }

        .login-box-msg {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="card register-card">
            <!-- Gambar di atas card -->
            <img src="assets/images/img_register.jpg" alt="Register Image">

            <div class="card-body">
                <h4 class="text-center">Register</h4>
                <p class="login-box-msg text-center">Daftarkan diri anda sebagai <span class="text-primary">Pasien</span></p>

                <form action="pages/register/checkRegister.php" method="post" class="register-form">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" name="nama" required>

                    <label for="no_ktp">Nomor KTP :</label>
                    <input type="number" class="form-control" name="no_ktp" required>

                    <label for="alamat">Alamat :</label>
                    <input type="text" class="form-control" name="alamat" required>

                    <label for="no_hp">Nomor Handphone :</label>
                    <input type="number" class="form-control" name="no_hp" required>

                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" id="password" class="form-control" name="password" required>
                        <!-- Icon untuk Show/Hide Password -->
                        <span id="togglePassword" class="position-absolute" style="top: 38px; right: 10px; cursor: pointer;">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                    
                    <button type="submit" class="btn btn-block btn-success">
                        Register
                    </button>
                </form>

                <div class="text-center mt-3">
                    <p>- Sudah punya akun? -</p>
                    <a href="loginUser.php" class="login-link">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
        // Toggle type attribute
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        // Toggle icon
        this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
    });
</script>

</html>
