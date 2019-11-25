<?php

require_once 'db.php';


function regsitrasi($data){
  global $link;

  $nama = strtolower(stripslashes($data["username"]));
  $pass = mysqli_real_escape_string($link,$data["password"]);
  $pass2 = mysqli_real_escape_string($link,$data["password2"]);
  $alamat = htmlspecialchars($data["alamat"]);

  $result = mysqli_query($link, "SELECT username FROM user WHERE username = '$nama'");

  if (mysqli_fetch_assoc($result)){
    echo "<script>
    alert('username sudah ada');
    </script>";
    return false;
  }

  if($pass !== $pass2){
    echo "<script>
    alert('konfirmasi password salah');
    </script>";
    return false;
  }

  $pass = password_hash($pass, PASSWORD_DEFAULT);

  mysqli_query($link,"INSERT INTO user VALUES('','$nama', '$pass','$alamat')");

  return mysqli_affected_rows($link);


}
