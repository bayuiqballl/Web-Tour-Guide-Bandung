<?php
require_once 'view/header.php';
require_once "view/back.php";
require_once 'func.php';

if (isset($_POST["submit"])) {
    if (add($_POST) > 0) {
        echo "<script>
            alert('Data ditambahkan!');
            document.location.href = 'budaya.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambahkan!');
            document.location.href = 'add.php';
        </script>
        ";
    }
}




?>
<div class="container mt-3">
    <div class="row mb-3">
        <div class="col-lg-6">
            <h1>Add Data</h1>
            <br>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul:</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Wajib diisi!" required>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="gambar">Upload gambar:</label>
                        <input type="file" class="form-control-file" name="gambar" id="gambar" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="isi">Isi artikel:</label>
                    <br>
                    <textarea class="form-control" name="isi" id="isi" rows="3" required></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">
                    Submit Data
                </button>
            </form>
        </div>
    </div>
</div>