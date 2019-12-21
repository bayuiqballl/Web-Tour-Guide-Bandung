<?php
require_once 'view/header.php';
?>
<div class="container mt-3">
    <div class="row mb-3">
        <div class="col-lg-6">
            <h1>Add Data</h1>
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Example label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Another label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                </div>

                <button type="button" class="btn btn-primary tombolTambahData">
                    Tambah Data Mahasiswa
                </button>
            </form>
        </div>
    </div>
</div>