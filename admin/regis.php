<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php" );

  exit; 
}
require'conn.php';

if (isset($_POST["register"])) {
   if (registrasi($_POST)>0) {
     echo "<script>alert('User Baru Berhasil Ditambahkan');
            document.location.href = 'table_regis.php';
          </script>";
   }

   else{ 
    echo mysqli_error($koneksi);
   }
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

    <title>Register Admin</title>
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
   			<li >
   				<a href="index.php">BERANDA</a>
   			</li>
   			
   			<li>
   				<a href="table_transaksi.php">TRANSAKSI</a>
   			</li>
   			<li class="active">
   				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">DATA MASTER</a>
   				<ul class="collapse list-unstyled" id="pageSubmenu">
   					<li>
   						<a href="table_member.php">MEMBER</a>
   					</li>
   					<li class="active">
   						<a href="table_regis.php"> ADMIN ACCOUNT</a>
   					</li>
   					<li>
   						<a href="table_clsinput.php"> CLASS OF ROOM</a>
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
  	<h3>Add Admin</h3> <br><br>
<div class="card">
  <div class="card-body">
    <form action="" method="post">
            <label for="username"><b>Username</b></label>
            <input type="text" name="username"class="form-control" id="name" placeholder="Your Username" ><br>
          
        
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Your Password"><br>
                    
        
            <label for="password2"><b>Confirm Password</b></label>
            <input type="password" name="password2"class="form-control" id="name" placeholder="Repeat Password"><br>
          
           <label for="status"><b>Status Admin</b></label>
           <select name="status" class="form-control" id="status" >
            <option selected>Choose..</option>
            <option>Active</option>
            <option>Passive</option>
            </select>
           <br>

        <div class="form-row">
          <div class="form-group col-md-12">
          <button type="submit" name="register" class="btn btn-warning btn-block">REGISTER</button>
          </div>
        </div>
      </form>

    </div>
    </div>
</div>
      <br><br>

      <div class="isiadmin2">
  	 <p>Sedikit Informasi untuk pada admin, aplikasi di page ini berguna untuk menambahkan custemers yang ingin membooking hotel langusng dari hotel tidfak lewat aplikasi berbasis web yang telah disediakan, dan apabila custemers telah melakukan booking melelui aplikasi, admin hanya buuth untuk memeberikan kunci ruangan yang sudah tertera pada bukti r3eservasi custemrs yang telah memberikan buktinya.</p>
     
  	<div class="line"></div>
  	
  	
  	
     
  	
  	<div class="line"></div>
  	
   	</div>
   	
   	
   	
   
    

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
    <br><br><br><br><br><br><br>
    
    
    
    
  </body>
</html>