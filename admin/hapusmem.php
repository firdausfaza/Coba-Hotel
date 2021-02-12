<?php

require 'conn.php';

$id = $_GET["id"];

if (hapusmem($id) > 0) {
	echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'table_member.php';
            </script>"; 
    }
    else{
     echo "<script>
            alert('Data Gagal Dihapus');
            document.location.href = 'table_member.php';
            </script>"; 
}

 ?>