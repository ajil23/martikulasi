<?php
include ("objekdosen.php");
$Dosen = new Dosen();

$Id = $_GET['Id'];
global $Id;
$Dosen->HapusDataDosen($Id);
function alertWindow($msg) {       
    echo "<script type ='text/JavaScript'>";  
     echo "alert('$msg')";  
     echo "</script>";   
   }    
alertWindow("Berhasil dihapus ");   
header("location:  http://localhost/martikulasi/dosen.php");
?>