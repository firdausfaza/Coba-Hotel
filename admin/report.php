<?php 
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php" );

  exit;  
}
require 'conn.php';

$result = mysqli_query($koneksi, "SELECT * FROM dt_verify");
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
   			<li >
   				<a href="index.php">BERANDA</a>
   			</li>
   			
   			<li >
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
          <a href="visitors.php">VISITORS</a>
        </li>
   			<li class="active">
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
  	<h3>Customers Booking</h3> <br><br>
<div class="card">
  <div class="card-body">
    <div class="row">
    <div class="col-md-6">
    <h5>Customers Booking</h5>
    </div>
    <div class="col-md-6">
    <button style="" type="button" class="btn btn-warning  
    btn-sm float-right" ><b><a href="report/cetak1.php" style="color:#000; text-decoration: none;">Print Report</a></b></button><br><br>
    </div>
  </div>


<table class="table table-striped table-bordered ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Class</th>
      <th scope="col">Room</th>
      <th scope="col">CheckIn</th>
      <th scope="col">CheckOut</th>
      <th scope="col">Total Payment</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
  <?php $ttl = 0; ?>
  <?php while($row = mysqli_fetch_assoc($result)) : ?>
    <?php $ttl += $row["ttlharga"]; ?>
  <?php $harga ?>
  <?php $ttlharga = $row["ttlharga"]; ?>
    <tr>
     <th width="20px;" scope="row"><?= $i; ?></th>
      <td> <?= $row["namacust"]; ?> </td>
       <td><?= $row["roomhotel"] ?> </td>
       <td width="20px;"> <?= $row["nokamar"] ?> </td>
      <td> <?= $row["cekin"] ?> </td>
      <td> <?= $row["cekout"] ?> </td>
      <td> <?= "Rp. ". number_format($ttlharga,0,".",  ".");?> </td>
      <?php 
      $_SESSION["ttl"] = $ttl;
       ?>
    </tr>
    <?php $i++ ?>
  <?php endwhile; ?>
  <tr class="table-dark">
    <td colspan="6" style="text-align: center;" ><b>JUMLAH PEMASUKAN</b></td>
    <td colspan="3" style="text-align: center;"><b><?php echo "Rp.".number_format($ttl,0,".", "."); ?></b></td>
  </tr>
  </tbody>
</table>
    </div>

    </div>

</div>
      <br><br>

      <?php $_SESSION["visit"] = "$i" - 1;
      ?>

      <div class="isiadmin2">
  	 <p>Report disini adalah hasil dari pemasukan atau seluruh jumpah pemasukan dari hotel ini dan bisa diocetak langusng dari halaman ini untuk laporan perbulanan. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  	<div class="line"></div>
  	
  	
  	
     
  	
  	<div class="line"></div>
  	
   	</div>
   	
   	
   	
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    
    
    
  </body>
</html>