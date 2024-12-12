<!DOCTYPE html>
<html>

<head>
     <!--  Poliklinik Udinus dibuat oleh Aditya Herdiansyah Putra - A11.2021.13948 -->
    <title>Poliklinik</title>
    <link rel="icon" type="image/png" href="assets/images/logo1.svg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #F5FDFE;
            margin: 0;
        }

        .login-card {
            width: 500px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .login-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card-body {
            padding: 30px;
        }

        .login-form input {
            margin-bottom: 16px;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
        }

        .login-form button {
            background-color: #3498db;
            color: #fff;
            border-radius: 4px;
            width: 100%;
            padding: 10px;
            border: none;
        }

        .login-box-msg {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="card login-card">
            <!-- Gambar di atas kartu -->
            <img src="assets/images/img_loginpasien.jpg" alt="Gambar Login">

            <div class="card-body">
                <h4 class="text-center">Login</h4>
                <p class="login-box-msg text-center">Silahkan login sebagai <span class="text-primary">Pasien</span> untuk melanjutkan</p>

                <form action="pages/loginUser/checkLoginUser.php" method="post" class="login-form">
                    <label for="nama">Username :</label>
                    <input type="text" class="form-control" name="username" required>

                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" id="password" class="form-control" name="password" required>
                        <!-- Ikon untuk Menampilkan/Menyembunyikan Password -->
                        <span id="togglePassword" class="position-absolute" style="top: 38px; right: 10px; cursor: pointer;">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>

                    <button type="submit" class="btn btn-block btn-success">
                        Login
                    </button>
                </form>

                <div class="text-center mt-3">
                    <p>- Belum punya akun pasien? -</p>
                    <a href="register.php" class="register-link">
                        Register
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
        // Ubah atribut tipe
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        // Ubah ikon
        this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
    });
</script>

</html>
