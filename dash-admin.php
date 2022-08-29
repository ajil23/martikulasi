<?php
include("koneksi.php");

$JumlahMahasiswa;
$JumlahPendaftarKP;
$JumlahPendaftarUjian;

$query = "select count(Id) as JumlahMahasiswa from tb_Mahasiswa";
$mysql = mysqli_query($koneksi,$query);

while ($ambildata = mysqli_fetch_assoc($mysql)) {
    $JumlahMahasiswa = $ambildata['JumlahMahasiswa'];

}

$query1 = "select count(Id) as JumlahMahasiswa from tb_pendaftaran_kp";
$mysql1 = mysqli_query($koneksi,$query1);

while ($ambildata = mysqli_fetch_assoc($mysql1)) {
    $JumlahPendaftarKP = $ambildata['JumlahMahasiswa'];

}

$query2 = "select count(Id) as JumlahMahasiswa from tb_pendaftaran_ujian_kp";
$mysql2 = mysqli_query($koneksi,$query2);

while ($ambildata = mysqli_fetch_assoc($mysql2)) {
    $JumlahPendaftarUjian = $ambildata['JumlahMahasiswa'];

}


?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="dash-admin.css">
    <link rel="icon" sizes="180x180" href="asset/android-chrome-192x192.png">
    <link rel="icon" sizes="32x32" href="asset/poliwangi 32x32.png">
    <link rel="icon" sizes="16x16" href="asset/poliwangi 16x16.png">


    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="asset/poliwangi.png" alt="">
            </div>

            <span class="logo_name">Poliwangi</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>
                <li><a href="daftar.php">
                        <i class="uil uil-file-edit-alt"></i>
                        <span class="link-name">Daftar</span>
                    </a></li>
                <li><a href="daftar-ujian.php">
                        <i class="uil uil-clipboard-notes"></i>
                        <span class="link-name">Daftar Ujian</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="index.php">
                        <i class="uil uil-sign-out-alt"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                <li class="mode">

                    </a>

                    <div class="mode-toggle">

                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-estate"></i>
                    <span class="text">Dashboard</span>
                </div>
                <div class="card-deck">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Jumlah Mahasiswa</div>
                        <div class="card-body">
                            <h1 class="card-title"><?php echo $JumlahMahasiswa;?></h1>
                            <p class="card-text">Mahasiswa jurusan teknik informatika</p>
                        </div>
                    </div>
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-header">Jumlah Pendaftar KP</div>
                        <div class="card-body">
                            <h1 class="card-title"><?php echo $JumlahPendaftarKP;?></h1>
                            <p class="card-text">Mahasiswa yang sudah mendaftar kerja praktek</p>
                        </div>
                    </div>
                    <div class="card text-white bg-success mb-3">
                    <div class="card-header">Jumlah Pendaftar Ujian KP</div>
                        <div class="card-body">
                            <h1 class="card-title"><?php echo $JumlahPendaftarUjian;?></h1>
                            <p class="card-text">Mahasiswa yang mendaftar ujian kerja praktek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>