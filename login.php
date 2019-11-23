<?php
require_once "core/init.php";

if(isset($_POST['submit'])){
      $nama = $_POST['username'];
      $pass = $_POST['password'];
      $alamat = $_POST['alamat'];

  $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$nama' AND alamat = '$alamat' AND password = '$pass'  ");






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
        <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
        <br>
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
        <label class="checkbox">
          <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a href="register.php" class="btn btn btn-lg btn-primary btn-block">Regsiter</a>
      </form>

    </div>

  </body>
</html>
