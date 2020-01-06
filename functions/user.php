<?php

require_once 'db.php';


function registrasi($data)
{
  global $link;

  $nama = strtolower(stripslashes($data["username"]));
  $pass = mysqli_real_escape_string($link, $data["password"]);
  $pass2 = mysqli_real_escape_string($link, $data["password2"]);
  $alamat = htmlspecialchars($data["alamat"]);

  $result = mysqli_query($link, "SELECT username FROM user WHERE username = '$nama'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
    alert('username sudah ada');
    </script>";
    return false;
  }

  if ($pass !== $pass2) {
    echo "<script>
    alert('konfirmasi password salah');
    </script>";
    return false;
  }

  $pass = password_hash($pass, PASSWORD_DEFAULT);

  if (!empty(trim($nama)) && !empty(trim($pass))) {
    mysqli_query($link, "INSERT INTO user VALUES('','$nama', '$pass','$alamat')");
  } else {
    echo "<script>
        alert('Data Wajib di isi!');
    </script>";
  }

  return mysqli_affected_rows($link);
}
