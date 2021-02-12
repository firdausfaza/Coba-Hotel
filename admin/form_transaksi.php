<?php 
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php" );

  exit;  
} 
require 'conn.php';

if (isset($_POST["submit"])) {

 if (tambahtransaksi($_POST)>0) {
      echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'table_transaksi.php';
            </script>"; 
    }
    else{
     echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'table_transaksi.php';
            </script>"; 
    }

}
 ?>
<!doctype html>
<html lang="en">
  <head>
  <style type="text/css">
  nav p{
    color: #fff;


  }

  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- FONT AWESOMWE -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>ADMIN RKH</title>
    <!-- datetimepicker -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/ilmudetil.css">
     <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css"/>
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/moment-with-locales.js"></script>
     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/bootstrap-datetimepicker.js"></script>

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
   			
   			<li class="active">
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
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-user"></i> <?php echo strtoupper($_SESSION["nameuser"]); ?><span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
  </div>
</nav>
  	
  	
  	<div class="isiadmin">
  	<h3>Customers Booking</h3> <br><br>
    
<div class="card">
  <div class="card-body">
    <form action="" method="post">
    
        <div class="form-row">
          <div class="form-group col-md-5">
            <label for="name">Nama Anda</label>
            <input type="text" name="namacust" class="form-control" id="name" >
          </div>
          <div class="form-group col-md-2">
            <label for="nmkmr">Nama Kamar</label>
            <select name="nmkmr" id="nmkmr" class="form-control" onchange='changeValue(this.value)' required >  
                          <option selected>Choose..</option>
                          <?php   
                          $query = mysqli_query($koneksi, "SELECT * FROM dt_room ORDER BY nokamar, kodeclass asc");  
                          $result = mysqli_query($koneksi, "SELECT * FROM dt_room");  
                          $a          = "var roomhotel = new Array();\n;";
                          $b          = "var harga = new Array();\n;";    
                          while ($row = mysqli_fetch_array($result)) {  
                               echo '<option name="nokamar,kodeclass" value="'.$row['nokamar'].'">' . $row['nokamar'].'-',$row['kodeclass'] . '</option>';   

                          $a .= "roomhotel['" . $row['nokamar'] . "'] = {roomhotel:'" . addslashes($row['roomhotel'])."'};\n"; 
                          $b .= "harga['" . $row['nokamar'] . "'] = {harga:'" . addslashes($row['harga'])."'};\n";  
                          } 
                          ?>   
            </select>
          </div>

          <div class="form-group col-md-5">
            <label for="roomhotel">Class</label>
            <input type="text" placeholder="ClassHotel" name="roomhotel" class="form-control" id="roomhotel" readonly>
          </div>

        </div>

        <div class="form-row">

          <div class="form-group col-md-4">
     <label>Check In</label>
     <div class="input-group date" id="tgl1">
      <input type="text" class="form-control" name="tgl1" /> 
       <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
     </div>
    </div>

    <div class="form-group col-md-4">
     <label>Check out</label>
     <div class="input-group date" id="tgl2" >
      <input type="text" class="form-control" name="tgl2" /> 
       <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
     </div>
     </div>
     <div class="form-group col-md-2">
          <label for="Selisih">Total Hari</label>
          <input type="text" placeholder="Day a Night" name="Selisih" class="form-control" id="Selisih" onchange="sum()" readonly>
        </div>

         <div class="form-group col-md-2">
            <label for="bed">Add Bed</label>
            <select id="bed" onchange="sum()" name="bed" class="form-control">
              <option selected>Choose..</option>
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>

        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="SubTotal">Harga Kamar</label>
            <input type="text" class="form-control" id="harga" name="hargakmr" placeholder="0" onchange="sum()" readonly>
          </div>

          <div class="form-group col-md-6">
            <label for="ttlharga">Total Harga</label>
            <input type="text" name="ttlharga" id="ttlharga" class="form-control" placeholder="0" readonly>
          </div>
        </div><br>

        <div class="form-row">
          <div class="form-group col-md-12">
          <button type="submit" name="submit" class="btn btn-warning btn-block">SUBMIT</button>
          </div>
        </div>
        <script type="text/javascript">  
          // Ototmatis input combo box dari db
          <?php echo $a;
                echo $b;
                ?>  
             function changeValue(id){  
              document.getElementById('roomhotel').value = roomhotel[id].roomhotel;
              document.getElementById('harga').value = harga[id].harga;    
               };  
          </script>
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
    // sidebar
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>
    <br><br><br><br><br><br><br>

    <script type="text/javascript">
    // function penanggalan otomatis
        $(function() { 
          $('#tgl1').datetimepicker({
           locale:'id',
           format:'DD MMMM YYYY'
           });
           
          $('#tgl2').datetimepicker({
           useCurrent: false,
           locale:'id',
           format:'DD MMMM YYYY'
           });
           
           $('#tgl1').on("dp.change", function(e) {
            $('#tgl2').data("DateTimePicker").minDate(e.date);
          });
          
           $('#tgl2').on("dp.change", function(e) {
            $('#tgl1').data("DateTimePicker").maxDate(e.date);
              CalcDiff()
           });
          
        });

        function CalcDiff(){
        var a=$('#tgl1').data("DateTimePicker").date();
        var b=$('#tgl2').data("DateTimePicker").date();
            var timeDiff=0
             if (b) {
                    timeDiff = (b - a) / 1000;
                }
         
         $('#Selisih').val(Math.floor(timeDiff/(86400)))   
      }
    </script>
    
    
    <script type="text/javascript">
    // Total harga otomatis
  function sum() {
      var a = 50000 * document.getElementById('bed').value;
      var b = document.getElementById('harga').value;
      var c = document.getElementById('Selisih').value;
      var result = parseFloat(b) * parseFloat(c) + parseFloat(a);
      if (!isNaN(result)) {
         document.getElementById('ttlharga').value = result;
      }
}
    
    </script>
  </body>
</html>