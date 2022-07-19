<!DOCTYPE html>
<html>
<head>
	<title>Ide Solusi Integrasi</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-8 mt-4">
				<div class="col-md-12 mt-4">
					<h2>Ide Solusi Integrasi</h2>
				</div>
				<div class="col-md-12 mt-4">
					<a href="form_upload.php" class="btn btn-success mb-4">Upload</a>
					<?php 
						include "koneksi.php";
						$data = mysqli_query($db_handle, "SELECT * FROM karyawan order by nidn DESC") ;
						while ($row = mysqli_fetch_array($data)) {
					?>

					<div class="col-md-12 row mb-5">
						<div class="col-md-3">
							<img src="file/<?php echo $row['foto'] ; ?>" style="width: 100%;">
						</div>
						<div class="col-md-9">
							<h2><?php echo $row['nama'] ; ?></h2>
							<h4><?php echo $row['nidn'];?></h4>
						</div>
					</div>

					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>