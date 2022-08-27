<?php
Class User {
    public $Id;
    public $Username;
    public $Password;
    public $Role;
    public $NI;

    public function FindIdUser () {
        include ("koneksi.php");
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

    public function InputDataUser($NomorRole) {
        include ("koneksi.php");
        $query = "insert tb_user values($Id,'$Username','$Password',$NomorRole)";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function AmbilDataUser() {
        include ("koneksi.php");
        $query = "select * from tb_user left join tb_user_role on Id_Role = Id_User 
        left join tb_mahasiswa on tb_mahasiswa.User_Id = tb_user.Id order by Username asc";
        $mysql = mysqli_query($koneksi,$query);
        return $mysql;
    }

    public function EditDataUser() {
        include ("koneksi.php");
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function IsiDataUser($Id,$Username,$Password,$Role,$NI) {
        $this->Id = $Id;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->Role = $Role;
        $this->NI = $NI;
        ;
    }
}

?>