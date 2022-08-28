<?php
include("objekuser.php");
include("objekmahasiswa.php");
include("objekdosen.php");
$User = new User();
$Mahasiswa = new Mahasiswa();
$Dosen = new Dosen();

if (isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Nama = $_POST["Nama_User"];
    $Role = $_POST["Role"];
    $Number = $_POST["Nomor_Induk"];

    if ($Username != null && $Password != null && $Nama != null && $Role != null && $Number != null) {

        switch ($Role) {
            case "Mahasiswa":
                $mysql = $User->AmbilDataUserMahasiswa();

                while ($ambil = mysqli_fetch_assoc($mysql)) {
                    if ($Username == $ambil["Username"] && $Password == $ambil["Password"]) {
                        // pesen salah akun telah terdaftar
                        function alertWindow($msg)
                        {
                            echo "<script type ='text/JavaScript'>";
                            echo "alert('$msg')";
                            echo "</script>";
                        }
                        alertWindow("Akun telah terdaftar");

                        header("location : http://localhost/martikulasi/dosen_plus.php");
                    }
                }

                $boolean = false;
                $mysql = $Mahasiswa->AmbilDataMahasiswa();
                while ($ambil = mysqli_fetch_assoc($mysql)) {
                    if ($Nama == $ambil["Nama_Mahasiswa"] && $Number == $ambil["NIM"]) {
                        $boolean = true;
                        break;
                    }
                }

                if ($boolean == true) {
                    $Id = $User->FindIdUser();
                    $IdRole = $User->IsiIdRole($Role);

                    $User->IsiDataUser($Id, $Username, $Password, $Role, $Number, $Nama);
                    $User->InputDataUser($IdRole);

                    $Mahasiswa->InputAkunMahasiswa($Id, $Number);
                } else if (!$boolean) {
                    // pesan salah pemilik tidak dapat di temukan
                    function alertWindow($msg)
                    {
                        echo "<script type ='text/JavaScript'>";
                        echo "alert('$msg')";
                        echo "</script>";
                    }
                    alertWindow("Pemilik tidak dapat di temukan");
                }

                break;
            case "Dosen" || "Admin":
                $mysql = $User->AmbilDataUserPegawai();

                while ($ambil = mysqli_fetch_assoc($mysql)) {
                    if ($Username === $ambil["Username"] && $Password === $ambil["Password"]) {
                        // pesen salah akun telah terdaftar
                        function alertWindow($msg)
                        {
                            echo "<script type ='text/JavaScript'>";
                            echo "alert('$msg')";
                            echo "</script>";
                        }
                        alertWindow("Akun telah terdaftar");

                        header("location : http://localhost/martikulasi/dosen_plus.php");
                    }
                }

                $boolean = false;
                $mysql = $Dosen->AmbilDataDosen();
                while ($ambil = mysqli_fetch_assoc($mysql)) {
                    if ($Nama === $ambil["Nama_Dosen"] && $Number === $ambil["NIK"]) {
                        $boolean = true;
                        break;
                    }
                }

                if ($boolean) {
                    $Id = $User->FindIdUser();
                    $IdRole = $User->IsiIdRole($Role);

                    $User->IsiDataUser($Id, $Username, $Password, $Role, $Number, $Nama);
                    $User->InputDataUser($IdRole);

                    $Dosen->InputAkunDosen($Id, $Number);
                } else if (!$boolean) {
                    // pesan salah pemilik tidak dapat di temukan
                    function alertWindow($msg)
                    {
                        echo "<script type ='text/JavaScript'>";
                        echo "alert('$msg')";
                        echo "</script>";
                    }
                    alertWindow("Pemilik tidak dapat di temukan");
                }

                break;
            case "Koordinator KP":
                $mysql = $User->AmbilDataUserPegawai();

                while ($ambil = mysqli_fetch_assoc($mysql)) {
                    if ($Username === $ambil["Username"] && $Password === $ambil["Password"]) {
                        // pesen salah akun telah terdaftar

                        header("location : http://localhost/martikulasi/dosen_plus.php");
                    }
                }

                $Id = $User->FindIdUser();
                $IdRole = $User->IsiIdRole($Role);

                $User->IsiDataUser($Id, $Username, $Password, $Role, $Number, $Nama);
                $User->InputDataUser($IdRole);

                break;
        }
    } else {
        // pesan salah data tidak boleh kosong 
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
                    <i class="uil uil-user-plus"></i>
                    <span class="text">Tambah User</span>
                </div>
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Username</label>
                            <input type="text" name="Username" class="form-control" id="inputEmail4" placeholder="Username">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" name="Password" class="form-control" id="inputPassword4" placeholder="Katasandi">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nama Pemilik</label>
                            <input type="text" name="Nama_User" class="form-control" id="inputPassword4" placeholder="Nama Pemilik">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Role</label>
                            <select name="Role" class="form-control" id="exampleFormControlSelect1">
                                <option>Pilih role</option>
                                <option>Mahasiswa</option>
                                <option>Admin</option>
                                <option>Dosen</option>
                                <option>Koordinator KP</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Nomor Induk</label>
                            <input type="text" name="Nomor_Induk" class="form-control" id="inputPassword4" placeholder="input NIM / NIK user">
                        </div>

                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>