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
                        <span class="link-name">Pendaftar</span>
                    </a></li>
                <li><a href="daftar-ujian.php">
                        <i class="uil uil-clipboard-notes"></i>
                        <span class="link-name">Pendaftar Ujian</span>
                    </a></li>
                <li><a href="unggah.php">
                        <i class="uil uil-upload-alt"></i>
                        <span class="link-name">Unggah</span>
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
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Cari...">
            </div>

            <img src="asset/dosen.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-estate"></i>
                    <span class="text">Dashboard</span>
                </div>
                <div class="title">
                    <span class="text">Pendaftar Kerja Praktek</span>
                </div>
                <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="row">Id</th>
                            <th scope="row">Tempat</th>
                            <th scope="row">Alamat</th>
                            <th scope="row">Mulai</th>
                            <th scope="row">Selesai</th>
                            <th scope="row">Proposal</th>
                            <th scope="row">Anggota</th>
                            <th scope="row">Dosen</th>
                            <th scope="row">Perusahaan</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>

                    <!--script php -->
                    <?php
                    include "koneksi.php";
                    $id = 1107;
                    $ambildata = mysqli_query($koneksi, "select * from pendaftar_kp");
                    while ($tampil = mysqli_fetch_array($ambildata)) {
                        echo "
                        <tr>
                            <td>$tampil[id]</td>
                            <td>$tampil[tempat_KP]</td>
                            <td>$tampil[alamat_KP]</td>
                            <td>$tampil[tanggal_Mulai]</td>
                            <td>$tampil[tanggal_Selesai]</td>
                            <td>$tampil[proposal]</td>
                            <td>$tampil[id_anggota]</td>
                            <td>$tampil[id_dosen]</td>
                            <td>$tampil[perusahaan]</td>
                            <td><a href='?id=$tampil[id]'>Hapus </a></td>
                            <td>Edit</td>
                        </tr>";
                        $id++;
                    }
                    ?>
                </table>
                <?php
                         if(isset($_GET['id'])){
                             mysqli_query($koneksi, "delete from pendaftar_kp where id='$_GET[id]' ");
                             echo "Data telah terhapus";
                             echo "<meta http-equiv=refresh content=2;URL='dash-admin.php'>";
                     }
                     ?>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>