<?php

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
