<?php 
session_start();



if (!isset($_SESSION["login"])) {
  header("Location: login.php" );
  exit;
}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- FONT AWESOMWE -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- datetimepicker -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/ilmudetil.css">
     <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css"/>
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/moment-with-locales.js"></script>
     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/bootstrap-datetimepicker.js"></script>

    <title>ADMIN RKH</title>
  </head>
  <body>
   

   <div class="wrapper">
   	<nav id="sidebar">
   		<div class="sidebar-header">
   			<h3>RICH KARTON HOTEL</h3>
        <button class="btn btn-dark btn-sm"><a href="logout.php" style="color:#fff; text-decoration: none; float: right; margin-right: 5px;"><b>&#8592; LOGOUT</b></a></button>
   		</div>
   		
   		
   		<ul class="list-unstyled components">
   			<p>MAIN NAVIGATION</p>
   			<li class="active">
   				<a href="index.html">BERANDA</a>
   			</li>
   			
   			<li>
   				<a href="table_transaksi.php">TRANSAKSI</a>
   			</li>
   			<li>
   				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">DATA MASTER</a>
   				<ul class="collapse list-unstyled" id="pageSubmenu">
   					<li>
   						<a href="table_member.php">MEMBER</a>
   					</li>
   					<li>
   						<a href="table_regis.php"> ADMIN ACCOUNT</a>
   					</li>
            <li>
              <a href="table_clsinput.php">CLASS HOTELS</a>
            </li>
            <li>
              <a href="table_cls.php"> READY OF ROOM</a>
            </li>
   				</ul> 
   			</li>
        <li>
          <a href="checkin.php">VALID CHECKIN</a>
        </li>
        <li>
          <a href="visitors.php">VISITORS</a>
        </li>
   			<li>
   				<a href="report.php">REPORT</a>
   			</li>
   		</ul>
      

   	</nav>
   	
   	<div class="content">
   		<nav class="navbar navbar-expand-lg navbar-light bg-light">
   		
   		<button type="button" id="sidebarCollapse" class="btn btn-dark">
   			<i class="fa fa-align-justify"></i> <span>Hide Sidebar</span>
   		</button>
   		
  <!--<a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-user"></i> <?php echo strtoupper($_SESSION["nameuser"]); ?> <span class="sr-only">(current)</span></a>
      </li>

    </ul>
  </div>
</nav>
  	
  	
  	<div class="isiadmin">
  	<h2 class="text-center">Be Best Serve For Client!</h2> <br><br>

<div class="row">
    <div class="col-md-3">
      <?php
              include "test.php";
                $queryBukuPinjam = mysqli_query($menyambung,"SELECT id FROM dt_verify");
                $jumlahBukuPinjam = mysqli_num_rows($queryBukuPinjam);
              ?>
    <div class="card text-white bg-secondary mb-3" style="max-width: 28rem; max-height: 8rem;">
      <div class="card-body">
    <h5><?php echo "$jumlahBukuPinjam"; ?></h5>
    <p >Visitors</p>
     </div>
    </div>
    </div>

  <div class="col-md-3">
    <?php
              include "test.php";
                $queryMember = mysqli_query($menyambung,"SELECT id FROM user");
                $jumlahMember = mysqli_num_rows($queryMember);
              ?>
  <div class="card text-white bg-primary mb-3" style="max-width: 28rem; max-height:8rem;">
    <div class="card-body">
      <h5 ><?php echo "<b>".$jumlahMember."</b>"; ?></h5>
      <p >Member</p>
    </div>
  </div>
</div>

  <div class="col-md-3">
  <div class="card text-white bg-success mb-3" style="max-width: 28rem; max-height: 8rem">
  <div class="card-body">
    <h5><?php echo "<b>"."Rp.".number_format($_SESSION["ttl"],0,".",  ".")."</b>"  ?></h5>
    <p>Income/Month</p>
  </div>
</div>
</div>

  <div class="col-md-3">
    <?php
              include "test.php";
                $room = mysqli_query($menyambung,"SELECT id FROM dt_room");
                $jumlahroom = mysqli_num_rows($room);
              ?>
  <div class="card text-white bg-danger mb-3" style="max-width: 28rem; max-height:8rem;">
    <div class="card-body">
      <h5 ><?php echo "<b>".$jumlahroom."</b>"; ?></h5>
      <p >Ready Rooms</p>
    </div>
  </div>
</div>
</div>
</div>
<br>
    <div class="row">
      <div class="col-lg-1">
      </div>
      <div class="col-lg-3">
        <button type="button" class="btn btn-warning btn-block btn-lg"><b><a href="form_transaksi.php" style="color:#fff; text-decoration: none;">+BOOKING</a></b></button>
      </div>
      <div class="col-lg-4">
        <button type="button" class="btn btn-warning btn-block btn-lg" ><b><a href="form_clsinput.php" style="color:#fff; text-decoration: none;">+CLASS HOTEL</a></b></button>
      </div>
      <div class="col-lg-3">
        <button type="button" class="btn btn-warning btn-block btn-lg"><a href="form_cls.php" style="color:#fff; text-decoration: none;"><b>+ROOM READY</b></a></button>
      </div>
      <div class="col-lg-1">
      </div>
    </div>
      <br><br>

      <div class="isiadmin2">
  	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  	
  	<div class="line"></div>
  	
  	
   	
   	
   	
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>
    
    
    
    
    
  </body>
</html>