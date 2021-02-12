
<!DOCTYPE html>
<html>
<head> 
	<title>Rich Karton</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- script css -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg  fixed-top my-navbar ">
		<div class="container">
	  		<a class="navbar-brand" href="#"> <strong> <img src="bootstrap/img/rkh.png"></strong></a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    	<ul class="navbar-nav mr-auto w-100 justify-content-end ">
	      		<li class="nav-item active">
	        		<a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="#">FACILITIES</a>
	      		</li>
	     		<li class="nav-item dropdown">
	        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CLASS</a>
	        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          				<a class="dropdown-item" href="#">Standard</a>
	          				<div class="dropdown-divider"></div>
	          				<a class="dropdown-item" href="#">Superior</a>
	          				<div class="dropdown-divider"></div>
	          				<a class="dropdown-item" href="#">President</a>
	       				</div>
	      		<li class="nav-item">
	        		<a class="nav-link" href="#">ABOUT US</a>
	      		</li>
	      		<li class="nav-item">
	       			<a class="nav-link" href="#">|</a>
	      		</li>
	      		<li class="nav-item"><a class="nav-link" href="regist.php"><i class="fas fa-user-plus"></i></i> REGIST</a></li> 
	       		<li class="nav-item"><a class="nav-link" href="login.php"><i class="fas fa-user"></i></i> LOGIN</a></li>

	       		<li class="nav-item">
	      		<a class="btn btn-outline-light btn-sm " href="reserve.php" role="button">RESERVE NOW</a>
	       		</li>
    		</ul>
  		</div>
		</div>
	</nav>



<!-- JUMBOTRON -->
<!-- <div class="jumbotron">
  <div class="container">
  	  <h1 class="display-4">RICH KARTON<br><span class="font-weight-bold"> HOTELS </span></h1>
  	  <hr class="my-4">
	  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
	  <a class="btn btn-primary btn-lg" href="#" role="button">Reserve Now</a>
  </div>
</div> -->


<!-- CAROUSEL -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  	<div class="carousel-inner">
    	<div class="carousel-item active">
	      <img src="bootstrap/img/bg.jpg" class="d-block 
	      w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	          <h1 class="display-4">RICH KARTON<br><span class="font-weight-bold"> HOTELS </span></h1>
		  	  <p>Hotel Berbintang 4 yang membuat anda nyaman untuk istirahat dengan <br> udara yang sejuk dan pemandangan alam.</p>
    	</div>
	</div>
    <div class="carousel-item">
      <img src="bootstrap/img/cs2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h1 class="display-4">RICH KARTON<br><span class="font-weight-bold"> HOTELS </span></h1>
	  	  <p>Hotel Berbintang 4 yang membuat anda nyaman untuk istirahat dengan <br> udara yang sejuk dan pemandangan alam.</p>
	  	  <p><strong>BARBERSHOP/SALON</strong></p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="bootstrap/img/cs3.jpg" class="d-block w-100" alt="..."> 
    	<div class="carousel-caption d-none d-md-block">
       <h1 class="display-4">RICH KARTON<br><span class="font-weight-bold"> HOTELS </span></h1>
	  	  <p>Hotel Berbintang 4 yang membuat anda nyaman untuk istirahat dengan <br> udara yang sejuk dan pemandangan alam.</p>
	  	  <p><strong>SWIMMING POOL</strong></p>
	  	</div>
	 </div>
    <div class="carousel-item">
      <img src="bootstrap/img/cs4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h1 class="display-4">RICH KARTON<br><span class="font-weight-bold"> HOTELS </span></h1>
	  	  <p>Hotel Berbintang 4 yang membuat anda nyaman untuk istirahat dengan <br> udara yang sejuk dan pemandangan alam.</p>
	  	  <p><strong>RESTAURANT</strong></p>
       </div>
    </div>

   </div>
 </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!-- CONTENT -->
<div class="konten">
	<div class="container">
		<div class="text-center">
			<h2>Welcome To Rich Karton Hotels</h2>
		</div>
			<hr class="my-4">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-8">
					<img src="bootstrap/img/isi.jpg">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-4">
					<p><strong>Mengenai Hotel Rich Karton</strong>
					Hotel bintang 4 dan yang melayani kebutuhan hotel mewah dengan spektrum penuh, pelayanan superior dilengkapi fasilitas lainnya. <br><br>

					<strong>Mengenai RHK Management</strong> <br>

					RHK Management berpengalaman dalam manajemen hotel dengan lebih dari 14 tahun. Komponen utama yang terdapat didalamnya yaitu kombinasi standar Internasional dengan budaya lokal. RHK Management juga selalu mengutamakan pemanfaatan produk dalam negeri dan pengembangan sumber daya manusia lokal<br>

					Hingga saat ini, RHK Management mengoperasikan lebih dari 50 hotel dengan jumlah 5.733 kamar. Sebagai perusahaan yang sedang berkembang, RHK Management juga akan mengembangkan lebih dari 10 hotel lagi. Terdapat empat nama brand hotel yang beroperasi dibawah manajemen, yaitu Abjad, Amir Hotel, Pajul Hotel, Iksan Express (hotel), Upi Style dan beberapa hotel lain dengan brand managed by Rich Larton.</p>
				</div>
				<div class="col-lg-6 col-md-8 col-sm-10">
					<div class="atur">
						<p><strong> Visi</strong> <br>
						Menjadi perusahaan hospitality kelas dunia yang menggabungkan kearifan lokal dengan kekhasan Indonesia. <br>
						<strong> Misi</strong> <br>
						Kami menggabungkan sumber daya manusia, merek dan teknologi yang menghasilkan: <br>
						1. Pengalaman yang menyentuh hati bagi para tamu dan pelanggan. <br>
						2. Lingkungan Kerja yang Positive, Kesempatan Berkarir dan Peningkatan Kesejahteraan bagi Karyawan, baik di kantor pusat maupun di unit usaha. <br>
						3. Nilai Pengembalian Investasi yang Baik bagi Pemilik Hotel. <br>
						4. Manfaat bagi Masyarakat dan Lingkungan sekitar.
						</p><br><br>
					</div>
				</div>
			</div>
	</div>
</div>

<!-- CONTENT 2 -->
<div class="konten2">
	<h1>Maps</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.3145671805514!2d106.13023371464696!3d-6.088255761423365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418ad8721f55b1%3A0x661c08d7d1609ee7!2sUniversitas+Serang+Raya!5e0!3m2!1sid!2sid!4v1559208485133!5m2!1sid!2sid" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
<br><br>

<!-- <div class="container">
	<div class="row">	
		<div class="gb1">
		<div class="col-lg-6">
			<img src="bootstrap/img/bgcs1.jpg">
		</div>
		</div>
		<div class="gb2">
		<div class="col-lg-3">
			<img src="bootstrap/img/ktn1.jpg">
		</div>
		<div class="col-lg-3">
			<img src="bootstrap/img/ktn2.jpg">
		</div>
		</div>
	</div>
</div> -->

<!-- gallery -->
  <div id="gallery">
    <div class="container">
      <h1>Gallery</h1>
      <div class="row">
      	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="satu"><img class="img-responsive" src="bootstrap/img/ktn1.jpg" width="300px"></div>	
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="dua"><img class="img-responsive" src="bootstrap/img/ktn2.jpg" width="200px"></div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="tiga">
        <img class="img-responsive" src="bootstrap/img/isi.jpg" width="500px"></div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="dua">
        <img class="img-responsive" src="bootstrap/img/gambar-3-D.jpg" width="300px"></div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="lima"><img class="img-responsive" src="bootstrap/img/gambar-3-B.jpg" width="300px"></div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="lima"><img class="img-responsive" src="bootstrap/img/gambar-3-C.jpg" width="300px"></div>
      </div>
    </div>
  </div>
  <!-- gallery -->
<br><br><br><br><br>


<!-- FOOTER -->
<div class="footer">
<footer class="bg-dark py-5 ">
<div class="container fluid">
	<div class="row">
		<div class="col-lg-6 col-md-8">
			<p>
			RKH CENTER <br>

			Jl. A. Yani, Mendungan, Pabelan, Kec. Kartasura, Kabupaten Sukoharjo, Jawa Tengah 57162
			 <br>

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
            <input type="text" class="form-control"  placeholder="Your Email">
            <div class="input-group-btn">
              <button class="btn btn-lg btn-info" type="submit">Subscribe </button> <br>
            </div>
          </div>
           <a href=""><i class="fa-4x fab fa-facebook-square  mt-5 text-white"></i></a>
              <a href=""><i class="fa-4x fab fa-twitter-square ml-3 mt-5 text-white" ></i></a>
              <a href=""><i class="fa-4x fab fa-youtube-square ml-3 mt-5 text-white"></i></a>
              <a href=""><i class="fa-4x fab fa-instagram ml-3 mt-5 text-white"></i></a>
	</div>
</div>
	<hr>
	<div class="hak">
		<p class="hak">Firdaus Aulia Faza</p>
	</div>
</div>
</footer>
</div>



 <!-- js script bs -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- end of js sc bs -->
</body>
</html>