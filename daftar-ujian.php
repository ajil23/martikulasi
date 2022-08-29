<?php
include ("objekujian.php");
$Ujian = new Ujian();
?>

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
                        <span class="link-name">Daftar</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-clipboard-notes"></i>
                        <span class="link-name">Daftar Ujian</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="index.php">
                        <i class="uil uil-sign-out-alt"></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>
                <li class="mode"> </li>
                <div class="mode-toggle"></div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="dash-content">
            <div class="title">
                <i class="uil uil-clipboard-notes"></i>
                <span class="text">Pendaftar Ujian Kerja Praktek</span>
            </div>
            <div class="overview">
                <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Laporan</th>
                            <th scope="col">Jadwal</th>
                            <th scope="col" colspan="2">Aksi</th>
                        </tr>
                    </thead>
 
                    <!-- script php -->
                    <!-- <?php
                    $ambildata = $Ujian->AmbilDataTampilUjian();
                    $i = 1;

                    while ($tampil = mysqli_fetch_assoc($ambildata)) {
                        echo "
                        <tr>
                            <td>$i</td>
                            <td>$tampil[NIM]</td>
                            <td>$tampil[Nama_Mahasiswa]</td>
                            <td>$tampil[Kelas]</td>
                            <td>$tampil[Laporan_KP]</td>
                            <td>$tampil[TanggalACC]</td>
                            <td>
                            <a href='ubah.php' class='btn btn-warning'>Ubah</a>
                            </td>
                            <td>
                            <a href='?hapus' class='btn btn-danger' onClick=\"return confirm('Apakah anda yakin?');\">Hapus</a>
                            </td>
                       </tr>";
                       $i++;
                    }
            
                    ?> -->
                </table>
                <div class="float">
                    <a href='#' class='btn btn-success' data-toggle="modal" data-target="#exampleModalLong">Tambah data</a>
                </div>
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Masukkan Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                <div class="form-group">
                                    <div>
                                        <label for="formGroupExampleInput2">Dosen Pembimbing</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Judul">
                                    </div>

                                    <div>
                                        <label for="formGroupExampleInput2">Kelas</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Judul">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Jadwal</label>
                                        <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>