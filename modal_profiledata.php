<?php 
	require_once 'config.php';
	$id = json_encode($_POST['id']);
	$c = mysqli_query($con, "SELECT * FROM pasien where no_rm = $id");
	$result = mysqli_fetch_array($c);
	$prov = "provinsi";
	$d = mysqli_query($con, "SELECT * FROM provinces where id = '$result[$prov]'");
	// $e = mysqli_query($con, "SELECT * FROM regencies where id = $id");
	// $f = mysqli_query($con, "SELECT * FROM districts");
	// $g = mysqli_query($con, "SELECT * FROM villages");
	$result1 = mysqli_fetch_array($d);
	// $result2 = mysqli_fetch_array($e);
	// $result3 = mysqli_fetch_array($f);
	// $result4 = mysqli_fetch_array($g);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="2" cellpadding="7" width="100%">
		<tbody>
		<tr><td><h5>No Rekam Medis</h5></td><td><h5>:</h5></td><td><h5><?= $result['no_rm'] ?></h5></td></tr>
		<tr><td><h5>Nama</h5></td><td><h5>:</h5></td><td><h5><?= $result['nama_pasien']; ?></h5></td></tr>
		<tr><td><h5>No NIK</h5></td><td><h5>:</h5></td><td><h5><?= $result['no_nik']; ?></h5></td></tr>
		<tr><td><h5>Tempat, tanggal lahir</h5></td><td><h5>:</h5></td><td><h5><?= $result['tempat_lahir'].", ".$result["tanggal_lahir"]; ?></h5></td></tr>
		<tr><td><h5>Usia</h5></td><td><h5>:</h5></td><td><h5><?= $result['umur']; ?></h5></td></tr>
		<tr><td><h5>Jenis Kelamin</h5></td><td><h5>:</h5></td><td><h5><?= $result['jenis_kelamin']; ?></h5></td></tr>
		<tr><td><h5>Alamat</h5></td><td><h5>:</h5></td><td><h5><?= $result['alamat'].", ".$result["kota"].", ".$result["provinsi"] ?></h5></td></tr>
		<tr><td><h5>Agama</h5></td><td><h5>:</h5></td><td><h5><?= $result['agama']; ?></h5></td></tr>
		<tr><td><h5>Status Perkawinan</h5></td><td><h5>:</h5></td><td><h5><?= $result['status_perkawinan']; ?></h5></td></tr>
		<tr><td><h5>Pendidikan Terakhir</h5></td><td><h5>:</h5></td><td><h5><?= $result['pendidikan']; ?></h5></td></tr>
		<tr><td><h5>Pekerjaan</h5></td><td><h5>:</h5></td><td><h5><?= $result['pekerjaan']; ?></h5></td></tr>
		<tr><td><h5>Kewarganeagaraan</h5></td><td><h5>:</h5></td><td><h5><?= $result['kewarganegaraan']; ?></h5></td></tr>
		<tr><td><h5>NO HP</h5></td><td><h5>:</h5></td><td><h5><?= $result['no_hp']; ?></h5></td></tr>
		<tr><td><h5>Tanggal Daftar</h5></td><td><h5>:</h5></td><td><h5><?= $result['tanggal_daftar']; ?></h5></td></tr>
</tbody></table>
	<!-- <h5>No Rekam Medis : <?= $result['no_rm']; ?></h5>
	<h5>NAMA : <?= $result['nama_pasien']; ?></h5>
	<h5>NIK : <?= $result['no_nik']; ?> <br></h5>
	<h5>Tempat, tanggal lahir : <?= $result['tempat_lahir'].", ".$result["tanggal_lahir"]; ?><br></h5>
	<h5>Usia : <?= $result['umur'] ?><br></h5>
	<h5>Jenis Kelamin : <?= $result['jenis_kelamin'] ?><br></h5>
	<h5>Alamat : <?= $result['alamat'].", ".$result["kota"].", ".$result["provinsi"] ?><br></h5>
	<h5>Agama : <?= $result['agama'] ?><br></h5>
	<h5>Status : <?= $result['status_perkawinan'] ?><br></h5>
	<h5>Pendidikan Terakhir : <?= $result['pendidikan'] ?><br></h5>
	<h5>Pekerjaan : <?= $result['pekerjaan'] ?><br></h5>
	<h5>Kewarganegaraan : <?= $result['kewarganegaraan'] ?><br></h5>
	<h5>NO HP : <?= $result['no_hp'] ?><br></h5>
	<h5>Tanggal Daftar : <?= $result['tanggal_daftar'] ?><br></h5>
	<h5>Suhu : <?= $result['suhu'] ?><br></h5>
	<h5>Tekanan Darah : <?= $result['tekanan_darah'] ?><br></h5>
	<h5>Berat Badan : <?= $result['berat_badan'] ?><br></h5>
	<h5>Tinggi Badan : <?= $result['tinggi_badan'] ?><br></h5> -->

</body>
</html>