<?php

require_once "view/header.php";
require_once "core/initad.php";
// include_once "admin/budaya/func.php";
// pagination
$jumlahDataPerhalaman =  6;
$jumlahData =  count(query("SELECT * FROM kuliner "));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET['halaman']) ? $_GET['halaman'] : 1);
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$wisata = query("SELECT * FROM kuliner LIMIT $awalData, $jumlahDataPerhalaman");

if (isset($_POST['cari'])) {
    $wisata = cariKuliner($_POST['keyword']);
}
?>

<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(view/images/kuliner.jpg)">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-center">
                <div class="row row-mt-15em">

                    <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                        <h1>Wisata Kuliner</h1>
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>

<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Trip With Your Favourite Destination</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                <br>
                <form class="form-inline" action="" method="post">
                    <button type="submit" name="cari" class="btn btn-primary mb-2">Cari</button>
                    <div class="form-group mx-3 mb-2">
                        <label for="cari" class="sr-only">cari</label>
                        <input type="text" name="keyword" class="form-control" id="cari" size="70" placeholder="cari disini...">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <? $i = 1; ?>
            <?php foreach ($wisata as $row) : ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="admin/kuliner/img/<?= $row["gambar"]; ?>" alt="Card image cap" width="286px" height="178px">
                        <br><br>
                        <div class="card-body">
                            <h5 class="card-title"><b><?= $row["judul"]; ?></b></h5>
                            <p class="card-text"><?= excerpt($row["isi"]); ?></p>
                            <a href="detailkuliner.php?id=<?= $row['id']; ?>" class="btn btn-primary">Info Detail</a>
                        </div>
                    </div>
                </div>
                <? $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <br><br>
    <div class="pagination col-md-11 col-md-offset-2 text-center gtco-heading">
        <nav aria-label="Page navigation example">
            <ul class="pagination ">
                <?php if ($halamanAktif > 1) : ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>">Previous</a></li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                    <?php if ($i == $halamanAktif) : ?>
                        <li class="disabled"><a href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
                    <?php else : ?>
                        <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($halamanAktif < $jumlahHalaman) : ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>">Next</a></li>
                <?php endif; ?>

            </ul>
        </nav>
    </div>
</div>



<?php

require_once "view/footer.php";

?>