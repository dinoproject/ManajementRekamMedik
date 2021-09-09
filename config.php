<?php
$con = mysqli_connect("localhost","root","","rekam_medik");
// Check connection


function query($query) {
	global $con;
	$result = mysqli_query($con, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}




function insert_data($data) {
	global $con;

	$nama_pasien = $data["nama_pasien"];
	$no_nik = $data["no_nik"];
	$jenis_kelamin = $data["gender"];
	$agama = $data["agama"];
	$status = $data["status"];
	$pendidikan = $data["pendidikan"];
	$pembayaran = $data["pembayaran"];
	$pekerjaan = $data["pekerjaan"];
	$tanggal_lahir = new DateTime($data["tanggal_lahir"]);
	$tempat_lahir = $data["tempat_lahir"];
	$alamat = $data["alamat"];
	$provinsi = $data["provinsi"];
	$kota = $data["kota"];
	$kecamatan = $data["kecamatan"];
	$kelurahan = $data["kelurahan"];
	$kewarganegaraan = $data["kewarganegaraan"];
	$no_hp = $data["no_hp"];
	$email = $data["email"];
	$tanggal_daftar = new DateTime();
	$difference = $tanggal_daftar->diff($tanggal_lahir);
	$tanggal_lahir = $tanggal_lahir->format('Y-m-d');
	$tanggal_daftar = $tanggal_daftar->format('Y-m-d');
	$usia = $difference->y;
	$d = mysqli_query($con, "SELECT * FROM provinces where id = $provinsi");
	$e = mysqli_query($con, "SELECT * FROM regencies where id = $kota");
	$f = mysqli_query($con, "SELECT * FROM districts where id = $kecamatan");
	$g = mysqli_query($con, "SELECT * FROM villages where id = $kelurahan");
	$result = mysqli_fetch_array($d);
	$result1 = mysqli_fetch_array($e);
	$result2 = mysqli_fetch_array($f);
	$result3 = mysqli_fetch_array($g);
	$provinsi = $result["name"];
	$kota = $result1["name"];
	$kecamatan = $result2["name"];
	$kelurahan = $result3["name"];

	$query = "INSERT INTO pasien values
	('', '$nama_pasien','$tempat_lahir','$tanggal_lahir', '$jenis_kelamin', '$alamat', '$agama', '$status', '$pendidikan', '$pekerjaan', '$kewarganegaraan', '$pembayaran','$no_hp','$tanggal_daftar',
	'$email', '$no_nik', '$usia','','$provinsi','$kota','$kecamatan','$kelurahan' )";

	mysqli_query($con,$query);
	return mysqli_affected_rows($con);
}

// function insert_pembelianobat($data) {
	
// }


function insert_penunjang($data) {
	global $con;
	$rm = $data['no_rm'];
	$nama = $data['nama_pasien'];
	$hemoglobin = $data['hemoglobin'];
	$lekosit = $data['lekosit'];
	$hemaktorit = $data['hemaktorit'];
	$trombosit = $data['trombosit'];
	$mcv = $data['mcv'];
	$mch = $data['mch'];
	$mchc = $data['mchc'];
	$led = $data['led'];
	$basofil = $data['basofil'];
	$eosinofil = $data['eosinofil'];
	$netrofil_stab = $data['netrofil_stab'];
	$netrofil_segmen = $data['netrofil_segmen'];
	$lymposit = $data['lymposit'];
	$monosit = $data['monosit'];



	$query = "INSERT INTO penunjang values
	('', '$rm','$nama','$hemoglobin', '$lekosit', '$hemaktorit', '$trombosit', '$mcv', '$mch', '$mchc', '$led', '$basofil','$eosinofil','$netrofil_stab',
	'$netrofil_segmen', '$lymposit', '$monosit')";

	mysqli_query($con, $query);
	return mysqli_affected_rows($con);
}


function insert_rm($data) {
	global $con;
	$query1 = mysqli_query($con, "SELECT * FROM catatan_rekammedik order by no_id DESC LIMIT 1");
	$result = mysqli_fetch_array($query1); 
	$no_id = $result['no_id'] + 1;
	$rm_no = $data['no_rm'];
	$nama_pasien = $data['nama'];
	$suhu = $data['suhu'];
	$tekanan_darah = $data['tekanan_darah'];
	$berat_badan = $data['berat_badan'];
	$nama_dokter = $data['nama_dokter'];
	$sub = $data['subject'];
	$obj = $data['object'];
	$ass = $data['assesment'];
	$plan = $data['plan'];
	date_default_timezone_set('Asia/Jakarta');
	$tanggal_daftar = new dateTime();
	$tanggal_daftar = $tanggal_daftar->format('Y-m-d');
	$jam = date('H:i:s');
	$total_harga = 0;
	$obat = $data['obat'];
	foreach ($obat as $ob) {
		$query1 = mysqli_query($con, "SELECT * FROM obat where nama_obat = '$ob'");
		$result = mysqli_fetch_array($query1);
		$id = $result['id_obat'];
		$harga = $result['harga_obat'];
		$total_harga += $harga;
		mysqli_query($con, "INSERT INTO pembelian_obat values ('$no_id','$rm_no','$nama_pasien','$id','$ob','$harga', 0)");
	}

	$query2 = "INSERT INTO pembayaran_obat values ('$no_id', '$rm_no', '$nama_pasien', 'Belum Lunas', 0, '$total_harga', '$tanggal_daftar', '$jam')";

	mysqli_query($con, $query2);

	$query = "INSERT INTO catatan_rekammedik values
	('$no_id', '$rm_no', '$nama_pasien', '$suhu', '$tekanan_darah', '$berat_badan', '$nama_dokter', '$sub', '$obj', '$ass', '$plan', '$tanggal_daftar', '$jam')";

	mysqli_query($con, $query);
	return mysqli_affected_rows($con);
}

function insert_obat($data) {

}

function cari_rm($keyword) {
	$query = "SELECT * FROM pasien WHERE no_rm = $keyword";
	return query($query);
}
function cari_nama($keyword) {
	$query = "SELECT * FROM pasien WHERE nama_pasien LIKE '%$keyword%'";
	return query($query);
}
function cari_nik($keyword) {
	$query = "SELECT * FROM pasien WHERE no_nik = $keyword";
	return query($query);
}



?>