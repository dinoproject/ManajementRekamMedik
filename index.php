<?php 
    require_once 'config.php';
    $result = mysqli_query($con, "SELECT * FROM dokter");
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
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
  <title>Clinic Firal</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <nav class="navbar navbar-expand-lg navbar-light bg-nav fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FIRALCLINIC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
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

  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1 style="letter-spacing: 3px;">Welcome to Firal Clinic</h1>
      <h2 style="font-size:25px;letter-spacing: 2px;">
Klinik Firal berintegrasi dan berfokus dalam memberikan pelayanan kesehatan, pengobatan dan pencegahan penyakit.
</h2>
      <a href="#semua_dokter" class="btn-get-started scrollto" style="font-weight: bold;">Meet Our Doctor</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img class="bx" src="img/1.png" alt="">
                    <h2>Ethic and valuesn</h2>  
                    <br>
                    <p style="font-size: 18px; font-weight: bold; letter-spacing: 1px;">Kami bertanggung jawab secara professional dengan standar etik kesehatan yang baik.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img class="bx" src="img/2.png" alt="">
                    <h2>Integrity</h2><br>
                    <p style="font-size: 18px; font-weight: bold; letter-spacing: 1px;">Kami bersikap jujur dan memilik prinsip yang jelas serta konsisten untuk mewujudkan cita citanya.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img class="bx" src="img/3.png" alt="">
                    <h2>Continuous learning</h2><br>
                    <p style="font-size: 18px; font-weight: bold;">Kami memiliki kemauan untuk terus belajar secara teratur dengan menciptakan dan memanfaatkan kesempatan untuk belajar, dan menggunakan pengetahuan dan keterampilan baru yang diperoleh dalam pekerjaan dan pembelajaran melalui penerapannya didalam pekerjaan dan tim terkait sehingga dapat meningkatkan kinerja tim dan klinik secara cepat dan signifikan.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div
            class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Apakah tampilan website ini memudahkan anda untuk mendaftar secara online?</h3>
            

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Ya Membantu</a></h4>
              
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Agak Membantu</a></h4>
              
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Kurang membantu</a></h4>
            </div>

          </div>
        </div>

      </div>
    </section>
    <section id="semua_dokter">
    <div class="container-fluid" style="margin:20px 0;">
      <h2 class="text-center">Dokter Clinic Firal</h2>
    <table class="table table-striped">
          <thead>
            <tr class=bg-table>
              <th scope="col">No</th>
              <th scope="col">ID Dokter</th>
              <th scope="col">NO SIK</th>
              <th scope="col">Nama</th>
              <th scope="col">Spesialis</th>
              <th scope="col">NO HP</th>
          </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) :?>
        <tr>
          <!-- <th scope="row">1</th> -->
          <td><?= $i ?></td>
          <td><?= $row["id_dokter"] ?></td>
          <td><?= $row["no_sik"] ?></td>
          <td><?= $row["nama"] ?></td>
          <td><?= $row["spesialis"] ?></td>
          <td><?= $row["no_hp"] ?></td>
          <?php $i++; ?>
      </tr>
  <?php endwhile; ?>
  </tbody>
</table>
</div>
</section>


    <div class="mapouter">
      <h2 class="text-center">MAPS Clinic Firal</h2>
      <div class="gmap_canvas"><iframe width="100%" height="299" id="gmap_canvas"
          src="https://maps.google.com/maps?q=kopikiranmu%20tanjung%20priok&t=&z=15&ie=UTF8&iwloc=&output=embed"
          frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
          href="https://putlocker-is.org">putlocker</a><br>
        <style>
          .mapouter {
            position: relative;
            text-align: right;
            height: 299px;
            width: 100%;
          }
        </style><a href="https://www.embedgooglemap.net">google map responsive</a>
        <style>
          .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 299px;
            width: 100%;
          }
        </style>
      </div>
    </div>
    <br>


    <footer class="bg-nav mt-auto">
      <div class="container">
        <div class="row">

          <div class="col-md-4 col-sm-4 jarak">
            <div class="footer-thumb">
              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
              <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>