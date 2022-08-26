<?
Class User {
    private $Id;
    private $Username;
    private $Password;
    private $Role;
    private $NI;

    private function setdata ($Id,$Username,$Password,$Role,$NI) {
        $this->Id = $Id;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->Role = $Role;
        $this->NI = $NI;
    }

    public function getId () {
        return $this->Id;
    }

    public function getUsername () {
        return $this->Username;
    }

    public function getPassword () {
        return $this->Password;
    }

    public function getRole () {
        return $this->Role;
    }

    public function getNI () {
        return $this->NI;
    }

    public function isidata($Id,$Username,$Password,$Role,$NI) {
        $this->setdata($Id,$Username,$Password,$Role,$NI);
    }
}

Class OperationsUser extends User {
    public function FindIdUser () {
        include "koneksi.php";
        $query = "select Id from tb_user order by Id desc limit 1";
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

    public function InputDataUser() {
        include "koneksi.php";
        $query = "insert tb_user values('')";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function AmbilDataUser() {
        include "koneksi.php";
        $query = "";
        $mysql = mysqli_query($koneksi,$query);
        return $mysql;
    }

    public function EditDataUser() {
        include "koneksi.php";
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
    }

}
?>