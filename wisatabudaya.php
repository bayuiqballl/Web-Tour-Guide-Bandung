<?php

require_once "view/header.php";
require_once "core/initad.php";
// include_once "admin/budaya/func.php";

$budaya = query("SELECT * FROM budaya");
?>

<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(view/images/budaya.jpg)">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-center">
                <div class="row row-mt-15em">

                    <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                        <h1>Wisata Budaya</h1>
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
            </div>
        </div>
        <div class="row">
            <? $i = 0; ?>
            <?php foreach ($budaya as $row) : ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="admin/img/<?= $row["gambar"]; ?>" alt="Card image cap" width="286px" height="178px">
                        <div class="card-body">
                            <h5 class="card-title"><?= '<b>' . $row["judul"]; ?></h5>
                            <p class="card-text"><?= $row["isi"]; ?></p>
                            <a href="#" class="btn btn-primary">Info Detail</a>
                        </div>
                    </div>
                </div>
                <? $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>



    <?php

    require_once "view/footer.php";

    ?>