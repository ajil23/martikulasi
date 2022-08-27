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

    <title>Admin</title> 
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
                    <span class="link-name">Tambah User</span>
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
                    <i class="uil uil-user-md"></i>
                    <span class="text">Dosen</span>
                </div>
                

                <table class="table" border="1">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama Lengkap</th>
                    </tr>
                    </thead>
                    
                    <!--script php -->
                    
                </table>

        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>