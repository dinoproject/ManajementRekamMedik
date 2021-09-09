<?php 
	require_once 'config.php';
	$id = json_encode($_POST['id']);
	$c = mysqli_query($con, "SELECT * FROM pembelian_obat where no_id_rm = $id and status_bayar = 0");
	
	// $e = mysqli_query($con, "SELECT * FROM regencies where id = $id");
	// $f = mysqli_query($con, "SELECT * FROM districts");
	// $g = mysqli_query($con, "SELECT * FROM villages");
	// $result2 = mysqli_fetch_array($e);
	// $result3 = mysqli_fetch_array($f);
	// $result4 = mysqli_fetch_array($g);

    if(isset($_POST))
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container-fluid">
		<h3>LIST OBAT YANG BELUM DIBAYAR</h3>
        <div id="catlist">
        <table class="table table-striped">
        		<thead>
        			<tr class=bg-table>
        				<th scope="col"></th>
        				<th scope="col">Nama obat</th>
        				<th scope="col">Harga obat</th>
        			</tr>
        		</thead>
                    <?php $i = 1; ?>
        <?php while ($result = mysqli_fetch_array($c)) { ?>
        		<tbody>
        			<tr>
                        <?php 
                        $idd = "chck_".'$i';
                         ?>
        				<td><input type="checkbox" id="<?= $result["nama_obat"]; ?>" 
                            onclick="test(this);" value="<?= $result["harga"]; ?>"></td>
        				<td><label for="<?= $result["nama_obat"]; ?>"><?= $result["nama_obat"]; ?></label></td>
        				<?php 
        				$rp = number_format($result["harga"], 0, ".", ",");
        				 ?>
        				<td><label><?= "Rp. ".$rp; ?></label></td>
                        <?php $i++; ?>
        			</tr>
        		</tbody>
  		<?php } ?>
        </table>
        <table>
        	<tr>
        		<td><label>Biaya Pendaftaran</label></td>
        		<td>: Rp.</td>
    			<td><input type="text" name="total_daftar" id="total_daftar" value="0" readonly></td>
        	</tr>
        	<tr>
        		<td><label>Biaya Pemeriksaan Darah</label></td>
        		<td>: Rp.</td>
    			<td><input type="text" name="total_pemeriksaan" id="total_pemeriksaan" value="0" readonly></td>
        	</tr>
        	<tr>
        		<td><label>Total Biaya</label></td>
        		<td>: Rp.</td>
    			<td><input type="text" name="total" id="total" value="0" readonly></td>
        	</tr>
    	</table>
        </div>
    	<br><br>
    	<label>Masukkan Pembayaran: Rp</label>
    	<input type="number" name="" placeholder="Masukkan Pembayaran">
	</div>
</body>
    <script type="text/javascript">
        function calcAndShowTotal() {
          var total = 0;
          $('#catlist :checkbox:checked').each(function() {
            total += parseInt($(this).attr('value')) || 0;
        });
          total = convertToRupiah(total);
          $('#total').val(total);
      }
      $('#catlist :checkbox').change(calcAndShowTotal).change();

      function convertToRupiah(angka){
        var rupiah = '';        
        var angkarev = angka.toString().split('').reverse().join('');
        for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
            return rupiah.split('',rupiah.length-1).reverse().join('');
        }
    </script>
</html>