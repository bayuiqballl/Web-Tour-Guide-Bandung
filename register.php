<?php
require_once 'functions/user.php';

if (isset($_POST["register"])){

  if (regsitrasi($_POST) > 0){
    echo "<script>
			alert('user baru berhasil ditambahkan!');
			</script>";
  }else {
    echo mysqli_error($link);
  }


}






 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Page</title>
    <link rel="stylesheet" href="view/css/bootstrap.css">
    <link rel="stylesheet" href="view/css/stylelogin.css">
  </head>
  <body>
    <div class="wrapper">
      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">Please Register</h2>
        <label for="nama">Username</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Email Address" required="" autofocus="" />
        <br>
        <label for="pass">Password</label>
        <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required=""/>
        <br>
        <label for="pass2">Re-Password</label>
        <input type="password" class="form-control" name="password2" id="pass2" placeholder="Re-Password" required=""/>
        <br>
        <label for="alamat">Address</label>
        <textarea name="alamat" id="alamat" class="form-control" rows="4" cols="40"></textarea>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Submit</button>
        <a href="login.php" class="btn btn btn-lg btn-primary btn-block">Back to Login</a>
      </form>

    </div>

  </body>
</html>
