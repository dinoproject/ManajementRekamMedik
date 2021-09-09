<?php 
	require_once 'config.php';
	$id = json_encode($_POST['id']);
	$c = mysqli_query($con, "SELECT * FROM penunjang where no_rm = $id order by no_penunjang DESC LIMIT 1");
	$result = mysqli_fetch_array($c);
	$prov = "provinsi";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(empty($result)) { ?>
		<h2>Pasien dengan nomor rekam medik <?= $id ?> belum pernah melakukan pemeriksaan darah.</h2>

	<?php }else { ?>
		<table border="2" cellpadding="7" width="100%">
		<tbody>
		<tr><td><h5>Tanggal Pemeriksaan</h5></td><td><h5>:</h5></td><td><h5><?= $result['tanggal_daftar'] ?></h5></td></tr>
		<tr><td><h5>Nomor rekam Medik pasien</h5></td><td><h5>:</h5></td><td><h5><?= $result['no_rm']; ?></h5></td></tr>
		<tr><td><h5>Nama Pasien</h5></td><td><h5>:</h5></td><td><h5><?= $result['nama_pasien']; ?></h5></td></tr>
		<tr><td><h5>Hemoglobin</h5></td><td><h5>:</h5></td><td><h5><?= $result['hemoglobin']; ?> g/dL</h5></td></tr>
		<tr><td><h5>Lekosit</h5></td><td><h5>:</h5></td><td><h5><?= $result['lekosit']; ?> ribu/mm3</h5></td></tr>
		<tr><td><h5>Hemaktokrit</h5></td><td><h5>:</h5></td><td><h5><?= $result['hemaktorit']; ?> %</h5></td></tr>
		<tr><td><h5>Trombosit</h5></td><td><h5>:</h5></td><td><h5><?= $result['trombosit']; ?> ribu/mm3</h5></td></tr>
		<tr><td><h5>MCV</h5></td><td><h5>:</h5></td><td><h5><?= $result['mcv']; ?> fL</h5></td></tr>
		<tr><td><h5>MCH</h5></td><td><h5>:</h5></td><td><h5><?= $result['mch']; ?> pg</h5></td></tr>
		<tr><td><h5>MCHC</h5></td><td><h5>:</h5></td><td><h5><?= $result['mchc']; ?> g/dL</h5></td></tr>
		<tr><td><h5>LED</h5></td><td><h5>:</h5></td><td><h5><?= $result['led']; ?> mm/jam</h5></td></tr>
		<tr><td><h5>Basofil</h5></td><td><h5>:</h5></td><td><h5><?= $result['basofil']; ?> %</h5></td></tr>
		<tr><td><h5>Eosinofil</h5></td><td><h5>:</h5></td><td><h5><?= $result['eosinofil']; ?> %</h5></td></tr>
		<tr><td><h5>Netrofil Stab</h5></td><td><h5>:</h5></td><td><h5><?= $result['netrofil_stab']; ?> %</h5></td></tr>
		<tr><td><h5>Netrofil Segmen</h5></td><td><h5>:</h5></td><td><h5><?= $result['netrofil_segmen']; ?> %</h5></td></tr>
		<tr><td><h5>Lymposit</h5></td><td><h5>:</h5></td><td><h5><?= $result['lymposit']; ?> %</h5></td></tr>
		<tr><td><h5>Monosit</h5></td><td><h5>:</h5></td><td><h5><?= $result['monosit']; ?> %</h5></td></tr>
</tbody></table>
	<!-- <h3>Tanggal Daftar: <?= $result['tanggal_daftar'] ?></h3>
	<h5>Nomor rekam Medik pasien : <?= $result['no_rm']; ?></h5>
	<h5>Nama Pasien : <?= $result['nama_pasien']; ?> <br></h5>
	<h5>Hemoglobin : <?= $result['hemoglobin']; ?> <br></h5>
	<h5>Lekosit : <?= $result['lekosit']; ?> <br></h5>
	<h5>Hemaktokrit : <?= $result['hemaktorit']; ?> <br></h5>
	<h5>Trombosit : <?= $result['trombosit']; ?> <br></h5>
	<h5>MCV : <?= $result['mcv']; ?> <br></h5>
	<h5>MCH : <?= $result['mch']; ?> <br></h5>
	<h5>MCHC : <?= $result['mchc']; ?> <br></h5>
	<h5>LED : <?= $result['led']; ?> <br></h5>
	<h5>Basofil : <?= $result['basofil']; ?> <br></h5>
	<h5>Eosinofil : <?= $result['eosinofil']; ?> <br></h5>
	<h5>Netrofil Stab : <?= $result['netrofil_stab']; ?> <br></h5>
	<h5>Netrofil Segmen : <?= $result['netrofil_segmen']; ?> <br></h5>
	<h5>Lymposit : <?= $result['lymposit']; ?> <br></h5>
	<h5>Monosit : <?= $result['monosit']; ?> <br></h5> -->
	<?php } ?>
</body>
</html>