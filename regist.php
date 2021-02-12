<?php 
session_start();

require 'conn/koneksi.php';


if (isset($_POST["registuser"])) {
  if (registuser($_POST)>0) {
      echo "<script>alert('User Baru Berhasil Ditambahkan');
            document.location.href = 'login.php';
          </script>";
   }

   else{ 
    echo mysqli_error($conn);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- font awesome --> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Registrasi Account</title>
  </head>
  <body background="bootstrap/img/bgrs2.jpg">

    <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-logreg ">
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
              <a class="nav-link" href="#">FACILITIES</a>
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


  <!-- FORM LOGIN -->
<div class="regist">
<div class="container">
  <h4 class="text-center">FORM REGISTRASI</h4>
  <hr>

    <form action="" method="post">
      <div class="form-group">
        <label>Full Name</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>          
          <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap Anda">
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
        <label>Email</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-at"></i></div>
          </div>
          <input type="email" class="form-control" name="email" placeholder="Masukan Email Anda">
          </div>
        </div>

           <div class="form-group col-md-6">
          <label>No. Handphone</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-phone"></i></div>
          </div>          
          <input type="text" class="form-control" name="hp" placeholder="Masukan No Telp Anda">
        </div>
        </div>
        </div>

        <label>Address</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
          </div>          
          <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Anda"></textarea> 
        </div>

        <label>Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
          </div>          
          <input type="password" class="form-control" name="pw" placeholder="Masukan Password Anda">
        </div>

        <label>Re-Type Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
          </div>          
          <input type="password" class="form-control" name="pw2" placeholder="Masukan Password Anda">
        </div><br>

          <center>
            <button type="submit" name="registuser" class="btn btn-primary">REGIST</button>
          </center>
      </div>

    </form>
</div>  
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>