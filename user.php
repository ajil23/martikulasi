<?php
include "koneksi.php"; 

Class User {
    protected $id_data;
    private $username_data;
    private $password_data;
    public $role_data;

    private function setdatauser($id_data,$username_data,$password_data,$role_data) {
        $this->id_data = $id_data;
        $this->username_data = $username_data;
        $this->password_data = $password_data;
        $this->role_data = $role_data;
    }

    public function getusernamedata() {
        return $this->username_data;
    }

    public function getpassworddata() {
        return $this->password_data;
    }

    public function isidata($id_data,$username_data,$password_data,$role_data) {
        $this->setdatauser($id_data,$username_data,$password_data,$role_data);
    } 
}

Class Check extends User {
    private $username;
    private $password;

    private function setcheck($username,$password) {
        $this->username = $username;
        $this->password = $password;
    } 

    public function getusername () {
        return $this->username;
    }

    public function getpassword () {
        return $this->password;
    }

    public function input($username,$password) {
        $this->setcheck($username,$password);
    }

    public function tujuan() {
        switch($this->role_data) {
            case "Mahasiswa" :
                header("location: http://localhost/martikulasi/index.php" );
                break;
            case "Dosen" :
                header("location: http://localhost/martikulasi/index.php" );
                break;
            case "Koordinator KP" :
                header("location: http://localhost/martikulasi/dash-admin.php" );
                break;
            case "Admin" :
                header("location: http://localhost/martikulasi/admin.php" );
                break;
        }
    }
}
$pengguna = new Check();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $pengguna->input( $_POST['username'],$_POST['password']);
}
$query = "select Id, Username, Password, Role from tb_user left join tb_user_role on tb_user.Id_Role = tb_user_role.Id_User";
$mysql = mysqli_query($koneksi,$query); 

while($input = mysqli_fetch_array($mysql)) {
    if ($pengguna->getusername() == $input["Username"]){
        $pengguna->isidata($input["Id"],$input["Username"],$input["Password"],$input["Role"]);
        
        if ($pengguna->getpassword == $pengguna->getpassworddata) {
        $pengguna->tujuan();
        
        } else {
            header("location: http://localhost/martikulasi/index.php" );
        }
    } else {
        header("location: http://localhost/martikulasi/index.php" );
    }
}
?>