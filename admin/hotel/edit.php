<?php
session_start();

if (!isset($_SESSION['login'])) {
    echo "<script>
  document.location.href = '../login.php';
  </script>";
    exit;
}

require_once 'view/header.php';
require_once "func.php";
require_once "view/back.php";

$id = $_GET['id'];
$bdy = query("SELECT * FROM hotel WHERE id = $id")[0];


if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal diedit!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}




?>
<div class="container mt-3">
    <div class="row mb-3">
        <div class="col-lg-6">
            <h1>Edit Data</h1>
            <br>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $bdy["id"]; ?>">
                <input type="hidden" name="oldFile" value="<?= $bdy["gambar"]; ?>">
                <div class="form-group">
                    <label for="judul">Judul:</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="<?= $bdy["judul"]; ?>" required>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="gambar">Edit gambar:</label>
                        <img src="img/<?= $bdy["gambar"]; ?>" width='40'>
                        <input type="file" class="form-control-file" name="gambar" id="gambar">
                    </div>
                </div>
                <div class="form-group">
                    <label for="info">Info:</label>
                    <br>
                    <textarea class="form-control" name="info" id="info" rows="3"><?= $bdy["info"]; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="maps">Link Maps:</label>
                    <input type="text" class="form-control" name="maps" id="maps" value="<?= $bdy["maps"]; ?>" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">
                    Edit Data
                </button>
            </form>
        </div>
    </div>
</div>