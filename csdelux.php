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
			<h2>Deluxe Class</h2>
		</div>
		<hr class="my-4">
	<div class="card mb-3 mt-4S" style="max-width: 100%;">
				  <div class="row no-gutters">
				    <div class="col-md-6 ">
				      <img src="bootstrap/img/dr.jpg" class="card-img" alt="Doubleroom">
				    </div>
				    <div class="col-md-6">
				      <div class="card-body">
				        <p class="card-text"><p>Berbeda dengan superior dan standar room, deluxe room di desain lebih menarik dan lebih lengkap fasilitasnya. Selain itu deluxe room juga kadang ditempatkan di area yang lebih baik dibandingkan standar dan superior room. Namun deluxe room pada beberapa hotel terkadang juga lebih rendah dari fasilitas hingga ukurannya dibandingkan jenis kamar hotel superior room. </p></p>

				        <h4>Fasilitas</h4>
						<p>
							1 Bedroom <br>
							1 Bathroom<br>
							1 Sofa<br>
							Air Conditioner<br>
							Television<br>
							2 Table<br>
							Regrigrenator<br>
							Breakfast<br>
							Wifi in Room
						</p>
				       
				      </div>
				    </div>
				  </div>
				</div>
	</div>
</div>

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