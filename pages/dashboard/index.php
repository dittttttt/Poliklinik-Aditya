<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Tambahan CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5FDFE;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .dashboard-container {
            padding: 30px;
            background-image: url('assets/images/blur-hospital.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        .card-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 600px;
        }

        .welcome-message {
            text-align: center;
            color: blue;
            padding: 20px;
        }

        .welcome-message h1 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .welcome-message p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #7f8c8d;
        }

        .greeting-text {
            font-size: 24px;
            font-weight: 600;
            color: #3498db;
            margin-bottom: 40px;
            text-align: center;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8); /* Background transparan untuk card */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 24px;
            font-weight: 700;
            color: #2980b9;
        }

        .card-text {
            font-size: 16px;
            color: #7f8c8d;
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <!-- Card Container -->
        <div class="card-container">
            <div class="card">
                <!-- Welcome Section -->
                <div class="welcome-message">
                    <h1 style="color: black;">Selamat Datang, <?php echo $username ?>!</h1>
                    <h2 style="font-size: 48px;"><b>POLIKLINIK UDINUS</b></h2>
                    <p>Terima kasih telah memilih kami sebagai mitra kesehatan Anda. Kami berkomitmen untuk memberikan layanan kesehatan terbaik untuk Anda.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
