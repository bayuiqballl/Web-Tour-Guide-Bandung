<?php

require_once "func.php";

$id = $_GET['id'];

if (delete($id) > 0) {
    echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'budaya.php'; 
    </script>";
} else {
    echo "<script>
    alert('Gagal dihapus');
    document.location.href = 'budaya.php'; 
    </script>";
}
