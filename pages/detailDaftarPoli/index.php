<?php
    require 'config/koneksi.php';
    $id = $_GET['id'];
    $ambilDetail = mysqli_query($mysqli, "SELECT 
        dp.id as idDetailPeriksa,
        daftar_poli.id as idDaftarPoli,
        poli.nama_poli,
        dokter.nama,
        jadwal_periksa.hari,
        DATE_FORMAT(jadwal_periksa.jam_mulai, '%H:%i') as jamMulai,
        DATE_FORMAT(jadwal_periksa.jam_selesai, '%H:%i') as jamSelesai,
        daftar_poli.no_antrian,
        p.id as idPeriksa,
        p.tgl_periksa,
        p.catatan,
        p.biaya_periksa,
        GROUP_CONCAT(o.id) as idObat,
        GROUP_CONCAT(o.nama_obat) as namaObat
        FROM daftar_poli
        INNER JOIN jadwal_periksa ON daftar_poli.id_jadwal = jadwal_periksa.id
        INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id
        INNER JOIN poli ON dokter.id_poli = poli.id
        LEFT JOIN periksa p ON daftar_poli.id = p.id_daftar_poli
        LEFT JOIN detail_periksa dp ON p.id = dp.id_periksa
        LEFT JOIN obat o ON dp.id_obat = o.id
        WHERE daftar_poli.id = '$id'
        GROUP BY p.id");

    $data = mysqli_fetch_assoc($ambilDetail);
?>

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card card-solid mx-auto" style="width: 90%; max-width: 900px;">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-body pt-0">
                            <div class="row">
                                <!-- Bagian Kiri -->
                                <div class="col-md-5 d-flex flex-column justify-content-center align-items-center mb-3 mb-md-0">
                                    <h2 class="lead text-center"><b>No Antrian</b></h2>
                                    <div class="rounded-lg d-flex justify-content-center align-items-center"
                                        style="height: 150px; width: 150px; background-color:rgb(0, 127, 191); color: white;">
                                        <h1 style="font-size: 62px"><?php echo $data['no_antrian'] ?></h1>
                                    </div>
                                </div>
                                <!-- Bagian Kanan -->
                                <div class="col-md-7">
                                    <h3 class="card-header text-muted mb-3 text-center text-md-start" style="background-color: #f4f6f9;">
                                        <b>Detail Periksa</b>
                                    </h3>
                                    <h2 class="text-muted text-lg">Nama Dokter : <b><?php echo $data['nama'] ?></b></h2>
                                    <h6 class="text-muted text-lg">Spesialis : <b><?php echo $data['nama_poli'] ?></b></h6>
                                    <h6 class="text-muted text-lg">Tanggal Pemeriksaan : <b><?php echo $data['hari'] ?></b></h6>
                                    <h6 class="text-muted text-lg">Jam Pemeriksaan : <b><?php echo $data['jamMulai'] ?> - <?php echo $data['jamSelesai'] ?></b></h6>
                                    
                                    <p class="text-muted text-lg">Obat yang harus dikonsumsi : <br>
                                    <?php 
                                        if (empty($data['namaObat'])) {
                                            echo "1. Anda belum diperiksa";
                                        } else {
                                            $namaObatArray = explode(',', $data['namaObat']);
                                            foreach ($namaObatArray as $index => $namaObat) {
                                                echo ($index + 1) . ". " . $namaObat . "<br>";
                                            }
                                        }
                                    ?>
                                    </p>
                                    <h5 class="text-muted text-lg"><strong>Biaya Periksa : 
                                    <?php 
                                        if (empty($data['biaya_periksa'])) {
                                            echo "Anda belum diperiksa";
                                        } else {
                                            echo "Rp. " . number_format($data['biaya_periksa'], 0, ',', '.');
                                        } 
                                    ?></strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-start">
                                <a href="dashboard_pasien.php" class="btn btn-md btn-warning">
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @media (max-width: 576px) {
        .rounded-lg {
            height: 120px;
            width: 120px;
        }
    }
</style>
