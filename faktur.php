<?php
session_start();

if (!isset($_SESSION["login"])) {
	echo "<script> alert('Anda belum login, silahkan login untuk Booking hotel.')
			document.location.href = 'login.php' </script> 
	 ";
}
require 'conn/koneksi.php';
// “SELECT *
// FROM tsurat 
// ORDER BY no_urut
// DESC LIMIT 1”

// “SELECT *
// FROM tsurat
// WHERE no_urut
// IN
// (
// SELECT MAX(no_urut)
//  FROM tsurat
// )”


$result = mysqli_query($conn, "SELECT * FROM dt_transaksi ORDER BY  id DESC LIMIT 1");

$query = mysqli_query($conn, "SELECT * FROM dt_transaksi WHERE id IN(SELECT MAX(id) FROM dt_transaksi");

?>
<!DOCTYPE html>
<html>

<head>
	<title>Make Reservation</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- script css -->
	<link rel="stylesheet" type="text/css" href="styles.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<!-- datetimepicker -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="assets/css/ilmudetil.css"> -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css" />
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/moment-with-locales.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.js"></script>
</head>

<body>

	<div class="box">

		<!-- NAVBAR -->

		<nav class="navbar navbar-expand-sm fixed-top bg-dark my-navbar  ">
			<div class="container">
				<a class="navbar-brand" href="#"> <strong> <img src="bootstrap/img/rkh.png"></strong></a>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto w-100 justify-content-end ">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
						<li class="nav-item">
							<a class="nav-link" href="facilities.php">FACILITIES</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CLASS</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="cstandard.php">Standard</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="csuper.php">Superior</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="csdelux.php">Deluxe</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="cpres.php">President</a>
							</div>
						<li class="nav-item">
							<a class="nav-link" href="#">ABOUT US</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">|</a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> <?php echo strtoupper($_SESSION["nama"]); ?></a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="regist.php"><i class="fas fa-user-plus"></i> REGISTER</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
							</div>

					</ul>
				</div>
			</div>
		</nav>

		<!-- CONTENT -->
		<div class="konten">
			<div class="container">
				<div class="text-center">
					<h2>Cetak Faktur Kamu Untuk Tanda Bukti.</h2>
					<p style="text-align: center; display: block;">Fill Your Data in below!</p>
				</div>

				<br><br><br>
				<hr>
				<br><br>

				<div class="jumbotron">
					<!-- FORM -->

					<div class="box2">
						<div class="card">
							<div class="card-body">

								<table class="table table-bordered">
									<thead class="thead-dark">
										<center>
											<h4><b>Data Booking anda</b></h4>
										</center>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Nama</th>
											<th scope="col">No Kamar</th>
											<th scope="col">Class</th>
											<th scope="col">CheckIn</th>
											<th scope="col">CheckOut</th>
											<th scope="col">+Bed</th>
											<th scope="col">Total Harga</th>

										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php $row = mysqli_fetch_assoc($result); ?>
										<tr>
											<td><?= $i; ?></td>
											<td><?= $row["namacust"]; ?></td>
											<td><?= $row["nokamar"]; ?></td>
											<td><?= $row["roomhotel"]; ?></td>
											<td><?= $row["cekin"]; ?></td>
											<td><?= $row["cekout"]; ?></td>
											<td><?= $row["bed"]; ?></td>
											<td><?= "Rp." . number_format($row["ttlharga"], 0, ".",  "."); ?></td>
										</tr>
										<?php $i++ ?>

									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
			<button style="width: 100px; margin-right: 270px;" type="button" class="btn btn-warning  
    btn-sm float-right "><b><a href="report/cetakuser.php" style="color:#000; text-decoration: none;">Tampilkan</a></b>
			</button>
		</div>

		<br><br><br><br><br><br>
		<!-- FOOTER -->
		<div class="footer">
			<footer class="bg-dark py-5 ">
				<div class="container fluid">
					<div class="row">
						<div class="col-lg-6 col-md-8">
							<p>
								RKH CENTER <br>

								Jl. A. Yani, Mendungan, Pabelan, Kec. Kartasura, Kabupaten Sukoharjo, Jawa Tengah 57162 <br>

								<i class="fas fa-mobile-alt"></i>
								Phone : +62 21 - 7581 8999 <br>
								<i class="fas fa-fax"></i>
								Fax : +62 21 - 766 4922 <br>
								<i class="fas fa-envelope"></i>
								Email : info@rich-karton.com <br>
								<i class="fas fa-clock"></i>
								Operasional : Hari Kerja, 8:00 s.d 17:00 <br>
							</p>
						</div>
						<div class="col-lg-6 col-md-4">
							<div class="input-group input-group-lg">
								<input type="text" class="form-control" placeholder="Your Email">
								<div class="input-group-btn">
									<button class="btn btn-lg btn-info" type="submit">Subscribe </button> <br>
								</div>
							</div>
							<a href=""><i class="fa-4x fab fa-facebook-square  mt-5 text-white"></i></a>
							<a href=""><i class="fa-4x fab fa-twitter-square ml-3 mt-5 text-white"></i></a>
							<a href=""><i class="fa-4x fab fa-youtube-square ml-3 mt-5 text-white"></i></a>
							<a href=""><i class="fa-4x fab fa-instagram ml-3 mt-5 text-white"></i></a>
						</div>
					</div>
					<hr>
					<div class="hak">
						<p class="hak">Firdaus Aulia FAza</p>
					</div>
				</div>
			</footer>
		</div>


		<!-- js script bs -->
		<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<!-- end of js sc bs -->


</body>

</html>