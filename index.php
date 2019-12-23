<?php

require_once "view/header.php";
require_once "core/initad.php";
$wisata = query("SELECT * FROM wisatapopuler");



?>

<div class="gtco-loader"></div>

<div id="page">
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(view/images/bandung.png)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Rencanakan wisata anda di Bandung!</h1>
							<br>
							<div class="form-group">
								<form class="" action="index.html" method="post">
									<div class="col-sm-16">
										<input type="text" class="form-control" id="search" placeholder="search...	">
									</div>
								</form>
							</div>
						</div>


					</div>
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
				<h2>Most Popular Destination</h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row">
			<? $i = 0; ?>
			<?php foreach ($wisata as $row) : ?>
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
</div>

<?php
require_once "view/footer.php";
?>