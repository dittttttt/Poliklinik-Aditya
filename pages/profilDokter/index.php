<?php 
    require 'config/koneksi.php';
    $query = "SELECT * FROM dokter WHERE id = '$_SESSION[id]'";
    $result = mysqli_query($mysqli,$query);
    $data = mysqli_fetch_assoc($result)
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
                                    <div class="image">
                                        <img src="assets\images\profil_doctor.svg" class="img-circle elevation-2" alt="User Image" style="width: 175px; height: 175px;">
                                    </div>
                                </div>
                                <!-- Bagian Kanan -->
                                <div class="col-md-7">
                                    <h3 class="card-header text-muted mb-3 text-center text-md-start" style="background-color: #f4f6f9;">
                                        <b>Profil Dokter</b>
                                    </h3>
                                    <table class="table table-borderless" style="font-size: 18px;">
                                        <tr>
                                            <th>Nama</th>
                                            <td>: <?php echo $data['nama'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>: <?php echo $data['alamat'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nomor Telepon</th>
                                            <td>: <?php echo $data['no_hp'] ?></td>
                                        </tr>
                                        <tr>
                                            <?php 
                                                $query = "SELECT * FROM poli WHERE id = '$data[id_poli]'";
                                                $result = mysqli_query($mysqli,$query);
                                                $data = mysqli_fetch_assoc($result) 
                                            ?>
                                            <th>Poliklinik</th>
                                            <td>: <?php echo $data['nama_poli'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type='button' class='btn btn-sm btn-warning edit-btn'data-toggle="modal" data-target="#editModal<?php echo $data['id']?>">Edit Profil</button>
                        </div>

                        <!-- Modal Edit Data Dokter -->
                        <div class="modal fade" id="editModal<?php echo $data['id']?>" tabindex="-1"
                                        role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addModalLabel">Edit Data Dokter</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form edit data Dokter disini -->
                                                    <?php 
                                                        require 'config/koneksi.php';
                                                        $query = "SELECT * FROM dokter WHERE id = '$_SESSION[id]'";
                                                        $result = mysqli_query($mysqli,$query);
                                                        $data = mysqli_fetch_assoc($result)
                                                    ?>
                                                    <form action="pages/profilDokter/updateDokter.php" method="post">
                                                        <input type="hidden" class="form-control" id="id" name="id"
                                                            value="<?php echo $data['id'] ?>" required>
                                                        <div class="form-group">
                                                            <label for="nama">Nama dokter</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                name="nama" value="<?php echo $data['nama'] ?>"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat">Alamat</label>
                                                            <textarea class="form-control" rows="3" id="alamat"
                                                                name="alamat"><?php echo $data['alamat'] ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_hp">No Hp</label>
                                                            <input type="text" class="form-control" id="no_hp"
                                                                name="no_hp" value="<?php echo $data['no_hp'] ?>"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="poli">Poli</label>
                                                            <select class="form-control" id="poli" name="poli">
                                                                <?php
                                                                require 'config/koneksi.php';
                                                                $query = "SELECT * FROM poli";
                                                                $results  = mysqli_query($mysqli,$query);
                                                                while ($dataPoli = mysqli_fetch_assoc($results)) {
                                                                    $selected = $dataPoli['id']
                                                                ?>
                                                                <option value="<?php echo $dataPoli['id'] ?>">
                                                                    <?php echo $dataPoli['nama_poli'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>