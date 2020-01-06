<?php
session_start();
require_once "../core/init.php";

if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  $result = mysqli_query($link, "SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  if ($key === hash('shas256', $row['username'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_COOKIE['login'])) {
  if ($_COOKIE['login'] == 'true') {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION['login'])) {
  echo "<script>
  document.location.href = 'index.php';
  </script>";
  exit;
}

if (isset($_POST["login"])) {
  $nama = $_POST['username'];
  $pass = $_POST['password'];


  $result = mysqli_query($link, "SELECT * FROM user WHERE username = '$nama' ");


  if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    if (password_verify($pass, $row["password"])) {
      // set session
      $_SESSION["login"] = true;
      // cek remember 
      if (isset($_POST['remember'])) {
        // buat cookie
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
      }
      header("Location: index.php");
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

  <link rel="stylesheet" href="../view/css/bootstrap.css">
  <link rel="stylesheet" href="../view/css/stylelogin.css">
</head>

<body>
  <div class="wrapper">
    <form action="" method="post" class="form-signin">
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Username" id="nama" required="" autofocus="" />
      <br>
      <input type="password" class="form-control" name="password" placeholder="Password" id="pass" required="" />
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="remember"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
      <a href="../register.php" class="btn btn btn-lg btn-primary btn-block">Regsiter</a>
      <br>
      <?php if (isset($error)) : ?>
        <div class="alert alert-danger " role="alert">
          <p>username dan password salah!</p>
        </div>
      <?php endif; ?>


    </form>

  </div>

</body>

</html>