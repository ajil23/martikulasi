<?php
Class Mahasiswa {
    public $Id;
    public $NIM;
    public $Nama;
    public $Alamat;
    public $Kelas;
    public $Email;

    public function FindIdMahasiswa () {
        include "koneksi.php";
        $query = "select Id from tb_mahasiswa order by Id desc limit 1";
        $mysql = mysqli_query($koneksi,$query);
        $Id;

        if  (mysqli_num_rows($mysql) === 1) {
            while ($input = mysqli_fetch_assoc($mysql)) {
                $Id = $input["Id"] + 1 ;
            }
        } else {
            $Id = 1;
        }

        return $Id;
    }

    public function InputDataMahasiswa() {
        global $Id,$Nama,$NIM,$Alamat,$Kelas,$Email;
        include ("koneksi.php");
        $query = "insert tb_mahasiswa (Id, Nama_Mahasiswa,NIM,Kelas,Email,Alamat) values 
        ($Id,'$Nama','$NIM','$Kelas','$Email','$Alamat')";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function InputAkunMahasiswa($Id,$NIM) {
        include ("koneksi.php");
        $query = "update tb_mahasiswa set User_Id = '$Id' where NIM = '$NIM'";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function AmbilDataMahasiswa() {
        include ("koneksi.php");
        $query = "select * from tb_mahasiswa order by NIM asc ";
        $mysql = mysqli_query($koneksi,$query);
        return $mysql;
    }

    public function EditDataMahasiswa() {
        global $Id,$Nama,$NIM,$Alamat,$Kelas,$Email;
        include ("koneksi.php");
        $query = "update tb_mahasiswa set Nama_Mahasiswa = '$Nama', NIM =$NIM, Alamat='$Alamat', Kelas='$Kelas', 
        Email ='$Email' where Id = $Id";
        $mysql = mysqli_query($koneksi,$query);
    }
    
    public function HapusDataMahasiswa($Id) {
        include ("koneksi.php");
        $query = "delete from tb_mahasiswa where Id ='$Id'";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function HapusAkunMahasiswa($Id) {
        include ("koneksi.php");
        $query = "update tb_mahasiswa set User_Id = null where Id = $Id";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function isidatamahasiswa($Id,$NIM,$Nama,$Kelas,$Email,$Alamat) {
        $this->Id = $Id;
        $this->NIM =$NIM;
        $this->Nama = $Nama;
        $this->Alamat = $Alamat;
        $this->Kelas = $Kelas;
        $this->Email = $Email;
    }
    
}

?>