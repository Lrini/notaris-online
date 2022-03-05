<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sistem Informasi Notaris</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="../plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="../plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="../plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="../plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="../plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="../plugins/c3/c3.min.css">
        <link rel="stylesheet" href="../plugins/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="../dist/css/theme.min.css">
        <link rel="stylesheet" href="jquery.dataTables.css">
        <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>

        <div class="wrapper">
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                                </div>
                            </div>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="img/user.jpg" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="../login.php"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>

            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-item">
                                    <a href="index.php"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-lavel">Profil</div>
                                <div class="nav-item">
                                    <a href="notaris.php"><i class="ik ik-users"></i><span>Notaris</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="klien.php"><i class="ik ik-users"></i><span>Klien</span></a>
                                </div>
                              
                                <div class="nav-item">
                                    <a href="rekening.php"><i class="ik ik-users"></i><span>Rekening</span></a>
                                </div>
                                 <div class="nav-item">
                                    <a href="Pembayaran.php"><i class="ik ik-users"></i><span>Pembayaran</span></a>
                                </div>
                              
                                <div class="nav-lavel">Surat</div>
                                <div class="nav-item">
                                    <a href="akta_jualbeli.php"><i class="ik ik-book-open"></i><span>Akta Jual Beli</span></a>
                                    <a href="akta_hibah.php"><i class="ik ik-book-open"></i><span>Akta Hibah</span></a>
                                    <a href="akta_tukar.php"><i class="ik ik-book-open"></i><span>Akta Tukar Menukar</span></a>
                                    <a href="akta_pt.php"><i class="ik ik-book-open"></i><span>Akta Pendirian PT</span></a>
                                    <a href="akta_hak.php"><i class="ik ik-book-open"></i><span>Akta Pembagian Hak Bersama</span></a>
                                    <a href="akta_perusahaan.php"><i class="ik ik-book-open"></i><span>Akta Pemasukan Kedalam <br> Perusahaan</span></a>
                                    <a href="akta_kuasa.php"><i class="ik ik-book-open"></i><span>Akta Kuasa Menjual</span></a>
                                    <a href="akta_cv.php"><i class="ik ik-book-open"></i><span>Akta Pendirian CV</span></a>
                                </div>
                               
                                <div class="nav-lavel">Dokumen</div>

                                <div class="nav-item">
                                    <a href="dokumen.php"><i class="ik ik-lock"></i><span>Dokumen</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>