<div class="container">
    <div class="card">
        <div class="card-header">
            Data Masyarakat
        </div>
        <div class="card-body">
            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">Tambah Data</a>
            <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Masyarakat</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <div class="row mb-3">
                                    <label class="col-md-4">Nik</label>
                                    <div class="col-md-8">
                                        <input type="number" name="nik" class="form-control" placeholder="Masukkan Nik" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4">Nama</label>
                                    <div class="col-md-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4">Username</label>
                                    <div class="col-md-8">
                                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4">Telp</label>
                                    <div class="col-md-8">
                                        <input type="number" name="telp" class="form-control" placeholder="Masukkan Telp" required>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="kirim" class="btn btn-primary">Tambah Data</button>
                        </div>
                        </form>
                        <?php
                        include '../config/koneksi.php';
                        if (isset($_POST['kirim'])) {
                            $nik = $_POST['nik'];
                            $nama = $_POST['nama'];
                            $username = $_POST['username'];
                            $password = md5($_POST['password']);
                            $telp = $_POST['telp'];
                            $level = 'masyarakat';
                            $query = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp','$level')");
                            if ($query) {
                                echo "<script>
                                alert('Masyarakat Berhasil Ditambahkan');
                                window.location='index.php?page=masyarakat';
                                </script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../config/koneksi.php';
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM masyarakat");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nik']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['telp']; ?></td>
                            <td>
                                <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['nik'] ?>">Hapus</a>
                                <div class="modal fade" id="hapus<?php echo $data['nik'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="edit_data.php" method="POST">
                                                    <input type="hidden" name="nik" class="form-control" value="<?php echo $data['nik'] ?>">
                                                    <p>Apakah anda yakin akan menghapus <br> <?php echo $data['nama'] ?> </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="hapus_masyarakat" class="btn btn-danger">Hapus</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>