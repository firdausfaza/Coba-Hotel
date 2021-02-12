<?php
 $koneksi = mysqli_connect("localhost","root","","dbhotel");

// LOGIN DAN REGIST
function registrasi ($data){
	global $koneksi;

	$username= strtolower(stripslashes($data["username"]));
	$password=mysqli_real_escape_string($koneksi, $data["password"]);
	$password2=mysqli_real_escape_string($koneksi, $data["password2"]);
	$status = $data["status"];

	// Cek username sudah ada
	$resultuser = mysqli_query($koneksi, "SELECT * FROM useradmin WHERE username = '$username'");

	if (mysqli_fetch_assoc($resultuser)) {
		echo "<script>
		alert('Username Sudah Terdaftar')
		</script>"; 

		return false;
	}


	// Konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('Konfirmasi password salah');
				</script>";
		return false;
	}

	// Enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//Add user 
	mysqli_query($koneksi, "INSERT INTO useradmin VALUES('', '$username', '$password', '$status')");

	return mysqli_affected_rows($koneksi);
}
 // END OF LOGIN DAN REGIST



// FORM TAMBAH ROOM #INSERT
	function tambah($data){
 	
		global $koneksi;
	// panggil data
	  $kdclass = htmlspecialchars($data["kdclass"]);
      $roomhotel = htmlspecialchars($data["roomhotel"]);
      $no = htmlspecialchars($data["no"]);
      $harga = htmlspecialchars($data["harga"]);

      // insert data
      $query = "INSERT INTO dt_room VALUES ('', '$kdclass', '$roomhotel', '$no', '$harga')";

      mysqli_query($koneksi, $query);

      // cek status berhasil ditambahkan atau tidak
      return mysqli_affected_rows($koneksi);

	}

	function tambahclass($data){
 	
		global $koneksi;
	// panggil data
	  $kdclass = htmlspecialchars($data["kdclass"]);
      $rmnama = htmlspecialchars($data["rmnama"]);
      $harga = htmlspecialchars($data["harga"]);

      // insert data
      $query = "INSERT INTO dt_class VALUES ('', '$kdclass', '$rmnama', '$harga')";

      mysqli_query($koneksi, $query);

      // cek status berhasil ditambahkan atau tidak
      return mysqli_affected_rows($koneksi);

	}

	function tambahtransaksi($data){
 	
		global $koneksi;
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

      mysqli_query($koneksi, $query);

      // cek status berhasil ditambahkan atau tidak
      return mysqli_affected_rows($koneksi);

	}

	// FORM HAPUS #DELETE
	function hapus($id){

		global $koneksi;

		mysqli_query($koneksi, "DELETE FROM dt_room WHERE id = $id");

		return mysqli_affected_rows($koneksi);
	}

	function hapustr($id){

		global $koneksi;

		mysqli_query($koneksi, "DELETE FROM dt_transaksi WHERE id = $id");

		return mysqli_affected_rows($koneksi);
	}

	function hapusr($idr){

		global $koneksi;

		mysqli_query($koneksi, "DELETE FROM useradmin WHERE idr = $idr");

		return mysqli_affected_rows($koneksi);
	}

	function hapucls($id){

		global $koneksi;

		mysqli_query($koneksi, "DELETE FROM dt_class WHERE id = $id");

		return mysqli_affected_rows($koneksi);
	}