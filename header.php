<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat | Ficky 15472</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container">
            <a class="navbar-brand" href="index.php">Pengaduan Masyarakat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    if ($_SESSION['login'] == 'admin') { ?>
                        <a class="nav-link" href="index.php?page=tanggapan">Data Tanggapan</a>
                        <a class="nav-link" href="index.php?page=pengaduan">Data Pengaduan</a>
                        <a class="nav-link" href="index.php?page=masyarakat">Data Masyarakat</a>
                        <a class="nav-link" href="index.php?page=petugas">Data Petugas</a>
                        <a class="nav-link" href="../config/aksi_logout.php">Keluar</a>
                    <?php } elseif ($_SESSION['login'] == 'petugas') { ?>
                        <a class="nav-link" href="index.php?page=pengaduan">Data Pengaduan</a>
                        <a class="nav-link" href="../config/aksi_logout.php">Keluar</a>
                    <?php } elseif ($_SESSION['login'] == 'masyarakat') { ?>
                        <a class="nav-link" href="../config/aksi_logout.php">Keluar</a>
                    <?php } else { ?>
                        <a class="nav-link" href="index.php?page=registrasi">Daftar Akun</a>
                        <a class="nav-link" href="index.php?page=login">Login</a>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>