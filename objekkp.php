<?php
class KP {
    public $Id;
    public $tanggalmulai;
    public $tanggalselesai;

    public function AmbilDataKP() {
        include ("koneksi.php");
       
        $query = "select tb_pendaftaran_kp.Id as Id, Proposal, Tanggal_Mulai, Tanggal_Selesai, 
        Nama_Mahasiswa, tb_mahasiswa.NIM as NIM, Nama_Dosen, Nama_Perusahaan, Kelas from tb_pendaftaran_kp 
        left join tb_perusahaan on tb_pendaftaran_kp.Perusahaan_Id = tb_perusahaan.Id
        left join tb_anggota_kelompok on tb_pendaftaran_kp.Anggota_Kelompok_Id = tb_anggota_kelompok.Id
        left join tb_mahasiswa on tb_mahasiswa.Anggota_Kelompok_Id = tb_anggota_kelompok.Id
        left join tb_dosen on tb_pendaftaran_kp.Dosen_Id = tb_dosen.Id";
        $mysql = mysqli_query($koneksi,$query);

        return $mysql;
    } 

    public function Updatejadwal() {
        include ("koneksi.php");

        $query = "update tb_pendaftaran_kp set Tanggal_Mulai = '$tanggalmulai', Tanggal_Selesai = '$tanggalselesai' 
        where Id = $Id";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function IsisDataKP($Id,$tanggalmulai,$tanggalselesai) {
        $this->Id = $Id;
        $this->tanggalmulai = $tanggalmulai;
        $this->tanggalselesai = $tanggalselesai;
    }

    public function HapusDataKP($Id) {
        include ("koneksi.php");

        $query = "delete from tb_pendaftaran_kp where Id = $Id";
        $mysql = mysqli_query($koneksi,$query);
    }
}
?>