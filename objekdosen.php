<?php
Class Dosen {
    public $Id;
    public $Nama;
    public $NIK;

    public function FindIdDosen () {
        include ("koneksi.php");
        $query = "select Id from tb_dosen order by Id desc limit 1";
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

    public function InputDataDosen() {
        global $Id,$Nama,$NIK;
        include ("koneksi.php");
        $query = "insert tb_dosen (Id, Nama_Dosen, NIK) values ($Id,'$Nama',$NIK)";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function InputAkunDosen($Id,$NIK) {
        include ("koneksi.php");
        $query = "update tb_dosen set User_Id = $Id where NIK = '$NIK'";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function AmbilDataDosen() {
        include ("koneksi.php");
        $query = "select * from tb_dosen order by NIK asc";
        $mysql = mysqli_query($koneksi,$query);
        return $mysql;
    }

    public function EditDataDosen() {
        global $Id,$Nama,$NIK;
        include ("koneksi.php");
        $query = "update tb_dosen set Nama_Dosen='$Nama', NIK='$NIK' where Id = $Id";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function HapusDataDosen($Id) {
        include ("koneksi.php");
        $query = "delete from tb_dosen where Id = '$Id'";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function HapusAkunDosen($Id) {
        include ("koneksi.php");
        $query = "update tb_dosen set User_Id = null where Id = $Id";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function IsiDataDosen($Id,$Nama,$NIK) {
        $this->Id = $Id;
        $this->Nama = $Nama;
        $this->NIK = $NIK;
    }
}
?>