<?php
session_start();  

if (isset($_SESSION["login"])) {
 header("Location: index.php");
 exit;
}

require 'conn.php'; 

if (isset($_POST["login"])) {
  
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM useradmin WHERE username ='$username'"); 

  // panggil username
  $_SESSION["nameuser"] = "$username";

  // cekusername
   if (mysqli_num_rows($result) === 1 ) {

     // cekpw
   $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"]) ) {

        // set session
        $_SESSION["login"]=true;
        }

       header("Location: table_transaksi.php");
       exit;
    }
    else {
      echo "<script>alert ('Username dan Password Salah!') </script>";

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
      <link rel="stylesheet" href="style.css">

 <!-- FONT AWESOMWE -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Login Admin</title>
  </head>
  <body >

  <!-- FORM LOGIN -->

<div class="login">

<div class="container">
<div class="container2">
  <img src="img/rkh.png">

    <form action="" method="post">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>          
          <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username Anda">
        </div><br>

        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
          </div>
          <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password Anda">
          </div><br>
          <center>
            <button type="submit" class="btn btn-warning btn-block" name="login">LOGIN</button>
          </center>
      </div>
    </form>
    </div>
</div>  
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>