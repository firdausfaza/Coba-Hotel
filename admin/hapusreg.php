<?php 
require 'conn.php';

$idr = $_GET["idr"];

if (hapusr($idr) > 0) {
	echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'table_regis.php';
            </script>"; 
    }
    else{
     echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'table_regis.php';
            </script>"; 
}
 ?>