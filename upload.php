<?php 
	include "koneksi.php" ;
	$foto = $_FILES['foto']['name'];
	$file_tmp = $_FILES['foto']['tmp_name'] ;
	$nidn = $_POST['nidn'] ;
	$nama = $_POST['nama'] ;
	$pass = $_POST['pass'] ;
	move_uploaded_file($file_tmp, 'file/'.$foto) ;
	$query = "INSERT INTO karyawan SET 
									nidn = '$nidn',
								    nama = '$nama',
									pass ='$pass',
								    foto = '$foto'
	";
	mysqli_query($db_handle, $query) 
	or die("SQL Error " .mysqli_error());
	header('location:home.php');
?>