<?php 
require_once 'config.php';
$no_rm = "";
$nama = "";
$jenis_kelamin ="";
$usia = "";
$pekerjaan = "";
$status = "";
$no_hp = "";
$agama = "";

if( isset($_POST["penunjang_rm"])) {
  $result = cari_rm($_POST["penunjang_keyword"]);
  if(empty($result)) {
    echo '<script>alert(\'Mohon maaf data yang ada cari tidak ada.\')
 window.close()</script>';
  }else {
  foreach ($result as $r) {
    $no_rm= $r['no_rm'];
    $nama = $r['nama_pasien'];
    $usia = $r['umur'];
    $agama = $r['agama'];
    $jenis_kelamin = $r['jenis_kelamin'];
    $pekerjaan = $r['pekerjaan'];
    $status = $r['status_perkawinan'];
    $no_hp = $r['no_hp'];
    } 
  }
}

if( isset($_POST["penunjang_btn"])) {
    if(insert_penunjang($_POST) > 0) {
      echo "
      <script>
        alert('Data Berhasil di Tambahkan!');
          document.location.href = 'penunjang.php';
          </script>
      ";
    }else {
      echo "
      <script>
        alert('Data gagal di Tambahkan!');
          document.location.href = 'penunjang.php';
          </script>
      ";
    }
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
  <h1 class="text-start">LABORATORIUM PEMERIKSAAN DARAH</h1>
  <div class="row">
    <div class="col-md-6 bg-nav gap">
      <form action="" method="post">
        <label class="mrg-btn" style="margin-right: 10px;">No RM</label>
        <input  class="mrg-btn" type="number" name="penunjang_keyword" style="margin-right: 10px;" placeholder="NO RM" required title="Masukkan hanya berupa angka">
        <button class="btn-primary mrg-btn" name="penunjang_rm" id="penunjang_rm" type="submit">Periksa</button><br>
      </form class="penunjang_form">
      <label>Nomor rekam medik: </label>
      <p><?php echo $no_rm; ?></p><br>
      <label>Nama: </label>
      <p><?php echo $nama; ?></p><br>
      <label>Usia:</label>
      <p><?php echo $usia; ?></p><br> 
      <label>Jenis Kelamin: </label>
      <p><?php echo $jenis_kelamin; ?></p><br>
      <label>Agama: </label>
      <p><?php echo $agama; ?></p><br>
      <label>Status Perkawinan </label>
      <p><?php echo $status; ?></p><br>
      <label>Pekerjaan:</label>
      <p><?php echo $pekerjaan; ?></p><br>
      <label>NO HP: </label>
      <p><?php echo $no_hp; ?></p><br>
    </div>
    <div class="col-md-6 text-center bg-nav gap">
      <div class="container">
        <form action="" method="post">
          <table class="table table-striped mrg-btn">
            <thead>
              <tr class=bg-table>
                <th scope="col">No</th>
                <th scope="col">Pemeriksaan</th>
                <th scope="col">Hasil</th>
                <th scope="col">Normal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>No Rekam Medik</td>
                <td><input type="text" name="no_rm" id="no_rm" required autocomplete="off" readonly value="<?php echo$no_rm; ?>"></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Nama Pasien</td>
                <td><input type="text" name="nama_pasien" id="nama_pasien" required readonly autocomplete="off" value="<?php echo $nama; ?>"></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Hemoglobin</td>
                <td><input type="text" name="hemoglobin" id="hemoglobin" required autocomplete="off"></td>
                <td>12 - 18 g/dL</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Lekosit</td>
                <td><input type="text" name="lekosit" id="lekosit" required autocomplete="off"></td>
                <td>5 - 10 ribu/mm3</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Hemaktorit</td>
                <td><input type="text" name="hemaktorit" id="hemaktorit" autocomplete="off" required></td>
                <td>38 - 47 %</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Trombosit</td>
                <td><input type="text" name="trombosit" id="trombosit" autocomplete="off" required></td>
                <td>150 - 450 ribu/mm3</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>MCV</td>
                <td><input type="text" name="mcv" id="mcv" autocomplete="off" required></td>
                <td>82 - 92 fL</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>MCH</td>
                <td><input type="text" name="mch" id="mch" autocomplete="off" required=""></td>
                <td>27 - 42 pg</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>MCHC</td>
                <td><input type="text" name="mchc" id="mchc" autocomplete="off" required=""></td>
                <td>34 - 45 g/dL</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>LED</td>
                <td><input type="text" name="led" id="led" autocomplete="off" required=""></td>
                <td>< 20 mm/jam</td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>Basofil</td>
                <td><input type="text" name="basofil" id="basofil" autocomplete="off" required=""></td>
                <td>0 - 1 % </td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td>Eosinofil</td>
                <td><input type="text" name="eosinofil" id="eosinofil" autocomplete="off" required=""></td>
                <td>1 - 3 %</td>
              </tr>
              <tr>
                <th scope="row">13</th>
                <td>Netrofil Stab</td>
                <td><input type="text" name="netrofil_stab" id="netrofil_stab" autocomplete="off" required=""></td>
                <td>3 - 5 %</td>
              </tr>
              <tr>
                <th scope="row">14</th>
                <td>Netrofil Segmen</td>
                <td><input type="text" name="netrofil_segmen" id="netrofil_segmen" autocomplete="off" required=""></td>
                <td>54 - 62 %</td>
              </tr>
              <tr>
                <th scope="row">15</th>
                <td>Lymposit</td>
                <td><input type="text" name="lymposit" id="lymposit" autocomplete="off" required=""></td>
                <td>25 - 33 %</td>
              </tr>
              <tr>
                <th scope="row">16</th>
                <td>Monosit</td>
                <td><input type="text" name="monosit" id="monosit" autocomplete="off" required=""></td>
                <td>3 - 7 %</td>
              </tr>
            </tbody>
          </table>
        </div>
        <a href="pendaftaran.php"><button class="btn-primary text-center" type="submit" name="penunjang_btn" id="penunjang_btn">Simpan</button></a>
      </div>
    </form>
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

                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
                      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
                      crossorigin="anonymous"></script>
                    </body>

                    </html>