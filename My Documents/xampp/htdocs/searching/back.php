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
		<h3>Form Pencarian Dengan PHP</h3>
		<hr>

		<div class="row">
			<div class="col-sm-4">
				<form role="form" action="back.php" method="get">
					<div class="form-group">
						<label>Cari :</label>
						<input type="text" name="cari" class="form-control">						
					</div>

				<button type="submit" class="btn btn-info btn-block">Search</button>
				</form>	
			</div>
			<div class="col-sm-8">
				<?php 
				if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					echo "<b>Hasil pencarian : ".$cari."</b>";
				}
				?>
			 
				<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Fakultas</th>
					</tr>
					<?php 
					if(isset($_GET['cari'])){
						$cari = $_GET['cari'];
						$data = mysql_query("select * from mhs where nama like '%".$cari."%'");				
					}else{
						$data = mysql_query("select * from mhs");		
					}
					//$no = 1;
					while($d = mysql_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $d['id']; ?></td>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['fakultas']; ?></td>
					</tr>
					<?php } ?>
				</table>
				
			</div>	
		</div> 		
	</div>		
</body>
</html>