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
        include ("koneksi.php");
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function AmbilDataMahasiswa() {
        include ("koneksi.php");
        $query = "select * from tb_mahasiswa order by NIM asc ";
        $mysql = mysqli_query($koneksi,$query);
        return $mysql;
    }

    public function EditDataMahasiswa() {
        include ("koneksi.php");
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
    }
    public function isidatamahasiswa($Id,$NIM,$Nama,$Alamat,$Kelas,$Email) {
        $this->Id = $Id;
        $this->NIM =$NIM;
        $this->Nama = $Nama;
        $this->Alamat = $Alamat;
        $this->Kelas = $Kelas;
        $this->Email = $Email;
    }
    
}

?>