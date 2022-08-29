<?php
class Ujian {
    public $Id;
    public $Dosen_Penguji;
    public $Tanggal;
    public $Hari;
    Public $ACC;

    public function FindIdUjian () {
        include ("koneksi.php");
        $query = "select Id from tb_acc_ujian order by Id desc limit 1";
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

    public function AmbilDataTampilUjian() {
        include ("koneksi.php");
       
        $query = "select tb_pendaftaran_ujian_kp.Id as Id_Ujian, Laporan_KP, tb_pendaftaran_ujian_kp.Jadwal_Ujian as TanggalJadwal, 
        tb_acc_ujian.Jadwal_Ujian as TanggalACC,Nama_Mahasiswa, tb_mahasiswa.NIM as NIM, Kelas, Dosen_Penguji
        from tb_pendaftaran_ujian_kp
        left join tb_acc_ujian on tb_acc_ujian.Id = tb_pendaftaran_ujian_kp.ACC_Ujian_Id
        left join tb_pendaftaran_kp on tb_pendaftaran_kp.Id = tb_pendaftaran_ujian_kp.Pendaftaran_KP_Id
        left join tb_anggota_kelompok on tb_pendaftaran_kp.Anggota_Kelompok_Id = tb_anggota_kelompok.Id
        left join tb_mahasiswa on tb_mahasiswa.Anggota_Kelompok_Id = tb_anggota_kelompok.Id";
        $mysql = mysqli_query($koneksi,$query);

        return $mysql;
    } 

    public function InputJadwalUjian() {
        include("koneksi.php");

        $query = "insert tb_acc_ujian valuse ($Id,'$Dosen_Penguji',$Tanggal,'$ACC_Ujian')";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function inputDataUjian($Id,$Hari) {
        include ("koneksi.php");

        $query = "update tb_pendaftaran_ujian_kp set Jadwal_Ujian = '$Hari', ACC_ujian_Id = $Id";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function IsiDataUjian($Id,$Dosen_Penguji,$Tanggal,$ACC_Ujian) {
        $this->Id =$Id;
        $this->Dosen_Penguji = $Dosen_Penguji;
        $this->Tanggal = $Tanggal;
        $this->ACC_Ujian = $ACC_Ujian;
    }

    public function HapusDataUjian($Id) {
        include ("koneksi.php");

        $query = "delete from tb_pendaftaran_ujian_kp where Id = $Id";
        $mysql = mysqli_query($koneksi,$query);
    }
}
?>