<?php 
    require_once 'config.php';
    $result = mysqli_query($con, "SELECT * FROM pembayaran_obat");
 ?>

<!doctype html>
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
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
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
                        <a class="nav-link" href="#">Apotek</a>
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
    <div class="col-md-12 gap bg-nav">
      <h2 class="text-center">APOTEK</h2>
      <label class="mrg-btn" style="margin-right: 10px;">No RM</label>
      <input  class="mrg-btn" type="number" name="" style="margin-right: 10px;" placeholder="NO RM">
      <button class="btn-primary mrg-btn" style="margin-right: 10px;">Periksa</button><br>
      <!-- <p style="background-color: #ff1a1a; font-weight: bold">Belum Lunas</p> -->
      <!--<p style="background-color: #00ff00; font-weight: bold">Lunas</p> -->

       <div class="modal fade" id="get-data-bayar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detai Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body-bayar">
                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>






      <div class="container">
        <table class="table table-striped">
          <thead>
            <tr class=bg-table>
              <th scope="col">No</th>
              <th scope="col">id_pembayaran</th>
              <th scope="col">NO RM</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Status Pembayaran</th>
              <th scope="col">Bayar</th>
          </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach($result as $row) :?>
        <tr>
          <!-- <th scope="row">1</th> -->
          <td><?= $i ?></td>
          <td><?= $row["no_id_rm"] ?></td>
          <td><?= $row["no_rm"] ?></td>
          <td><?= $row["nama_pasien"] ?></td>
          <?php if($row["status_total"] == "Belum Lunas")  { ?>
          <td><p style="background-color: red; font-weight: bold"><?= $row["status_total"] ?></p></td>

          <?php }else { ?>
            <td><p style="background-color: #00ff00; font-weight: bold"><?= $row["status_total"] ?></p></td>
          <?php } ?>
          <td><a data-toggle="modal" data-id="<?php echo $row["no_id_rm"]; ?>" class="open-modal-bayar btn btn-primary" href="#">view</a></td>
          <?php $i++; ?>
      </tr>
  <?php endforeach; ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
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
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bayar.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
 -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>