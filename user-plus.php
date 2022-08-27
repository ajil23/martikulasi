<?php
class User
{
    private $Id;
    private $Username;
    private $Password;
    private $Role;
    private $NI;

    private function setdata($Id, $Username, $Password, $Role, $NI)
    {
        $this->Id = $Id;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->Role = $Role;
        $this->NI = $NI;
    }

    public function getId()
    {
        return $this->Id;
    }

    public function getUsername()
    {
        return $this->Username;
    }

    public function getPassword()
    {
        return $this->Password;
    }

    public function getRole()
    {
        return $this->Role;
    }

    public function getNI()
    {
        return $this->NI;
    }

    public function isidata($Id, $Username, $Password, $Role, $NI)
    {
        $this->setdata($Id, $Username, $Password, $Role, $NI);
    }
}

class OperationsUser extends User
{
    public function FindIdUser()
    {
        include "koneksi.php";
        $query = "select Id from tb_user order by Id desc limit 1";
        $mysql = mysqli_query($koneksi, $query);
        $Id;

        if (mysqli_num_rows($mysql) === 1) {
            while ($input = mysqli_fetch_assoc($mysql)) {
                $Id = $input["Id"] + 1;
            }
        } else {
            $Id = 1;
        }

        return $Id;
    }

    public function InputDataUser()
    {
        include "koneksi.php";
        $query = "insert tb_user values('')";
        $mysql = mysqli_query($koneksi, $query);
    }

    public function AmbilDataUser()
    {
        include "koneksi.php";
        $query = "select Username, Password, Role from tb_user left join tb_user_role on Id_Role = Id_User";
        $mysql = mysqli_query($koneksi, $query);
        return $mysql;
    }

    public function EditDataUser()
    {
        include "koneksi.php";
        $query = " ";
        $mysql = mysqli_query($koneksi, $query);
    }
}

$user = new OperationsUser();
?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="dosenstyle.css">
    <link rel="icon" sizes="180x180" href="asset/android-chrome-192x192.png">
    <link rel="icon" sizes="32x32" href="asset/poliwangi 32x32.png">
    <link rel="icon" sizes="16x16" href="asset/poliwangi 16x16.png">


    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>User</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="asset/poliwangi.png" alt="">
            </div>

            <span class="logo_name">Poliwangi</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="admin.php">
                        <i class="uil uil-file-graph"></i>
                        <span class="link-name">Nilai Mahasiswa</span>
                    </a></li>
                <li><a href="mahasiswa.php">
                        <i class="uil uil-book-reader"></i>
                        <span class="link-name">Mahasiswa</span>
                    </a></li>
                <li><a href="dosen.php">
                        <i class="uil uil-user-md"></i>
                        <span class="link-name">Dosen</span>
                    </a></li>
                <li><a href="user-plus.php">
                        <i class="uil uil-user-plus"></i>
                        <span class="link-name">User</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="index.php">
                        <i class="uil uil-sign-out-alt"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                <li class="mode">

                    </a>

                    <div class="mode-toggle">

                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i></i>
            <img src="asset/admin.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-user-plus"></i>
                    <span class="text">User</span>
                </div>


                <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                            <th scope="col">Pemilik</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <!--script php -->
                    <?php
                    $mysql = $user->AmbilDataUser();
                    $i = 1;

                    while ($tampil = mysqli_fetch_assoc($mysql)) {
                        echo "
                    <tr>
                        <td>$i</td>
                        <td>$tampil[Username]</td>
                        <td>$tampil[Password]</td>
                        <td>$tampil[Role]</td>
                        <td>
                                 <a href='?hapus=$tampil[Username]' class='btn btn-danger' onClick=\"return confirm('Apakah anda yakin?');\">Hapus</a>
                        </td>

                    </tr>
                    ";
                        $i++;
                    }
                    ?>

                </table>
            </div>
            <div>
                <a href='tambah-user.php' class='btn btn-success'>Tambah data</a>
            </div>

        </div>
        </div>
    </section>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>