<?php
include ("objeknilai.php");
$nilai = new Nilai();
?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" sizes="180x180" href="asset/android-chrome-192x192.png">
    <link rel="icon" sizes="32x32" href="asset/poliwangi 32x32.png">
    <link rel="icon" sizes="16x16" href="asset/poliwangi 16x16.png">
     
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin</title> 
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
                <li><a href="admin.php">
                    <i class="uil uil-file-graph"></i>
                    <span class="link-name">Nilai Mahasiswa</span>
                </a></li>
                <li><a href="mahasiswa.php">
                    <i class="uil uil-book-reader"></i>
                    <span class="link-name">Mahasiswa</span>
                </a></li>
                <li><a href="dosen.php">
                    <i class="uil uil-user-md"></i>
                    <span class="link-name">Dosen</span>
                </a></li>
                <li><a href="user-plus.php">
                    <i class="uil uil-user-plus"></i>
                    <span class="link-name">User</span>
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
            <i></i>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-file-graph"></i>
                    <span class="text">Nilai Mahasiswa</span>
                </div>
                <div class="table-wrapper-scroll-y my-custom-scrollbar" style="overflow-y:auto;">
                <table class="table table-bordered table-striped mb-0" border="1">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nilai Lapangan</th>
                        <th scope="col">Nilai Kerja Praktek</th>
                        <th scope="col">Nilai Ujian</th>
                        <th scope="col">Nilai Rata-Rata</th>
                    </tr>
                    </thead>
                    
                    <!--script php -->
                    <?php
                    $mysql = $nilai->AmbilDataNilai();
                    $i = 1;

                    while ($tampil = mysqli_fetch_array($mysql)){
                        $rata2 = ($tampil["Nilai_Pembimbing_Lapangan"] + $tampil["Nilai_Pembimbing_KP"] + $tampil["Nilai_Penguji"]) / 3;
                        echo "
                        <tr>
                            <td>$i</td>
                            <td>$tampil[NM]</td>
                            <td>$tampil[Nama_Mahasiswa]</td>
                            <td>$tampil[Nilai_Pembimbing_Lapangan]</td>
                            <td>$tampil[Nilai_Pembimbing_KP]</td>
                            <td>$tampil[Nilai_Penguji]</td>
                            <td>$rata2
                        </tr>";
                        $i++;
                    }
                    ?>
                </table>
                </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>