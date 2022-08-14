<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"insert into pendaftaran_kp set
    id = '$_POST[nim]',
    tempat_KP = '$_POST[tempat]',
    alamat_KP = '$_POST[alamat]',
    tanggal_Mulai = '$_POST[mulai]',
    tanggal_Selesai = '$_POST[selesai]',
    proposal = '$_POST[proposal]',
    id_anggota = '$_POST[anggota]',
    id_dosen = '$_POST[dosen]',
    perusahaan = '$_POST[perusahaan]'");

    echo "Data tersimpan";
}
?>