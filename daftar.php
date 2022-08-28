<?php
class KP
{
    public $Id;
    public $tanggalmulai;
    public $tanggalselesai;

    public function AmbilDataKP()
    {
        include("koneksi.php");

        $query = "select tb_pendaftaran_kp.Id as Id, Proposal, Tanggal_Mulai, Tanggal_Selesai, 
        Nama_Mahasiswa, tb_mahasiswa.NIM as NIM, Nama_Dosen, Nama_Perusahaan from tb_pendaftaran_kp 
        left join tb_perusahaan on tb_pendaftaran_kp.Perusahaan_Id = tb_perusahaan.Id
        left join tb_anggota_kelompok on tb_pendaftaran_kp.Anggota_Kelompok_Id = tb_anggota_kelompok.Id
        left join tb_mahasiswa on tb_mahasiswa.Anggota_Kelompok_Id = tb_anggota_kelompok.Id
        left join tb_dosen on tb_pendaftaran_kp.Dosen_Id = tb_dosen.Id";
        $mysql = mysqli_query($koneksi, $query);

        return $mysql;
    }

    public function Updatejadwal()
    {
        include("koneksi.php");

        $query = "update tb_pendaftaran_kp set Tanggal_Mulai = '$tanggalmulai', Tanggal_Selesai = '$tanggalselesai' 
        where Id = $Id";
        $mysql = mysqli_query($koneksi, $query);
    }

    public function IsisDataKP($Id, $tanggalmulai, $tanggalselesai)
    {
        $this->Id = $Id;
        $this->tanggalmulai = $tanggalmulai;
        $this->tanggalselesai = $tanggalselesai;
    }
}

$KP = new KP();

?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="daftar.css">
    <link rel="icon" sizes="180x180" href="asset/android-chrome-192x192.png">
    <link rel="icon" sizes="32x32" href="asset/poliwangi 32x32.png">
    <link rel="icon" sizes="16x16" href="asset/poliwangi 16x16.png">


    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Pendaftar Kerja Praktek</title>
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
                <li><a href="#">
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
                    <i class="uil uil-file-edit-alt"></i>
                    <span class="text">Pendaftar Kerja Praktek</span>
                </div>
                <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Proposal</th>
                            <th scope="col">Perusahaan</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Mahasiswa</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Mulai</th>
                            <th scope="col">Selesai</th>
                            <th scope="col" colspan="2">Aksi</th>
                        </tr>
                    </thead>

                    <!--script php -->
                    <?php
                    $ambildata = $KP->AmbilDataKP();
                    $i = 1;

                    while ($tampil = mysqli_fetch_assoc($ambildata)) {
                        echo "
                        <tr>
                            <td>$i</td>
                            <td>$tampil[Proposal]</td>
                            <td>$tampil[Nama_Perusahaan]</td>
                            <td>$tampil[NIM]</td>
                            <td>$tampil[Nama_Mahasiswa]</td>
                            <td>$tampil[Nama_Dosen]</td>
                            <td>$tampil[Tanggal_Mulai]</td>
                            <td>$tampil[Tanggal_Selesai]</td>
                            <td>
                                <a href='#' class='btn btn-success'>Buat jadwal</a>
                            </td>
                            <td>
                                 <a href='?hapus=$tampil[Id]' class='btn btn-danger' onClick=\"return confirm('Apakah anda yakin?');\">Hapus</a>
                            </td>
                        </tr>";

                        $i++;
                    }
                    ?>

                </table>
                <?php

                if (isset($_GET['hapus'])) {
                    mysqli_query($koneksi, "delete from tb_pendaftaran_kp where Id_pdftr='$_GET[hapus]'");
                    echo "<meta http-equiv=refresh content=1;URL=daftar.php>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- script javascript -->
    <script src="script.js"></script>
</body>

</html>