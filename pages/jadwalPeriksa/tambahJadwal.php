<?php
include '../../config/koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $idPoli = $_SESSION['id_poli'];
    $idDokter = $_SESSION['id'];
    $hari = $_POST["hari"];
    $jamMulai = $_POST["jamMulai"];
    $jamSelesai = $_POST["jamSelesai"];

    // Query untuk mengecek apakah dokter sudah memiliki jadwal pada hari yang sama
    $queryExistingSchedule = "SELECT * FROM jadwal_periksa WHERE id_dokter = '$idDokter' AND hari = '$hari'";

    $resultExistingSchedule = mysqli_query($mysqli, $queryExistingSchedule);
    
    // Jika dokter sudah memiliki jadwal pada hari yang sama, maka tolak inputan
    if (mysqli_num_rows($resultExistingSchedule) > 0) {
        echo '<script>alert("Dokter sudah memiliki jadwal pada hari yang sama. Jadwal baru tidak dapat ditambahkan."); window.location.href="../../jadwalPeriksa.php";</script>';
    } else {
        // Cek apakah ada jadwal yang bertabrakan (overlap) dengan waktu yang dipilih
        $queryOverlap = "SELECT * FROM jadwal_periksa INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id INNER JOIN poli ON dokter.id_poli = poli.id 
                         WHERE id_poli = '$idPoli' AND hari = '$hari' AND 
                         ((jam_mulai < '$jamSelesai' AND jam_selesai > '$jamMulai') OR (jam_mulai < '$jamMulai' AND jam_selesai > '$jamMulai'))";

        $resultOverlap = mysqli_query($mysqli, $queryOverlap);

        if (mysqli_num_rows($resultOverlap) > 0) {
            echo '<script>alert("Jadwal baru tidak dapat ditambahkan karena bertabrakan dengan jadwal lain"); window.location.href="../../jadwalPeriksa.php";</script>';
        } else {
            // Query untuk menambahkan data jadwal ke dalam tabel
            $query = "INSERT INTO jadwal_periksa (id_dokter, hari, jam_mulai, jam_selesai) VALUES ('$idDokter', '$hari', '$jamMulai', '$jamSelesai')";
            
            if (mysqli_query($mysqli, $query)) {
                echo '<script>';
                echo 'alert("Jadwal berhasil ditambahkan!");';
                echo 'window.location.href = "../../jadwalPeriksa.php";';
                echo '</script>';
                exit();
            } else {
                // Jika terjadi kesalahan, tampilkan pesan error
                echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
            }
        }
    }
}

// Tutup koneksi
mysqli_close($mysqli);
?>
