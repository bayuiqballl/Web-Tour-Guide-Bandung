<?php
require_once "core/init.php";

if(isset($_POST["login"])){
      $nama = $_POST['username'];
      $pass = $_POST['password'];


  $result = mysqli_query($link, "SELECT * FROM user WHERE username = '$nama' ");


   if( mysqli_num_rows($result) === 1) {

     $row = mysqli_fetch_assoc($result);
     if ( password_verify($pass, $row["password"]) ){
        header("Location: admin/index.php");
        exit;
      }


   }


$error = true;



}



 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>

    <link rel="stylesheet" href="view/css/bootstrap.css">
    <link rel="stylesheet" href="view/css/stylelogin.css">
  </head>
  <body>
    <div class="wrapper">
      <form action="" method="post" class="form-signin">
        <h2 class="form-signin-heading">Please login</h2>
        <input type="text" class="form-control" name="username" placeholder="Email Address" id="nama" required="" autofocus="" />
        <br>
        <input type="password" class="form-control" name="password" placeholder="Password" id="pass" required=""/>
        <label class="checkbox">
          <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
        <a href="register.php" class="btn btn btn-lg btn-primary btn-block">Regsiter</a>
        <br>
        <?php if(isset($error)) : ?>
          <div class="alert alert-danger " role="alert">
               <p>username dan password salah!</p>
          </div>
        <?php endif; ?>


      </form>

    </div>

  </body>
</html>
