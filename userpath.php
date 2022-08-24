<?php
include "koneksi.php"; 
$usernameinput;
$passwordinput;

if (isset($_POST['username']) && isset($_POST['password'])) {
    $usernameinput = $_POST['username'];
    $passwordinput = $_POST['password'];
    echo $usernameinput;
    echo $passwordinput;
}

$query = "select Id, Username, Password, Role from tb_user left join tb_user_role on tb_user.Id_Role = tb_user_role.Id_User where Username = ".$usernameinput;
$mysql = mysqli_query($koneksi,$query);

while($input = mysqli_fetch_array($mysql)) {
    if ($usernameinput== $input["Username"]){
        if ($pengguna->getpassword == $pengguna->getpassworddata) {
            switch($input["Role"]) {
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
        
        } else {
            header("location: http://localhost/martikulasi/index.php" );
        }
    } else {
        header("location: http://localhost/martikulasi/index.php" );
    }
}
?>