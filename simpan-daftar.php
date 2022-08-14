<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nim                    = $_POST['id'];
$tempat                 = $_POST['tempat_KP'];
$alamat                 = $_POST['alamat_KP'];
$tanggal_mulai          = $_POST['tanggal_Mulai'];
$tanggal_selesai        = $_POST['tanggal_Selesai'];
$proposal               = $_POST['proposal'];
$anggota                = $_POST['id_anggota'];
$dosen                  = $_POST['id_dosen'];
$perusahaan             = $_POST['perusahaan'];
// query SQL untuk insert data
$query="INSERT INTO pendaftar_kp SET id='$nim',tempat_KP='$tempat',alamat_KP='$alamat',tanggal_Mulai='$tanggal_mulai',tanggal_Selesai='$tanggal_selesai',proposal='$proposal',id_anggota='$anggota',id_dosen='$dosen',perusahaan='$perusahaan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:dash-admin.php");
?>