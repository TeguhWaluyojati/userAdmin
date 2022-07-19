<?php 
	include "koneksi.php" ;
	$data = mysqli_query ($koneksi, "SELECT * FROM karyawan WHERE nidn") ;
	$row = mysqli_fetch_array($data) ;

	$foto = $row['foto'] ;
	if(file_exists('file/'.$foto))
	{
		unlink('file/'.$foto) ;
	}
	$query = "DELETE FROM karyawan WHERE nidn";
	mysqli_query($koneksi, $query) or die ("SQL Error ".mysli_error()) ;
	header('location:index.php')
?>