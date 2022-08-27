<?php
include "koneksi.php"; 
if (isset($_POST['login'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $usernameinput = $_POST['username'];
        $passwordinput = $_POST['password'];

        $query = "select * from tb_user left join tb_user_role on tb_user.Id_Role = tb_user_role.Id_User where Username = '$usernameinput'";
        $mysql = mysqli_query($koneksi,$query);

        if  (mysqli_num_rows($mysql) === 1) {
            
            $input = mysqli_fetch_assoc($mysql);
            if ($passwordinput == $input["Password"]) {
                
                switch($input["Role"]) {
                    case "Mahasiswa" :
                        // header("location: http://localhost/martikulasi/index.php" );
                        exit;
                        break;
                    case "Dosen" :
                        // header("location: http://localhost/martikulasi/index.php" );
                        exit;
                        break;
                    case "Koordinator KP" :
                        header("location: http://localhost/martikulasi/dash-admin.php" );
                        exit;
                        break;
                    case "Admin" :
                        header("location: http://localhost/martikulasi/admin.php" );
                        exit;
                        break;
                }
            
            } else {
                //pesan error password salah
                function alertWindow($msg) {       
                    echo "<script type ='text/JavaScript'>";  
                     echo "alert('$msg')";  
                     echo "</script>";   
                   }    
                alertWindow("Maaf, sandi yang anda masukkan salah");   
            }
    
        } else {
            //pesan error akun blm terdaftar
            function alertWindow($msg) {       
                echo "<script type ='text/JavaScript'>";  
                 echo "alert('$msg')";  
                 echo "</script>";   
                }    
            alertWindow("Maaf, akun anda belum terdaftar");   
        }  
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" sizes="180x180" href="asset/android-chrome-192x192.png">
    <link rel="icon" sizes="32x32" href="asset/poliwangi 32x32.png">
    <link rel="icon" sizes="16x16" href="asset/poliwangi 16x16.png">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Masuk</title>
</head>
<body>
    <div class="container">
        <img class="groove" src="asset/poliwangi-logo-text-only.svg" alt="">
        <div class="forms">
                <div class="form login" >
                    <span class="title" id="masuk">Masuk</span>
                    <form action="" method="post">
                        <div class="input-field">
                            <input type="text" name="username" id ="username" placeholder = "username" require>
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="input-field" >
                            <input type="password" class="password" name="password" id ="password" placeholder ="Katasandi" require>
                            <i class="uil uil-lock-alt"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>
                    
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                              
                            </div>
                            
                            <a href="#" class="text">Lupa Sandi?</a>
                        </div>

                        <div class="input-field button" >
                            <input type="submit" value="Masuk" name = "login">
                        </div>
                        
                    </form>
                </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>