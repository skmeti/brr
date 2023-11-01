<?php
require 'includes/obrada.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blue Adria Rent</title>
	<meta name="robots" content="noindex">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#ffffff">
	<meta charset="utf-8">
	<!--<meta http-equiv="Content-Security-Policy" content="default-src 'none';
        script-src 'self';
        style-src 'self' https://fonts.googleapis.com;
        img-src 'self' https: data:;
        connect-src 'self' https:;
        font-src 'self' https:;
        object-src 'none';
        media-src 'self' https:;
        form-action 'self';
        frame-src 'self' https://maps.google.com/ https://www.google.com/ https:;
        frame-ancestors 'self';
        base-uri 'none';
        upgrade-insecure-requests;
        block-all-mixed-content;"> -->
	<script src="https://cdn.jsdelivr.net/npm/appwrite@13.0.0"></script>
<script>
    const { Client } = Appwrite;
	const client = new Client();

client
    .setEndpoint('https://cloud.appwrite.io/v1')
    .setProject('6542b1556cc9d5f17f1b');
</script>

	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="/assets/js/form.js"></script>
	<script src="https://unpkg.com/popper.js@1.15.0/dist/umd/popper.min.js"></script>
	<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
	<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
	<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
	<script src="/assets/js/form.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="/assets/css/extra.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">

	<!--<link rel="apple-touch-icon" sizes="180x180" href="images/fav/apple-touch-icon.png">
	<link rel="shortcut icon" type="image/png" href="/images/fav/favicon-32x32.png">
	<link rel="mask-icon" href="/images/fav/safari-pinned-tab.svg" color="#5bbad5">
	<span class="sr-only">(current)</span>-->
</head>

<style>


</style>

<script>
//Add class scrolled to navbar
$(function() {
    var header = $(".navbar");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });
  
});

document.addEventListener('DOMContentLoaded', function() {
  AOS.init();
});

</script>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-semitransp">
			<div class="row justify-content-end fixed-top" id="tiny-nav">
				<a class="pr-1 pl-1" href="https://en.blueadriarent.com"><img src="/images/icons/union-jack_40x21.jpg"</a>
				<a class="pr-1 pl-1" href="https://hr.blueadriarent.com"><img src="/images/icons/croatia_40x21.png"</a>
				<a class="pr-1 pl-1" href="https://www.facebook.com/Blue-Adria-Rent-131163677462815/"><i class="fab fa-facebook"></i></a>
				<a class="pr-1 pl-1" href="https://www.instagram.com/blueadriarent/"><i class="fab fa-instagram"></i></a>
				<a class="pr-1 pl-1" href="#"><i class="fas fa-phone"></i>+385-091-254-8869</a>
			</div>
        <a class="navbar-brand pt-3" href="/home"><img class="logoimg" src="/images/logo.png" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
			  <ul class="navbar-nav ml-auto">
				<li class="nav-item" id="nav-1">
				  <a class="nav-link" href="/home">HOME</a>
				</li>
				<li class="nav-item" id="nav-2">
				  <a class="nav-link" href="/rent-a-boat">RENT-A-BOAT</a>
				</li>
				<li class="nav-item" id="nav-3">
				  <a class="nav-link" href="/fishing">FISHING</a>
				</li>
				<li class="nav-item" id="nav-4">
				  <a class="nav-link" href="/transfers-and-excursions">TRANSFERS AND EXCURSIONS</a>
				</li>
				<li class="nav-item" id="nav-5">
				  <a class="nav-link" href="/destinations">DESTINATIONS</a>
				</li>
				<li class="nav-item" id="nav-8">
				  <a class="nav-link" href="/pricing">PRICING</a>
				</li>
				<li class="nav-item" id="nav-6">
				  <a class="nav-link" href="/contact">CONTACT</a>
				</li>
				<li class="nav-item" id="nav-7">
				  <a class="nav-link" href="/about">ABOUT</a>
				</li>
			  </ul>
			</div>
      </nav>
    </header>

	<main role="main">
		
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner bg-info" role="listbox">
				<div class="carousel-item active">
					<div class="d-flex align-items-center justify-content-center vh-100">
						<img class="vh-100 vw-100" src="/images/slider/zadar_slider.jpg" alt="City of Zadar" />
							<div class="carousel-caption">
								<h1 class="p-2 ml-auto mr-auto">Blue Adria Rent - Boat Rentals, Excursions & More</h1>
								<p class="p-2 ml-auto mr-auto">The best destinations at the lowest prices</p>
								<a class="ml-auto mr-auto mb-5 btn btn-lg btn-primary" href="/contact" role="button">Book now</a>
							</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="d-flex align-items-center justify-content-center vh-100">
						<img class="vh-100 vw-100" src="/images/slider/kornati_slider2.jpg" alt="Kornati">
						  <div class="carousel-caption">
							<h1 class="ml-auto mr-auto p-2">A wide selection of destinations</h1>
							<p class="ml-auto mr-auto p-2">Check out what we have to offer:</p>
							<a class="ml-auto mr-auto mb-5 btn btn-lg btn-primary" href="/destinations" role="button">Browse</a>
						  </div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="d-flex align-items-center justify-content-center vh-100">
						<img class="vh-100 vw-100" src="/images/slider/sea_slider3.jpg" alt="Boat">
						  <div class="carousel-caption">
							<h1 class="ml-auto mr-auto p-2">Thinking about being the skipper yourself?</h1>
							<p class="ml-auto mr-auto p-2">Meet our fleet of well maintained boats!</p>
							<a class="ml-auto mr-auto mb-5 btn btn-lg btn-primary" href="/contact" role="button">Browse</a>
						  </div>
						</div>
					</div>
				</div>
				<img id="carousel-arrow" src="/images/icons/double-angle-down-50.png" />
			</div>
	<div id="main-cont" class="container-fluid p-0">

<?php include ("pages/".$stranica.".php"); ?>

	<!-- Footer -->
		<footer class="page-footer font-small bg-dark pt-4">

		  <div class="container-fluid text-white text-md-left">

			<div class="row m-0">

			  <div class="col-md-6 mt-md-0 mt-3 text-center">

				<h5 class="text-uppercase font-weight-bold">LOCATION</h5>
				<p></p>
			  </div>

			  <hr class="clearfix w-100 d-md-none pb-3">

			  <div class="col-md-6 mb-md-0 mb-3 text-center">

				<h5 class="text-uppercase font-weight-bold">CONTACT</h5>
				<p><i class="fas fa-phone pr-2"></i>+385-091-254-8869</p>
				<p><i class="fas fa-thumbtack pr-2"></i>Prijeških Lavandijera 11</p>
				<p><i class="fas fa-envelope pr-2"></i>info@blueadriarent.com</p>
				<p><i class="fab fa-wpforms pr-2"></i><a class="text-white " href="/contact"><b>Contact Form</b></a></p>

			  </div>
			</div>
		  </div>

		  <!-- Footer's footer -->
		<div class="row m-0">
			<div class="pl-3 pb-1 text-white">
				<p>© 2019 blueadriarent.com - Created by: <a class="text-white" href="https://spectral-media.com">Spectral Media - Web design</a></p>
			</div>
			<div class="ml-auto pr-3 pb-1 text-white">
				<a class="text-white" href="/terms-of-service">Terms of Service</a>|
				<a class="text-white" href="/privacy-policy">Privacy Policy</a>
			</div>
		</div>
		</footer>
	</div>
	</main>
</body>
</html>
