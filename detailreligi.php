<?php

require_once "view/header.php";
require_once "core/initad.php";

$id = $_GET['id'];
$populer = query("SELECT * FROM religi WHERE id = $id")[0];

?>

<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(admin/religi/img/<?= $populer['gambar']; ?>)">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-center">
                <div class="row row-mt-15em">
                </div>
            </div>
        </div>
    </div>
</header>

<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <br><br>
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2><?= $populer['judul']; ?></h2><br><br>
                <img src="admin/religi/img/<?= $populer['gambar']; ?>" alt="" width="492px" height="290px">
            </div>
        </div>
        <div class="container">
            <p><?= $populer['isi']; ?></p>
        </div>
    </div>
</div>



<?php

require_once "view/footer.php";

?>