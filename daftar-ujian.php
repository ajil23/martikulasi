<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="daftar-ujian.css">
    <link rel="icon" sizes="180x180" href="asset/android-chrome-192x192.png">
    <link rel="icon" sizes="32x32" href="asset/poliwangi 32x32.png">
    <link rel="icon" sizes="16x16" href="asset/poliwangi 16x16.png">
     
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pendaftar Ujian KP</title> 
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
                <li><a href="dash-admin.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="daftar.php">
                    <i class="uil uil-file-edit-alt"></i>
                    <span class="link-name">Pendaftar</span>
                </a></li>
                <li><a href="#">
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
                    <i class="uil uil-clipboard-notes"></i>
                    <span class="text">Pendaftar Ujian Kerja Praktek</span>
                </div>
                <table class="table" border="1">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Laporan</th>
                        <th scope="col">Jadwal</th>
                        <th scope="col">Pendaftar</th>
                        <th scope="col">ACC</th>
                    </tr>
                    </thead>
                    
                    <!--script php -->
                    <?php
                    include "koneksi.php";
                    $ambildata = mysqli_query($koneksi,"select * from tb_pendaftaran_ujian_kp");
                    while ($tampil = mysqli_fetch_array($ambildata)){
                        echo "
                        <tr>
                            <td>$tampil[Id]</td>
                            <td>$tampil[Laporan_KP]</td>
                            <td>$tampil[Jadwal_Ujian]</td>
                            <td>$tampil[Pendaftaran_KP_Id]</td>
                            <td>$tampil[ACC_Ujian_Id]</td>
                        </tr>";
                        //$id++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>