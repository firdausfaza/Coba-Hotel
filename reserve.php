<?php 
session_start();

if (!isset($_SESSION["login"])) {
	echo "<script> alert('Anda belum login, silahkan login untuk Booking hotel.')
			document.location.href = 'login.php' </script> 
	 ";
}
require 'conn/koneksi.php';

if (isset($_POST["submit"])) { 
	
	if (tambahtr($_POST)>0) {
		echo "<script> alert('Berhasil Booking Data anda disimpan!');
						document.location.href = 'faktur.php';
						 </script>";
	}
	else{
		echo "<script> alert('Data Booking gagal disimpan, Silahkan Ulangi
							 pengisian data anda!')
							 document.location.href = 'reserve.php';</script>;";
	}
}

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
     <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css"/>
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
	        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>  <?php echo strtoupper($_SESSION["nama"]); ?></a>
	        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          				<a class="dropdown-item" href="regist.php"><i class="fas fa-user-plus"></i>  REGISTER</a>
	          				<div class="dropdown-divider"></div>
	          				<a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i>  LOGOUT</a>
	       				</div>
	       		
    		</ul>
  		</div>
		</div>
	</nav>

<!-- CONTENT -->
<div class="konten">
	<div class="container">
		<div class="text-center">
			<h2>Booking Now For The Best Rest of Your Life.</h2>
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
    <form action="" method="post">
        <div class="form-row">
          <div class="form-group col-md-5">
            <label for="name">Nama Anda</label>
            <input type="text" name="namacust" class="form-control" id="name" value="<?php echo strtoupper($_SESSION["nama"]); ?>" readonly>
          </div>
          <div class="form-group col-md-2">
            <label for="nmkmr">Nama Kamar</label>
            <select name="nmkmr" id="nmkmr" class="form-control" onchange='changeValue(this.value)' required >  
                          <option selected>Choose..</option>
                          <?php   
                          $query = mysqli_query($conn, "SELECT * FROM dt_room ORDER BY nokamar, kodeclass asc");  
                          $result = mysqli_query($conn, "SELECT * FROM dt_room");  
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
		</div>
	</div>
</div>
	<br><br><br>
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
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- end of js sc bs -->

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