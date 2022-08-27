<?php
$koneksi = mysqli_connect("localhost","root","","db_martikulasi");
if(!$koneksi) {
   //pesan database tidak dapat tersambung
    function alertWindow($msg) {       
             echo "<script type ='text/JavaScript'>";  
              echo "alert('$msg')";  
              echo "</script>";   
    }    
    alertWindow("Tidak dapat terhubung ke database");   
}
