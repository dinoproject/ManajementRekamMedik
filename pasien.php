<?php 
    require_once 'config.php';
    $result = mysqli_query($con, "SELECT * FROM pasien ORDER BY no_rm DESC");

    if( isset($_POST["periksa_rm"])) {
        $result = cari_rm($_POST["keyword_rm"]);
    }
    else if( isset($_POST["periksa_nama"])) {
        $result = cari_nama($_POST["keyword_nama"]);
    }
    else if( isset($_POST["periksa_nik"])) {
        $result = cari_nik($_POST["keyword_nik"]);
    }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <title>Clinic Firal</title>
</head>
<!-- HEADERRRRRRR -->
<body class="d-flex flex-column min-vh-100 bg-main">
    <nav class="navbar navbar-expand-lg navbar-light bg-nav fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">FiralClinic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pasien.php">Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="klinik.php">Klinik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="penunjang.php">Penunjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="apotek.php">Apotek</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- AKHIR HEADERRRRRRRRRRRRRRR -->

<!-- MAIN CONTENTTTTTTTTTTTT -->
    <div class="container mrg">
        <div class="row mrg">
            <div class="col-md-4 gap bg-nav">
                <!-- <label class="text-center">No RM    :</label><br> -->
                <form action="" method="post">
                    <input type="number" name="keyword_rm" placeholder="Masukkan No RM" size="30" autofocus autocomplete="off">
                    <button type="submit" class=btn-primary id="periksa_rm" name="periksa_rm">Periksa</button>
                </form>
                
            </div>
            <div class="col-md-4 gap bg-nav">
                <form action="" method="post">
                    <input type="text" name="keyword_nama" placeholder="Masukkan Nama" size="30" autocomplete="off">
                    <button class=btn-primary name="periksa_nama">Periksa</button>
                </form>
                
            </div>
            <div class="col-md-4 gap bg-nav">
                <!-- <label class="text-center">No RM    :</label><br> -->
                <form action="" method="post">
                    <input type="number" name="keyword_nik" placeholder="Masukkan NIK" size="30" autocomplete="off">
                    <button class=btn-primary name="periksa_nik">Periksa</button><br><br>    
                </form>
                
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="get-data" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Pasien</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center mrg">PASIEN</h2>
        <div class="text-end">
        <a href="pendaftaran.php"><button class="btn-primary">+ Pasien Baru</button></a>
        </div>
        <table class="table table-striped">
          <thead>
            <tr class=bg-table>
              <th scope="col">No</th>
              <th scope="col">No RM</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Usia</th>
              <th scope="col">Tanggal daftar</th>
              <th scope="col"></th>
          </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach($result as $row) :?>
        <tr>
          <!-- <th scope="row">1</th> -->
          <?php if($i == 7) {
            break;
          } ?>
          <td><?= $i ?></td>
          <td><?= $row["no_rm"] ?></td>
          <td><?= $row["nama_pasien"] ?></td>
          <td><?= $row["jenis_kelamin"] ?></td>
          <td><?= $row["umur"] ?></td>
          <td><?= $row["tanggal_daftar"] ?></td>
          <td><a data-toggle="modal" data-id="<?php echo $row["no_rm"]; ?>" class="open-modal btn btn-primary" href="#">view</a></td>
          <?php $i++; ?>
      </tr>
  <?php endforeach; ?>
  </tbody>
</table>


</div>
    <!-- FOOTERRRRRRRRRRRRRRR -->
    <footer class="bg-nav mt-auto mrg">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4 jarak">
                    <div class="footer-thumb">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                        <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit
                            consequat
                            ultricies.</p>

                        <div class="contact-info">
                            <p><i class="fa fa-phone"></i> 081224317564</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">firal@company.com</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-4 jarak">
                    <div class="footer-thumb">
                        <div class="opening-hours">
                            <h4>Opening Hours</h4>
                            <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                            <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                            <p>Sunday <span>Closed</span></p>
                        </div>

                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-sm-10 border-top">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2021 Clinic Firal

                                | Design: Allah swt</p>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div> -->
                    <div class="col-md-2 col-sm-2 text-align-center">
                        <div class="angle-up-btn">
                            <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                    class="fa fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/profile.js"></script>
</body>
</html>