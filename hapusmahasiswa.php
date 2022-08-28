<?php
include ("objekmahasiswa.php");
$Mahasiswa = new Mahasiswa();

$Id = $_GET['Id'];
global $Id;
$Mahasiswa->HapusDataMahasiswa($Id);
header("location:  http://localhost/martikulasi/mahasiswa.php");
?>