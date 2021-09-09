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
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/fitur.css">
    <link rel="stylesheet" href="css/pencarian.css">
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
                
                <!--Menampilkan data pasien yang melakukan pemeriksaan lab-->
                <section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #ffffff">
                    <div class="container">
                        <div class="judul1" style="text-align: center;">
                            <h4>Form Hasil Pemeriksaan Laboratorium</h4>
                        </div>
                        <table>
                            <tr>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="kolom">
                                        <form method="post">
                                            <div class="form-group row">
                                                <label for="nama-dokter" class="col-sm-5 col-form-label">Nama Dokter</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="nama_dokter" class="form-control" id="">
                                        
                                                </div>  
                                            </div>
                                            <div class="form-group row">
                                                <label for="no-tes" class="col-sm-5 col-form-label">Nomor Tes Lab</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="no_tes" class="form-control" id="">
                                                </div>  
                                            </div>
                                            <div class="form-group row">
                                                <label for="no-rekmed" class="col-sm-5 col-form-label">Nomor Rekam Medis</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="no_rekmed" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tanggal-tes" class="col-sm-5 col-form-label">Tanggal Tes</label>
                                               <div class="col-sm-7">
                                                    <input type="text" name="tanggal_tes" class="form-control" id="">
                                                    <?php $tanggalTes = mysqli_real_escape_string($link, $_REQUEST['tanggal_tes']); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputjeniskelamin" class="col-sm-5 col-form-label">Jenis Kelamin</label>
                                               <div class="col-sm-7">
                                                    <input type="text" name="jk" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="alamat" class="col-sm-5 col-form-label">Alamat</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="alamat_lengkap" class="form-control" id="">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="kolom">
                                        <!-- <form> -->
                                            <div class="form-group row">
                                                <label for="nama-pasien" class="col-sm-5 col-form-label">Nama Pasien</label>
                                                 <div class="col-sm-7">
                                                    <input type="text" name="nama_pasien" class="form-control" id="">
                                                </div> 
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="tempat-lahir" class="col-sm-5 col-form-label">Tempat Lahir</label>
                                                 <div class="col-sm-7">
                                                    <input type="text" name="tempat_lahir" class="form-control" id="">
                                                </div> 
                                            </div>
                                            <div class="form-group row">
                                                <label for="tanggal-lahir" class="col-sm-5 col-form-label">Tanggal Lahir</label>
                                                 <div class="col-sm-7">
                                                    <input type="text" name="tanggal_lahir" class="form-control" id="">
                                                </div> 
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputstatus" class="col-sm-5 col-form-label">Status</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="status" class="form-control" id="">
                                                </div> 
                                            </div>
                                            <div class="form-group row">
                                                <label for="nomor-hp" class="col-sm-5 col-form-label">Nomor Handphone</label>
                                                 <div class="col-sm-7">
                                                    <input type="text" name="nomor_hp" class="form-control" id="">
                                                </div> 
                                            </div>
                                            <div class="form-group row">
                                                <label for="gol-darah" class="col-sm-5 col-form-label">Golongan Darah</label>
                                                 <div class="col-sm-7">
                                                    <input type="text" name="goldar" class="form-control" id="">
                                                </div> 
                                            </div>
                                        </form>
                            </tr>

                            <div class="judul1" style="text-align: center; background-color: #ffffff">
                                <h4></h4>
                            </div>
                            <tr>
                                <form>
                                    <!--Menginput data hasil pemeriksaan lab-->
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="kolom">
                                                    <form  method="post">
                                                        <div class="form-group row">
                                                            <label class="col-sm-5 col-form-label">Hemoglobin</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" name="txt_hemoglobin" class="form-control" id="">
                                                                gram/dl
                                                                <?php $hemoglobin = mysqli_real_escape_string($link, $_REQUEST['txt_hemoglobin']); ?>
                                                            </div> 
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-5 col-form-label">Leukosit</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" name="txt_leukosit" class="form-control" id="">
                                                                sel/mikroliter
                                                                <?php $leukosit = mysqli_real_escape_string($link, $_REQUEST['txt_leukosit']); ?>
                                                            </div> 
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-5 col-form-label">Trombosit</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" name="txt_trombosit" class="form-control" id="">
                                                                sel/mikroliter
                                                                <?php $trombosit = mysqli_real_escape_string($link, $_REQUEST['txt_trombosit']); ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-5 col-form-label">Eritrosit</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" name="txt_eritrosit" class="form-control" id="">
                                                                juta/mikroliter
                                                                <?php $eritrosit = mysqli_real_escape_string($link, $_REQUEST['txt_eritrosit']); ?>
                                                            </div> 
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-5 col-form-label">Hematokrit</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" name="txt_hematokrit" class="form-control" id="">
                                                                <?php $hematokrit = mysqli_real_escape_string($link, $_REQUEST['txt_hematokrit']); ?>
                                                            </div> 
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-5 col-form-label">Laju Endap Darah</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" name="txt_led" class="form-control" id="">
                                                                mm/jam
                                                                <?php $led = mysqli_real_escape_string($link, $_REQUEST['txt_led']); ?>
                                                            </div> 
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-5 col-form-label">Masa Perdarahan</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" name="txt_masaperdarahan" class="form-control" id="">
                                                                menit
                                                                <?php $masa_perdarahan = mysqli_real_escape_string($link, $_REQUEST['txt_masaperdarahan']); ?>
                                                            </div> 
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-5 col-form-label">Masa Pembekuan</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" name="txt_masapembekuan" class="form-control" id=""> menit
                                                                <?php $masa_pembekuan = mysqli_real_escape_string($link, $_REQUEST['txt_masapembekuan']); ?>
                                                            </div> 
                                                        </div>
                                                       <div class="cek" style="text-align: center;">
                                                            <input onclick="" type="submit" name="submit" class="btn btn-dark"></input>
                                                        </div>
                                            </form>
                                        </tr>
                                        <div class="judul1" style="text-align: center; background-color: #ffffff">
                                            <h4></h4>
                                        </div>
                                        <tr>
                                            <center>
                                            <table class="table">
                                                <tr>
                                                    <th>Jenis Pemeriksaan</th>
                                                    <th>Hasil</th>
                                                    <th>Satuan</th>
                                                    <th>Harga Normal</th>
                                                </tr>
                                                <tr>
                                                    <td>Hemoglobin</td>
                                                    <td></td>
                                                    <td>gram/dl</td>
                                                    <td>
                                                        <p>Laki-laki = 14-17 gram/dl</p>
                                                        <p>Perempuan = 12-16 gram/dl</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Leukosit</td>
                                                    <td></td>
                                                    <td>sel/mikroliter</td>
                                                    <td>3.400-9.600 sel/mikroliter</td>
                                                </tr>
                                                <tr>
                                                    <td>Trombosit</td>
                                                    <td></td>
                                                    <td>sel/mikroliter</td>
                                                    <td>
                                                        <p>Laki-laki = 135.000-317.000 sel/mikroliter</p>
                                                        <p>Perempuan = 157.000-371.000 sel/mikroliter</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Eritrosit</td>
                                                    <td></td>
                                                    <td>juta/mikroliter</td>
                                                    <td>
                                                        <p>Laki-laki = 4,7-6,1 juta/mikroliter</p>
                                                        <p>Perempuan = 4,2-5,4 juta/mikroliter</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hematokrit</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <p>Laki-laki = 38,8%-48,6%</p>
                                                        <p>Perempuan = 35,5%-44,9%</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Laju Endap Darah</td>
                                                    <td></td>
                                                    <td>mm/jam</td>
                                                    <td>
                                                        <p>Laki-laki = kurang dari 10 mm/jam</p>
                                                        <p>Perempuan = kurang dari 20 mm/jam</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Masa Perdarahan</td>
                                                    <td></td>
                                                    <td>menit</td>
                                                    <td>1-6 menit</td>
                                                </tr>
                                                <tr>
                                                    <td>Masa Pembekuan</td>
                                                    <td></td>
                                                    <td>menit</td>
                                                    <td>2-6 menit</td>
                                                </tr>
                                            </table>
                                            </center>
                                        </tr>
                                    </table>
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php
                       if(isset($_POST['submit'])){
                            
                            $sql = "INSERT INTO hasil_lab (hemoglobin,  leukosit, trombosit, eritrosit, hematokrit, led, masa_perdarahan, masa_pembekuan, id_pasien) VALUES ('$hemoglobin',  '$leukosit', '$trombosit', '$eritrosit', '$hematokrit', '$led', '$masa_perdarahan', '$masa_pembekuan', '$nomor_rekmed')";
                            if(mysqli_query($link, $sql)){
                                //echo "Records added successfully.";
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                            // Close connection
                            mysqli_close($link);
                        }
                ?>

                <?php
                            $id_hasil ="select id_hasil from hasil_lab where id_pasien=$nomor_rekmed";
                            $sql = "INSERT INTO laboratorium (id_hasil, id_dokter) VALUES ('$id_hasil', 100010)";
                            if(mysqli_query($link, $sql)){
                                //echo "Records added successfully.";
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
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