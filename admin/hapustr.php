<?php

require 'conn.php';

$id = $_GET["id"];

if (hapustr($id) > 0) {
	echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'table_transaksi.php';
            </script>"; 
    }
    else{
     echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'table_transaksi.php';
            </script>"; 
}

 ?>