<?php
include ("objekmahasiswa.php");
include ("objekdosen.php");
include ("objekuser.php");

$Mahasiswa = new Mahasiswa();
$Dosen = new Dosen();
$User = new User();

$IdUser = $_GET['Id_User'];
$Role = $_GET['Role'];
$IdPemilik = $_GET['Id'];

echo $IdUser;
echo $Role;
echo $IdPemilik;

switch ($Role) {
    case "Mahasiswa" :
        global $IdUser,$IdPemilik;

        $Mahasiswa->HapusAkunMahasiswa($IdPemilik);
        $User->HapusDataUser($IdUser);

        break;
    case "Dosen" || "Admin" :
        global $IdUser,$IdPemilik;

        $Dosen->HapusAkunDosen($IdPemilik);
        $User->HapusDataUser($IdUser);

        break;
    case "Koordinator KP" :
        global $IdUser,$IdPemilik;

        $User->HapusDataUser($IdUser);

        break;
}

header("location:  http://localhost/martikulasi/user-plus.php");
?>