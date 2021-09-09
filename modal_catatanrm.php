<?php 
	require_once 'config.php';
	$id = json_encode($_POST['id']);
	$c = mysqli_query($con, "SELECT * FROM catatan_rekammedik where no_rm = $id order by no_id LIMIT 1");
	$result = mysqli_fetch_array($c);
	// $e = mysqli_query($con, "SELECT * FROM regencies where id = $id");
	// $f = mysqli_query($con, "SELECT * FROM districts");
	// $g = mysqli_query($con, "SELECT * FROM villages");
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
	<?php if(empty($result)) { ?>
		<h2>Pasien dengan nomor rekam medik <?= $id ?> belum memiliki riwayat rekam medik.</h2>

	<?php }else { ?>
	<div style="padding-left:20px;">
		<table>
			<tbody>
				<tr>
					<td><h5>Tanggal Input Data</h5></td>
					<td><h5>:</h5></td>
					<td><input name="no_rm" value="<?= $result["tanggal_daftar"] ?>" readonly></td>
				</tr>
				<tr>
					<td><h5>NO RM</h5></td>
					<td><h5>:</h5></td>
					<td><input name="no_rm" value="<?= $result["no_rm"] ?>" readonly></td>
				</tr>
				<tr>
					<td><h5>Nama Pasien</h5></td>
					<td><h5>:</h5></td>
					<td><input name="nama" value="<?= $result["nama_pasien"] ?>" readonly></td>
				</tr>
			</tbody>
		</table>
		
	<label>Suhu Badan</label><br>
	<input type="number" value='<?= $result["suhu_badan"]; ?>' readonly><br>
	<label>Tekanan Darah</label><br>
	<input type="text" value="<?= $result["tekanan_darah"] ?>" readonly><br>
	<label>Berat Badan</label><br>
	<input type="number" value="<?= $result["berat_badan"] ?>" readonly><br>
		
	<label>Subject(Subjektif)</label><br>
	<textarea name="subject" style="width: 90%; height: 120px; border:2px solid black;"><?= $result["subject"] ?></textarea>
	<label>Object(Objektif)</label><br>
	<textarea name="object" style="width: 90%; height: 120px; border:2px solid black;"><?= $result["object"] ?></textarea>
	<label>Assesment(Penilaian)</label><br>
	<textarea name="assesment" style="width: 90%; height: 120px; border:2px solid black;"><?= $result["assesment"] ?></textarea><br>
	<label>Plan(Perencanaan)</label><br>
	<textarea name="plan" style="width: 90%; height: 120px; border:2px solid black;"><?= $result["plan"] ?>" </textarea><br>
	<label>Nama Dokter</label>
	<input type="text" value="<?= $result["nama_dokter"] ?>" readonly>
	<br><br>
	<label>Obat</label>
		<?php
		$id_medik = $result["no_id"];
		$obt = mysqli_query($con, "SELECT * FROM pembelian_obat where no_id_rm = $id_medik");
		?>

		 <table class="table table-striped">
		 	<thead>
		 		<tr class=bg-table>
		 			<th scope="col">NO</th>
		 			<th scope="col">Kode Obat</th>
		 			<th scope="col">Nama Obat</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		<?php $i = 1; ?>
		 		<?php foreach($obt as $row) :?>
		 			<tr>
		 				<!-- <th scope="row">1</th> -->
		 				<td><?= $i ?></td>
		 				<td><?= $row["obat_id"] ?></td>
		 				<td><?= $row["nama_obat"] ?></td>
		 				<?php $i++; ?>
		 			</tr>
		 		<?php endforeach; ?>
		 	</tbody>
		 </table>
	<br>
	</div>
	<?php } ?>
</body>
</html>