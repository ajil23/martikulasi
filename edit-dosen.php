<?php
include ("objekdosen.php");
$Dosen = new Dosen();
$Id = $_GET['Id'];

$Namatampil;
$NIKtampil;

$mysql = $Dosen->AmbilDataDosen();
while($ambil = mysqli_fetch_assoc($mysql)) {
    if ($Id == $ambil['Id']) {
        $Namatampil = $ambil["Nama_Dosen"];
        $NIKtampil = $ambil["NIK"];        
    }
}

if (isset($_POST['submit'])) {
    $Nama = $_POST['NamaDosen'];
    $NIK = $_POST['NIKDosen'];

    if ($Nama != null && $NIK != null) {
        $Dosen->IsiDataDosen($Id,$Nama,$NIK);
        $Dosen->EditDataDosen();
        
        //pesan data berhasil di ubah
        function alertWindow($msg) {       
            echo "<script type ='text/JavaScript'>";  
             echo "alert('$msg')";  
             echo "</script>";   
           }    
        alertWindow("Yeay, data berhasil di ubah");   
        header("location:  http://localhost/martikulasi/dosen.php");
       
    } else{
    // pesan salah data tidak boleh kosong 
    function alertWindow($msg) {       
        echo "<script type ='text/JavaScript'>";  
         echo "alert('$msg')";  
         echo "</script>";   
       }    
    alertWindow("Maaf, data tidak boleh kosong ");   
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

    <title>Dosen</title>
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
                    <i class="uil uil-user-md"></i>
                    <span class="text">Ubah Data Dosen</span>
                </div>
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="NamaDosen">Nama</label>
                            <input type="text" name="NamaDosen" class="form-control" id="NamaDosen" value="<?php echo $Namatampil?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="NIKDosen">NIK</label>
                            <input type="text" name="NIKDosen" class="form-control" id="NIKDosen" value="<?php echo $NIKtampil?>">
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