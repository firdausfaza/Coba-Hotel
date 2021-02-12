<?php 
$conn = mysqli_connect("localhost", "root", "", "dbhotel");

// REGISTRASI & LOGIN

function registuser($data){
	global $conn;

	$nama = strtolower(stripslashes($data["nama"]));
	$email = $data["email"];
	$nohp = $data["hp"];
	$alamat = $data["alamat"];
	$pw = mysqli_real_escape_string($conn, $data["pw"]);
	$pw2 = mysqli_real_escape_string($conn, $data["pw2"]);

// Cek username sudah ada
	$resultuser = mysqli_query($conn, "SELECT * FROM user WHERE nama = '$nama'");

	if (mysqli_fetch_assoc($resultuser)) {
		echo "<script>
		alert('Username Sudah Terdaftar')
		</script>"; 

		return false;
}

// Konfirmasi password
	if ($pw !== $pw2) {
		echo "<script>
				alert('Konfirmasi password salah');
				</script>";
		return false;
	}

	// Enkripsi password
	$pw = password_hash($pw, PASSWORD_DEFAULT);

	//Add user 
	mysqli_query($conn, "INSERT INTO user VALUES('', '$nama', '$email', '$nohp', '$alamat', '$pw')");

	return mysqli_affected_rows($conn);
}


// INSERT DATA
function tambahtr($data){
 	
		global $conn;
	// panggil data
      $nama = htmlspecialchars($data["namacust"]);
      $nmkamar = htmlspecialchars($data["nmkmr"]);
      $class = htmlspecialchars($data["roomhotel"]);
      $cekin = htmlspecialchars($data["tgl1"]);
      $cekout = htmlspecialchars($data["tgl2"]);
      $bed = htmlspecialchars($data["bed"]);
      $hargakamar = htmlspecialchars($data["hargakmr"]);
      $total = htmlspecialchars($data["ttlharga"]);

      // insert data
      $query = "INSERT INTO dt_transaksi VALUES ('', '$nama', '$nmkamar', '$class', '$cekin', '$cekout', '$bed', '$hargakamar', '$total')";

      mysqli_query($conn, $query);

      // cek status berhasil ditambahkan atau tidak
      return mysqli_affected_rows($conn);

	}

 ?>