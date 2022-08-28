<?php
include("objekmahasiswa.php");
$Mahasiswa = new Mahasiswa();

if (isset($_POST['submit'])) {
    $Nama = $_POST['Nama'];
    $NIM = $_POST['NIM'];
    $Kelas = $_POST["Kelas"];
    $Email = $_POST["Email"];
    $Alamat = $_POST["Alamat"];

    if ($Nama != null && $NIM != null && $Kelas != null && $Email != null && $Alamat != null) {
        $mysql = $Mahasiswa->AmbilDataMahasiswa();
        $boolean = false;

        while ($ambil = mysqli_fetch_assoc($mysql)) {
            if (
                $Nama == $ambil["Nama_Mahasiswa"] && $NIM == $ambil["NIM"]
                && $Kelas == $ambil["Kelas"] && $Email == $ambil["Email"]
                && $Alamat == $ambil["Alamat"]
            ) {
                $boolean = true;
                //pesan salah data telah ada
                function alertWindow($msg)
                {
                    echo "<script type ='text/JavaScript'>";
                    echo "alert('$msg')";
                    echo "</script>";
                }
                alertWindow("Data telah ada");

                header("location:  http://localhost/martikulasi/mahasiswa-plus.php");
            }
        }

        if ($boolean == false) {
            $Id = $Mahasiswa->FindIdMahasiswa();
            $Mahasiswa->isidatamahasiswa($Id, $NIM, $Nama, $Kelas, $Email, $Alamat);
            $Mahasiswa->InputDataMahasiswa();
            header("location:  http://localhost/martikulasi/mahasiswa.php");
        }
    } else {
        // pesan salah data tidak boleh kosong 
        function alertWindow($msg)
        {
            echo "<script type ='text/JavaScript'>";
            echo "alert('$msg')";
            echo "</script>";
        }
        alertWindow("Data tidak boleh kosong ");
    }
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
    <link rel="stylesheet" href="mahasiswa-style.css">
    <link rel="icon" sizes="180x180" href="asset/android-chrome-192x192.png">
    <link rel="icon" sizes="32x32" href="asset/poliwangi 32x32.png">
    <link rel="icon" sizes="16x16" href="asset/poliwangi 16x16.png">


    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Mahasiswa</title>
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
            <img src="asset/admin.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-book-reader"></i>
                    <span class="text">Tambah Mahasiswa</span>
                </div>
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama</label>
                            <input type="text" name="Nama" class="form-control" id="inputEmail4" placeholder="Nama Mahasiswa">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">NIM</label>
                            <input type="text" name="NIM" class="form-control" id="inputPassword4" placeholder="NIM Mahasiswa">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Kelas</label>
                            <input type="text" name="Kelas" class="form-control" id="inputPassword4" placeholder="Kelas Mahasiswa">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="email" name="Email" class="form-control" id="inputPassword4" placeholder="Email Mahasiswa">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Alamat</label>
                        <input type="text" name="Alamat" class="form-control" id="inputAddress" placeholder="Alamat">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>