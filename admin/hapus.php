<?php

require 'conn.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
	echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'table_cls.php';
            </script>"; 
    }
    else{
     echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'table_cls.php';
            </script>"; 
}

 ?>