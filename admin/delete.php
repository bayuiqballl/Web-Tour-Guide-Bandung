<?php
session_start();

if (!isset($_SESSION['login'])) {
    echo "<script>
  document.location.href = 'login.php';
  </script>";
    exit;
}

require_once "../core/init.php";

$id = $_GET['id'];

if (delete($id) > 0) {
    echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'index.php'; 
    </script>";
} else {
    echo "<script>
    alert('Gagal dihapus');
    document.location.href = 'index.php'; 
    </script>";
}
