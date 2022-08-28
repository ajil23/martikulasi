<?php
include ("objekdosen.php");
$Dosen = new Dosen();

$Id = $_GET['Id'];
global $Id;
$Dosen->HapusDataDosen($Id);
header("location:  http://localhost/martikulasi/dosen.php");
?>