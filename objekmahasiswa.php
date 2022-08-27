<?
Class Mahasiswa {
    private $Id;
    private $NIM;
    private $Nama;
    private $Alamat;
    private $Kelas;
    private $Email;

    private function setdata ($Id,$NIM,$Nama,$Alamat,$Kelas,$Email) {
        $this->Id = $Id;
        $this->NIM = $NIM;
        $this->Nama = $Nama;
        $this->Alamat = $Alamat;
        $this->Kelas = $Kelas;
        $this->Email = $Email;
    }

    public function getId () {
        return $this->Id;
    }
    public function getNIM () {
        return $this->NIM;
    }

    public function getNama () {
        return $this->Nama;
    }

    public function getAlamat () {
        return $this->Alamat;
    }

    public function getKelas () {
        return $this->Kelas;
    }

    public function getEmail () {
        return $this->Email;
    }

    public function isidata($Id,$NIM,$Nama,$Alamat,$Kelas,$Email) {
        $this->setdata($Id,$NIM,$Nama,$Alamat,$Kelas,$Email);
    }
}

Class OperationsMahasiswa extends Mahasiswa {
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
        include "koneksi.php";
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function AmbilDataMahasiswa() {
        include "koneksi.php";
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
        return $mysql;
    }

    public function EditDataMahasiswa() {
        include "koneksi.php";
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
    }
    
}
?>