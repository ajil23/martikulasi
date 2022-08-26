<?php
Class Nilai {
    private $Id;
    private $Nilai_Lapangan;
    private $Nilai_KP;
    private $Nilai_Penguji;
    private $Bukti_Nilai_Lapangan;
    private $Id_Mahasiswa;

    private function setdatafrommahasiswa($Id,$Nilai_Lapangan,$Bukti_Nilai_Lapangan) {
        $this->Id = $Id;
        $this->Nilai_Lapangan = $Nilai_Lapangan;
        $this->Bukti_Nilai_Lapangan = $Bukti_Nilai_Lapangan;
    }

    private function setdatafromdosen($Id,$Nilai_KP) {
        $this->Id = $Id;
        $this->Nilai_KP = $Nilai_KP;
    }

    private function setdatafrompenguji($Id,$Nilai_Penguji) {
        $this->Id = $Id;
        $this->Nilai_Penguji = $Nilai_Penguji;
    }

    public function getId() {
        return $this->Id;
    }

    public function getNilaiLapangan() {
        return $this->Nilai_Lapangan;
    }

    public function getNilaiKP() {
        return $this->Nilai_KP;
    }

    public function getIdNilaiPenguji() {
        return $this->Nilai_Penguji;
    }

    public function getBuktiNilaiLapangan() {
        return $this->Bukti_Nilai_Lapangan;
    }

    public function getIdMahasiswa() {
        return $this->Id_Mahasiswa;
    }

    public function isidatafrommahasiswa($Id,$Nilai_Lapangan,$Bukti_Nilai_Lapangan) {
        $this->setdatafrommahasiswa($Id,$Nilai_Lapangan,$Bukti_Nilai_Lapangan);
    }

    public function isidatafromdosen($Id,$Nilai_KP) {
        $this->setdatafromdosen($Id,$Nilai_KP);
    }

    public function isidatapenguji($Id,$Nilai_Penguji) {
        $this->setdatafrompenguji($Id,$Nilai_Penguji);
    }
}

Class OperationsNilai extends Nilai {
    public function FindIdNilai () {
        include "koneksi.php";
        $query = "select Id from tb_nilai order by Id desc limit 1";
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


    public function InputDataNilai() {
        include "koneksi.php";
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function AmbilDataNilai() {
        include "koneksi.php";
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
        return $mysql;
    }

    public function EditDataNilai() {
        include "koneksi.php";
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
    }
}

?>