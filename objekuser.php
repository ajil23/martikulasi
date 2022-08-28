<?php
Class User {
    public $Id;
    public $Username;
    public $Password;
    public $Role;
    public $NI;
    public $NR;

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
        global$Id,$Username,$Password,$Username,$Role;
        include ("koneksi.php");
        $query = "insert tb_user values($Id,'$Username','$Password',$NomorRole)";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function AmbilDataUserMahasiswa() {
        include ("koneksi.php");
        $query = "select * from tb_user left join tb_user_role on Id_Role = Id_User 
        left join tb_mahasiswa on tb_mahasiswa.User_Id = tb_user.Id order by Username asc";
        $mysql = mysqli_query($koneksi,$query);
        return $mysql;
    }

    public function AmbilDataUserPegawai() {
        include ("koneksi.php");
        $query = "select * from tb_user left join tb_user_role on Id_Role = Id_User 
        left join tb_dosen on tb_dosen.User_Id = tb_user.Id order by NIK asc";
        $mysql = mysqli_query($koneksi,$query);
        return $mysql;
    }

    public function AmbilDataUser() {
        include ("koneksi.php");
        $query = "select tb_user.Id as Id_User, Username, Role, Nama_Mahasiswa , Nama_Dosen, tb_mahasiswa.Id as Id_Mahasiswa,
        tb_dosen.Id as Id_Dosen from tb_user 
        left join tb_user_role on Id_Role = Id_User 
        left join tb_dosen on tb_dosen.User_Id = tb_user.Id 
        left join tb_mahasiswa on tb_mahasiswa.User_Id = tb_user.Id
        order by Username asc";
        $mysql = mysqli_query($koneksi,$query);
        return $mysql;

    }

    public function EditDataUser() {
        include ("koneksi.php");
        $query = " ";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function IsiDataUser($Id,$Username,$Password,$Role,$NI,$Nama) {
        $this->Id = $Id;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->Role = $Role;
        $this->NI = $NI;
        $this->Nama = $Nama;
        ;
    }

    public function HapusDataUser($Id) {
        include ("koneksi.php");
        $query = "delete from tb_user where Id = $Id";
        $mysql = mysqli_query($koneksi,$query);
    }

    public function Gantipassword() {
        
    }

    public function IsiIdRole($Role) {
      global $NR;

        switch ($Role) {
            case "Mahasiswa" :
                $NR = 1;
                break;
            case "Dosen" :
                $NR = 2;
                break;
            case "Koordinator KP" :
                $NR = 3;
                break;
            case "Admin" :
                $NR = 4;
                break;
        }

        return $NR;
    }
}

?>