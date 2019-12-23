<?php
require_once 'view/header.php';

require_once "view/back.php";
require_once "func.php";

$id = $_GET['id'];
$wst = query("SELECT * FROM religi WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'religi.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal diedit!');
            document.location.href = 'religi.php';
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
                <input type="hidden" name="id" value="<?= $wst["id"]; ?>">
                <input type="hidden" name="oldFile" value="<?= $wst["gambar"]; ?>">
                <div class="form-group">
                    <label for="judul">Judul:</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="<?= $wst["judul"]; ?>" required>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="gambar">Edit gambar:</label>
                        <img src="img/<?= $wst["gambar"]; ?>" width='40'>
                        <input type="file" class="form-control-file" name="gambar" id="gambar">
                    </div>
                </div>
                <div class="form-group">
                    <label for="isi">Isi artikel:</label>
                    <br>
                    <textarea class="form-control" name="isi" id="isi" rows="3"><?= $wst["isi"]; ?></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">
                    Edit Data
                </button>
            </form>
        </div>
    </div>
</div>