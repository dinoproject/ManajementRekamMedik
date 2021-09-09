<?php 
	require_once 'config.php';
	$id = json_encode($_POST['id']);
	$c = mysqli_query($con, "SELECT * FROM pasien where no_rm = $id");
	$result = mysqli_fetch_array($c);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
	<div style="padding-left:20px;">
		<table>
			<tbody>
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
	<input type="number" name="suhu" placeholder="Masukkan Suhu"><br>
	<label>Tekanan Darah</label><br>
	<input type="text" name="tekanan_darah" placeholder="Masukkan Tekanan Darah"><br>
	<label>Berat Badan</label><br>
	<input type="number" name="berat_badan" placeholder="Masukkan Berat Badan"><br>
		
	<label>Subject(Subjektif)</label><br>
	<textarea placeholder="Subject" name="subject" style="width: 90%; height: 100px; border:2px solid black;"></textarea>
	<label>Object(Objektif)</label><br>
	<textarea placeholder="Object" name="object" style="width: 90%; height: 100px; border:2px solid black;"></textarea>
	<label>Assesment(Penilaian)</label><br>
	<textarea placeholder="Assesment" name="assesment" style="width: 90%; height: 100px; border:2px solid black;"></textarea><br>
	<label>Plan(Perencanaan)</label><br>
	<textarea placeholder="Plan" name="plan" style="width: 90%; height: 100px; border:2px solid black;"></textarea><br>
	<label>Nama Dokter</label>
			<div class="form-row">
				<select name="nama_dokter">
					<option selected>-- Pilih Dokter --</option>
					<?php 
					$sql = mysqli_query($con, "SELECT * FROM dokter") or die(mysqli_error($con));
					while($obat = mysqli_fetch_array($sql)) {
						echo '<option value="'.$obat['nama'].'">'.$obat['nama'].'</option>';
					}
					?>
				</select>
				<span class="select-btn">
					<i class="zmdi zmdi-chevron-down"></i>
				</span>
			</div>
			<br>
	<label>Obat</label>
		<select class="form-control" multiple onfocus='this.size=10;' name="obat[]">
	<!-- <select class="form-select" multiple aria-label="multiple select example"> -->
		<option selected>-- Pilih Obat --</option>
		<?php 
			$sql = mysqli_query($con, "SELECT * FROM obat") or die(mysqli_error($con));
			while($obat = mysqli_fetch_array($sql)) {
				echo '<option value="'.$obat['nama_obat'].'">'.$obat['nama_obat'].'</option>';
			}
		 ?>
	</select>
	<br>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>