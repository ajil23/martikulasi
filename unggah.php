<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="unggah.css">
    <link rel="icon" sizes="180x180" href="asset/android-chrome-192x192.png">
    <link rel="icon" sizes="32x32" href="asset/poliwangi 32x32.png">
    <link rel="icon" sizes="16x16" href="asset/poliwangi 16x16.png">
     
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Unggah Berkas</title> 
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
                <li><a href="dash-admin.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="daftar.php">
                    <i class="uil uil-file-edit-alt"></i>
                    <span class="link-name">Pendaftar</span>
                </a></li>
                <li><a href="daftar-ujian.php">
                    <i class="uil uil-clipboard-notes"></i>
                    <span class="link-name">Pendaftar Ujian</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-upload-alt"></i>
                    <span class="link-name">Unggah</span>
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
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Cari...">
            </div>
            
            <img src="asset/dosen.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-upload-alt"></i>
                    <span class="text">Unggah Berkas</span>
                </div>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Unggah Surat Izin</label>
            <input class="form-control" type="file" id="formFile">
          </div>
        
          <div class="mb-3">
            <label for="formFile" class="form-label">Unggah Jadwal Ujian</label>
            <input class="form-control" type="file" id="formFile">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
    </section>

    <script src="script.js"></script>
</body>
</html>