<?php

require_once "view/header.php";
require_once "core/initad.php";

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



			<div class="col-lg-4 col-md-4 col-sm-6">
				<a href="view/images/img_1.jpg" class="fh5co-card-item image-popup">
					<figure>
						<div class="overlay"><i class="ti-plus"></i></div>
						<img src="view/images/img_1.jpg" alt="Image" class="img-responsive">
					</figure>
					<div class="fh5co-text">
						<h2>New York, USA</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
						<p><span class="btn btn-primary">Schedule a Trip</span></p>
					</div>
				</a>
			</div>

		</div>
	</div>
</div>

<?php
require_once "view/footer.php";
?>