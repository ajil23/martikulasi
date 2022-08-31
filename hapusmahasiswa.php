<?php
include ("objekmahasiswa.php");
$Mahasiswa = new Mahasiswa();

$Id = $_GET['Id'];
global $Id;
$Mahasiswa->HapusDataMahasiswa($Id);
function alertWindow($msg) {       
    echo "<script type ='text/JavaScript'>";  
     echo "alert('$msg')";  
     echo "</script>";   
   }    
alertWindow("Berhasil dihapus");   
header("location:  http://localhost/martikulasi/mahasiswa.php");
?>