<!DOCTYPE html>
<html lang="en">
<head>
	<title>Searching</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

	<?php 
	include 'config.php';
	?>
	<div class="container" style="padding-top: 20px; padding-bottom: 20px;">
		<h3>Aset Dies Aplikasi-Soraya Inter Indo</h3>
		<hr>

		<div class="row">

						
				<form role="form" action="index.php" method="get">
					<div class="form-group">
						<label>Cari :</label>
						<input type="text" name="cari" class="form-control">						
					</div>

				<button type="submit" class="btn btn-info btn-block">Search</button>
				</form>	
			

			
				<?php 
				if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					echo "<b>Hasil pencarian : ".$cari."</b>";
				}
				?>
			 
				<table class="table table-striped">
										
					<?php 
					if(isset($_GET['cari'])){
						$cari = $_GET['cari'];
						$data = mysql_query("select * from v_aset where kode_aset like '%".$cari."%'");				
					}else{
						$data = mysql_query("select * from v_aset");		
					}
					//$no = 1;
					while($d = mysql_fetch_array($data)){
					?>
						<tr>
							<th>Kode</th>
							<td><?php echo $d['kode_aset']; ?></td>
						</tr>
						
						<tr>
							<th>Nama Dies</th>
							<td><?php echo $d['nama_aset']; ?></td>
						</tr>
						<tr>
							<th>Kategori</th>
							<td><?php echo $d['nama_kategori']; ?></td>
						</tr>
						<tr>
							<th>Status</th>
							<td><?php echo $d['status_aset']; ?></td>
						</tr>
						<tr>
							<th>Rak</th>
							<td><?php echo $d['nama_rak']; ?></td>
						</tr>
						<tr>
							<th>Lokasi</th>
							<td><?php echo $d['lokasi_aset']; ?></td>
						</tr>
						<tr>
							<th>Pelanggan</th>
							<td><?php echo $d['nama_customer']; ?></td>
						</tr>
						<tr>
							<th>Jumlah</th>
							<td><?php echo $d['quantity']; ?></td>
						</tr>
						<tr>
							<th>Satuan</th>
							<td><?php echo $d['satuan']; ?></td>
						</tr>
						<tr>
							<th>Di input oleh</th>
							<td><?php echo $d['username']; ?></td>
						</tr>
						<tr>
							<th>.........................</th>
							
						</tr>

					<?php } 
					?>
				</table>
				
				

		</div> 		
	</div>		
</body>
</html>