<?php

require 'conn.php';

$id = $_GET["id"];

if (hapusvisit($id) > 0) {
	echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'visitors.php';
            </script>"; 
    }
    else{
     echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'visitors.php';
            </script>"; 
}

 ?>