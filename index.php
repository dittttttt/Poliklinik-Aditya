<!DOCTYPE html>
<html lang="en">

<style>
     body {
        background-color: #E4FBFF;
    }

    .client_section {
        padding: 50px 0;
        background-color: #fff;
        color: #fff;
    }

    .heading_container {
        text-align: center;
        margin-bottom: 40px;
    }

    .heading_container h2 {
        font-size: 32px;
        margin-bottom: 10px;
    }

    .testimonial-card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 15px;
    }

    .card {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-content {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 20px;
        padding: 20px;
    }

    .img-box {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .img-box img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
    }

    .text-content {
        text-align: left;
    }

    .text-content h6 {
        font-size: 18px;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .location {
        font-size: 14px;
        color: #fff;
        margin-bottom: 10px;
    }

    .testimonial-text {
        font-size: 14px;
        line-height: 1.6;
    }

    .home-page {
        background-image: url('assets/images/blur-hospital.jpg');
        background-position: center;
        background-size: cover;
    }

    .about-text {
        border: 2px solid #333; /* Menambahkan border */
        border-radius: 12px; /* Membuat sudut rounded */
        padding: 10px 10px; /* Menambahkan padding untuk memberi jarak antara teks dan border */
        font-size: 18px; /* Opsional: Menentukan ukuran font */
        text-align: center; /* Menyelaraskan teks ke tengah */
        width: 150px;
    }

    .footer-section {
        width: 100%; /* Menetapkan lebar penuh */
        padding: 50px 0;
        background-color: white; /* Ganti dengan warna latar belakang yang diinginkan */
        text-align: center;
    }

    .footer-section h2 {
        font-size: 32px;
        font-weight: bold;
        color: #333; /* Ganti dengan warna teks yang diinginkan */
    }

    @media (max-width: 768px) {
        .card-content {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .img-box {
            justify-content: center;
            margin-bottom: 15px;
        }
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--  Poliklinik Udinus dibuat oleh Aditya Herdiansyah Putra - A11.2021.13948 -->
    <title>Poliklinik</title>
    <link rel="icon" type="image/png" href="assets\images\logo1.svg">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Fav Icon -->
</head>

<body class="hold-transition login-page" style="background-color: #F5FDFE;">
    <nav class="navbar navbar-expand navbar-white navbar-light w-100" style="background-color: #fff; 
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
            margin-bottom: 24px;">
        <div class="d-flex w-100 justify-content-center align-items-center">
            <img 
                src="assets/images/logo.svg" 
                alt="Logo" 
                class="img-fluid" 
                style="width: 250px; margin: 10px;">
        </div>
    </nav>
        <!-- Section 1: Banner -->
    <section class="banner-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Div Pertama -->
                <div class="col-md-6 text-left d-flex flex-column justify-content-center">
                    <p style="font-size: 20px;">
                        Selamat Datang,
                    </p>
                    <h1 style="font-size: 75px;">
                        <b>Klinik Mahasiswa Terpercaya</b>
                    </h1>
                    <p style="font-size: 20px;">
                        Solusi kesehatan terbaik untuk Anda.
                    </p>
                    <p style="font-size: 12px;">
                        Oleh : Aditya Herdiansyah Putra - A11.2021.13948
                    </p>
                    <a href="#about-us-section" 
                        class="about-text" 
                        style="color: black; text-decoration: none; transition: background-color 0.3s ease, color 0.3s ease;" 
                        onmouseover="this.style.backgroundColor='#FCF0DB'; this.style.color='black'" 
                        onmouseout="this.style.backgroundColor=''; this.style.color='black'">Tentang Kami</a>

                </div>

                <!-- Div Kedua -->
                <div class="col-md-6 text-right">
                    <img src="assets/images/ornament_pasien.svg" 
                        alt="Logo" 
                        class="img-fluid" 
                        style="width: 800px;">
                </div>
            </div>
        </div>
    </section>

    <div class="full-width-background bg-white my-5" style="background-color: #fff; 
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 12px; ">
        <div class="container mt-5">
            <h2 class="text-center mb-4"><b>Masuk</b></h2>
            <div class="row justify-content-lg-center mx-5 mb-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-user fa-fw mb-3 text-secondary" style="font-size: 34px;"></i>
                            <h3 class="">Pasien</h3>
                            <p class="card-text">Apabila anda adalah seorang Pasien, Silahkan Login terlebih dahulu untuk
                                melakukan pendaftaran sebagai pasien</p>
                            <a href="loginUser.php" class="btn btn-secondary btn-block">Login Sebagai Pasien</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-user-nurse fa-fw mb-3 text-info" style="font-size: 34px;"></i>
                            <h3 class="">Dokter</h3>
                            <p class="card-text">Apabila anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk
                                memulai melayani pasien</p>
                            <div class="d-grid">
                                <a href="login.php" class="btn btn-info btn-block">Login Sebagai Dokter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about-us-section" class="about-us-section" style="padding: 50px 0;">
        <div class="container">
            <h2 class="text-center" style="margin-bottom: 50px;"><b>Tentang Kami</b></h2>
            <div class="row">
                <!-- Video Section -->
                <div class="col-md-6">
                    <div class="video-container" style="margin-bottom: 30px;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/NgDLtzeNOfU?si=XTljaKdBGQjopRBl" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- Service Explanation Section -->
                <div class="col-md-6">
                    <div class="service-description" style="padding-left: 30px; padding-right: 30px; margin-bottom: 30px; text-align: justify;">
                        <h3 style="margin-bottom: 20px;">Pelayanan Kami</h3>
                        <p>Klinik kami menyediakan berbagai layanan medis yang berkualitas, termasuk konsultasi dokter umum, layanan laboratorium, serta perawatan kesehatan lainnya. Kami berkomitmen untuk memberikan pelayanan terbaik dan memastikan kenyamanan pasien.</p>
                        <ul style="padding-left: 20px;">
                            <li style="margin-bottom: 10px;"><b>Konsultasi Dokter Umum</b>: Layanan untuk pemeriksaan kesehatan umum dengan dokter yang berpengalaman.</li>
                            <li style="margin-bottom: 10px;"><b>Laboratorium</b>: Pemeriksaan laboratorium untuk mendukung diagnosis yang akurat.</li>
                            <li style="margin-bottom: 10px;"><b>Perawatan Kesehatan</b>: Berbagai layanan perawatan untuk memastikan kesehatan pasien tetap optimal.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-section" style="background-color: #fff; 
            box-shadow: 0px -4px 8px rgba(0, 0, 0, 0.1); 
            margin-top: 24px; text-align: center; padding: 20px;">
        <h2>Terima Kasih</h2>
        <p>&copy; 2024 Poliklinik. All rights reserved.</p>
        <p>Aditya Herdiansyah Putra - A11.2021.13948</p>
    </section>

        <!-- jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>