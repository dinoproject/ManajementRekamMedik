<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Permen - LABORATORIUM</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/fitur.css">
    <link rel="stylesheet" href="css/Laboratorium.css">
</head>

<?php error_reporting(0); ?>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">PERMEN</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Fitur</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link" href="daftar.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Pendaftaran
                        </a>

                        <a class="nav-link" href="soap.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            SOAP
                        </a>
                        <a class="nav-link" href="pencarian.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Pencarian Data
                        </a>
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Laboratorium
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="hasil_laboratorium.php">Form Hasil Lab</a>
                              <a class="dropdown-item" href="carihasil_lab.php">Cari/Input Hasil Lab</a>
                            </div>
                          </li>
                    </div>
            </nav>
            </div>
            <div id="layoutSidenav_content">

               <!--Mencari data pasien yang akan ditampilkan form hasil pemeriksaan labnya-->
               <section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #ffffff">
                    <div class="container">
                        <div class="judul1" style="text-align: center;">
                            <h4>Pencarian Data Hasil Pemeriksaan Laboratorium</h4>
                        </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="kolom">
                                        <form  action="hasil_laboratorium.php" method="post">
                                            <div class="form-group row">
                                                <label for="inputnama" class="col-sm-5 col-form-label">Pencarian Data Hasil Pemeriksaan Laboratorium Sebagai</label>
                                                <div class="col-sm-7">
                                                    <select class="form-control" name="combo1" id="combo1" placeholder="Pilih data sesuai dengan">
                                                        <option value="Pasien">Pasien</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row" id="pasien">
                                                <label class="col-sm-5 col-form-label">Masukkan nomer rekam medis pasien</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="id_pasien" class="form-control" id="">
                                                </div> 
                                            </div>
                                    <div class="text-center">
                                                <button type="submit" name="search" value="Cari" class="btn btn-dark" style="margin-bottom: 20px">Cari</button>
                                                       
                                                 <a href="hasil_laboratorium.php"><button type="submit" class="btn btn-dark" style="margin-bottom: 20px">Input</button></a>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                 <?php
                    include 'showHasilLab.php';
                 ?> 
                
                 
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; PERMEN 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a> &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script src="js/function.js"></script>
        <script>
            window.time()
        </script>
</body>

</html>