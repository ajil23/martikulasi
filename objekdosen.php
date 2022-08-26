<?
Class Dosen {
    private $Id;
    private $Nama;
    private $NIK;

    private function setdata ($Id,$Nama,$NIK) {
        $this->Id = $Id;
        $this->Nama = $Nama;
        $this->Alamat = $NIK;
    }

    public function getId () {
        return $this->Id;
    }

    public function getNama () {
        return $this->Nama;
    }

    public function getNIK () {
        return $this->NIK;
    }

    public function isidata($Id,$Nama,$NIK) {
        $this->setdata($Id,$Nama,$NIK);
    }
}

Class OperationsDosen extends Dosen {
    public function FindIdDosen () {
        include "koneksi.php";
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
        include "koneksi.php";
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function AmbilDataDosen() {
        include "koneksi.php";
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
        return $mysql;
    }

    public function EditDataDosen() {
        include "koneksi.php";
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
    }
}
?>