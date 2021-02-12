<?php 
require 'conn.php';

$id = $_GET["id"];

if (hapustr($id)>0) {
	echo "<script> 
			alert ('Berhasil Verifikasi'); 
			document.location.href = 'visitors.php'; 
		  </script>";
}
else{
	echo "<script> 
		  alert ('Gagal Verifikasi');
		  document.location.href = 'checkin.php';
		  </script>";
}

 ?>