
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
	        		<a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
	      		</li>
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
	        		<a class="nav-link" href="about.php">ABOUT US</a>
	      		</li>
	      		<li class="nav-item">
	       			<a class="nav-link" href="#">|</a>
	      		</li>
	      		<li class="nav-item dropdown">
	        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
	        		<?php 
	        		session_start();
	        			if (isset($_SESSION["login"])) {
	        				echo strtoupper($_SESSION["nama"]);
	        			}
	        			else {
	        				echo "LOGIN";
	        			}
	        		?>
	        			</a>
	        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          				<a class="dropdown-item" href="login.php"><i class="fas fa-user"></i>  LOGIN</a>
	          				<div class="dropdown-divider"></div>
	          				<a class="dropdown-item" href="regist.php"><i class="fas fa-user-plus"></i> REGISTER</a>
	          				<div class="dropdown-divider"></div>
	          				<a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i>  LOGOUT</a>
	       				</div>
 
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
	          <h1 class="display-4 ">Facilities<br><span class="font-weight-bold"> HOTELS </span></h1>
		  	  <p>Hotel Berbintang 4 yang membuat anda nyaman untuk istirahat dengan <br> udara yang sejuk dan pemandangan alam.</p>
    	</div>
	</div>
    <div class="carousel-item">
      <img src="bootstrap/img/cs2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h1 class="display-4">Facilities<br><span class="font-weight-bold"> HOTELS </span></h1>
	  	  <p>Hotel Berbintang 4 yang membuat anda nyaman untuk istirahat dengan <br> udara yang sejuk dan pemandangan alam.</p>
	  	  <p><strong>BARBERSHOP/SALON</strong></p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="bootstrap/img/cs3.jpg" class="d-block w-100" alt="..."> 
    	<div class="carousel-caption d-none d-md-block">
       <h1 class="display-4">Facilities<br><span class="font-weight-bold"> HOTELS </span></h1>
	  	  <p>Hotel Berbintang 4 yang membuat anda nyaman untuk istirahat dengan <br> udara yang sejuk dan pemandangan alam.</p>
	  	  <p><strong>SWIMMING POOL</strong></p>
	  	</div>
	 </div>
    <div class="carousel-item">
      <img src="bootstrap/img/cs4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h1 class="display-4">Facilities<br><span class="font-weight-bold"> HOTELS </span></h1>
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
			<h2>Welcome To Facilities Rich Karton Hotels</h2>
		</div>
			<hr class="my-4">
			<div class="row">
			<div class="card" style="width: 100%;">
				<div class="card-body">
				<div class="card" style="width: 100%;">
				  <div class="card-body">
				    <h5 class="card-title">1. BED ROOM </h5>
				    <p class="card-text">Mengenai Hotel Rich Karton Mempunyai beberapa ruang kamar yaitu;</p>
					<!-- COBA2 -->
				<div class="card mb-3 mt-4" style="max-width: 100%;">
				  <div class="row no-gutters">
				    <div class="col-md-6">
				      <img src="bootstrap/img/sr.jpg" class="card-img" alt="singleroom">
				    </div>
				    <div class="col-md-6">
				      <div class="card-body">
				        <h5 class="card-title">A. Single Room</h5>
				        <p class="card-text">Single room atau single studio room adalah jenis kamar hotel yang umum dimiliki setiap hotel. Single room biasanya hanya terdiri dari satu ruangan yang berisi hanya satu tempat tidur, sofa, dan kamar mandi.<br>

						Jenis kamar hotel single room cocok satu orang saja karena memang fasilitas dan kapasitas yang tidak besar. Single room juga biasanya lebih banyak diminati oleh para traveller yang bepergian sendirian, karena harganya yang lebih murah dibandingkan dengan jenis kamar hotel lainnya.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="card mb-3 mt-4S" style="max-width: 100%;">
				  <div class="row no-gutters">
				    <div class="col-md-6">
				      <img src="bootstrap/img/tr.jpg" class="card-img" alt="Doubleroom">
				    </div>
				    <div class="col-md-6">
				      <div class="card-body">
				        <h5 class="card-title">B. Twin Room</h5>
				        <p class="card-text">Jenis kamar hotel twin room memiliki dua buah tempat tidur yang biasanya terpisah dan masing-masing berukuran single. Namun dua tempat tidur ini dapat disatukan dan diletakan berdampingan sesuai dengan keinginan pemesan kamar hotel. Twin room biasanya digunakan untuk pasangan suami istri, atau saudara, hingga teman yang menginap bersama.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="card mb-3 mt-4S" style="max-width: 100%;">
				  <div class="row no-gutters">
				    <div class="col-md-6">
				      <img src="bootstrap/img/dr.jpg" class="card-img" alt="Doubleroom">
				    </div>
				    <div class="col-md-6">
				      <div class="card-body">
				        <h5 class="card-title">C. Twin Room</h5>
				        <p class="card-text">Kamar hotel jenis double room memiliki tempat tidur berukuran besar yang muat untuk dua orang. Double room lebih cocok digunakan untuk pasangan suami istri yang sedang berbulan madu atau pasangan suami istri yang belum memiliki anak.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>
				 </div>
				</div>
				<!-- COBA2 -->
			 <div class="card mb-3 mt-4" style="width:700px;">
			  <img src="bootstrap/img/cs4.jpg" align="center" class="card-img-top" alt="#">
			  <div class="card-body">
			    <h5 class="card-title">2. RESTAURANT</h5>
			    <p class="card-text">Pada umumnya, di dalam hotel terdapat lebih dari 1 tempat makan. Ada restoran utama, ada pula café atau lounge. Restoran di dalam hotel merupakan salah satu fasilitas yang sering diburu, baik oleh tamu hotel, maupun tamu yang tidak menginap di hotel tersebut. Jenis makanan yang beragam, dapat makan sepuasnya, serta pelayanan yang memuaskan menjadi daya tarik makan di hotel. Selain jam makan utama, Anda juga dapat menikmati waktu sore dengan menghabiskan waktu di café atau lounge dengan diiringi oleh live music. Misalnya di Bandung, terdapat beberapa hotel bintang lima yang menyediakan fasilitas afternoon tea, di mana Anda dapat menikmati jajanan Indonesia sembari minum kopi atau teh dan melihat matahari terbenam. Bagi Anda penghuni hotel, Anda tidak perlu membayar ekstra untuk bersantap sarapan di hotel. Tetapi jika pemesanan Anda tidak termasuk dengan sarapan atau Anda tidak menghuni di hotel, maka Anda harus membayar.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  </div>
				</div>

				<div class="card mb-3 mt-4" style="width:700px;">
			  <img src="bootstrap/img/cs3.jpg" class="card-img-top" alt="#">
			  <div class="card-body">
			    <h5 class="card-title">3. SWIMMING POOL</h5>
			    <p class="card-text">Salah satu fasilitas yang paling diburu tamu hotel adalah kolam renang. Fasilitas ini bersifat bonus. Jadi bagi Anda penghuni hotel, Anda tidak perlu mengeluarkan biaya ekstra untuk fasilitas tersebut. Hotel pun berlomba untuk memberikan fasilitas kolam renang yang beragam. Ada yang menawarkan fasilitas kolam renang infinity, ada yang indoor, ada pula yang outdoor. Selain itu, kolam renang yang disediakan di hotel juga dirancang untuk menghabiskan waktu bersama keluarga karena adanya kolam renang khusus anak-anak.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  </div>
				</div>

				<div class="card mb-3 mt-4" style="width:700px;">
			  <img src="bootstrap/img/fitnes.jpg" class="card-img-top" alt="#">
			  <div class="card-body">
			    <h5 class="card-title">4. FITNESS CENTER</h5>
			    <p class="card-text">Kegiatan olahraga di hotel bukan hanya berenang, tetapi Anda dapat menggunakan alat-alat kebugaran yang disediakan di fitness center.

				Selain bersantai, Anda juga dapat memelihara kesehatan. Apalagi jika Anda sedang dalam perjalanan bisnis yang jadwalnya padat.

				Fasilitas olahraga yang disediakan hotel tidak sampai di situ. Bahkan, ada beberapa hotel yang menyediakan pelatih olahraga khusus. Ada pula yang menyediakan kelas olahraga setiap pagi atau sore.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  </div>
				</div>
				
				<div class="card mb-3 mt-4" style="width:700px;">
			  <img src="bootstrap/img/tv.jpg" class="card-img-top" alt="#">
			  <div class="card-body">
			    <h5 class="card-title">5. TV PREMIUM</h5>
			    <p class="card-text">Hotel adalah tempat akomodasi, oleh karena itu, fasilitas yang disediakan di dalam kamar tentu harus yang berkualitas. Pertama, matras dan bedding yang diberikan tentu harus memberikan kesan nyaman bagi yang ingin beristirahat. Kedua adalah saluran TV yang diberikan. Pada hotel, terutama hotel berbintang, biasanya tidak hanya menyediakan saluran TV lokal tetapi juga saluran TV internasional. Bahkan ada beberapa hotel yang menyediakan fasilitas permainan dengan TV atau memutar film-film bioskop. Jika Anda bingung ingin melakukan apa di hotel, Anda dapat menonton televisi sembari menikmati empuknya kasur yang disediakan.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  </div>
				</div>

			<div class="card mb-3 mt-4" style="width:700px;">
			  <img src="bootstrap/img/kmndi.jpg" class="card-img-top" alt="#">
			  <div class="card-body">
			    <h5 class="card-title">6. BATHUB</h5>
			    <p class="card-text">Tidak setiap rumah memiliki fasilitas bathtub, tetapi kebanyakan hotel biasanya menyediakan bathtub. Jika Anda mengincar fasilitas bathtub di dalam kamar, maka Anda harus memastikan ke pihak hotel bahwa kamar yang Anda pesan menyediakan fasilitas ini. Berendam air hangat sembari menyantap makanan kecil dan menikmati alunan musik adalah aktivitas yang sangat menyegarkan. Memanjakan diri di hotel sembari menikmati waktu senggang tentu sangat menyenangkan, apalagi jika fasilitas tersebut tidak ada di rumah sendiri.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  </div>
				</div>

				<div class="card mb-3 mt-4" style="width:700px;">
			  <img src="bootstrap/img/bg.jpg" class="card-img-top" alt="#">
			  <div class="card-body">
			    <h5 class="card-title">7. FREE INTERNET</h5>
			    <p class="card-text">Penghuni hotel akan diberikan fasilitas internet gratis. Internet yang berkecepatan tinggi ini biasanya digunakan untuk mengurus pekerjaan atau hanya digunakan untuk hiburan. Karena internet yang diberikan tidak ada batasnya, Anda dapat memanfaatkannya untuk mengunduh aplikasi atau file tanpa harus khawatir dengan batas kuota.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  </div>
				</div>

				<div class="card mb-3 mt-4" style="width:700px;">
			  <img src="bootstrap/img/bg.jpg" class="card-img-top" alt="#">
			  <div class="card-body">
			    <h5 class="card-title">8. SALON</h5>
			    <p class="card-text">Berada jauh dari pusat perbelanjaan atau hiruk pikuk perkotaan dan Anda harus menghadiri acara besar di hotel? Jangan khawatir dengan tatanan wajah dan rambut Anda karena hotel juga ada yang menyediakan salon khusus. Sayangnya, salon bukanlah fasilitas gratis di dalam hotel. Baik penghuni hotel maupun pengunjung, harus membayar biaya sesuai dengan layanan yang diinginkan. Namun, sedikit uang tentu tidak masalah untuk penampilan yang prima.</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  </div>
				</div>

				<div class="card mb-3 mt-4" style="width:700px;">
			  <img src="bootstrap/img/bg.jpg" class="card-img-top" alt="#">
			  <div class="card-body">
			    <h5 class="card-title">9. MEETING ROOM</h5>
			    <p class="card-text">Ruangan meeting juga merupakan salah satu fasilitas yang dicari di hotel, terutama bagi perusahaan yang mengadakan perjalanan bisnis. Tidak hanya digunakan sebagai ruangan rapat, ruangan serbaguna juga dapat dijadikan tempat acara atau event perusahaan</p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  </div>
				</div>


				<h4>Manfaatkan Fasilitas yang Diberikan</h4>
				<p>Banyak sekali bukan fasilitas yang ditawarkan oleh hotel?<br>

				Oleh karena itu, manfaatkan fasilitas dengan maksimal. Selain itu, rawat fasilitas tersebut layaknya rumah Anda.<br>

				Jangan hanya karena ada pihak yang pasti mengelola dan merawatnya Anda jadi bertindak seenaknya.<br>

				Anda tentu tidak mau dirugikan oleh pihak hotel tersebut bukan? Maka bertindaklah sesuai dengan apa yang Anda ingin dapatkan dari orang lain.<br>

				Selamat berlibur dan semoga harimu menyenangkan!</p>
			   </div>
		    </div>
		</div>
	</div>
</div> <br> <br> <br> 


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