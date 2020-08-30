<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>SPK Beasiswa</title>

	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>

	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

	<!-- Third party plugin CSS-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />

	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet" />

</head>

<body id="page-top">

	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">SPK Beasiswa</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto my-2 my-lg-0">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Hasil Beasiswa</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Masthead-->
	<header class="masthead">
		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center text-center">
				<div class="col-lg-10 align-self-end">
					<h1 class="text-uppercase text-white font-weight-bold">Sistem Pendukung Keputusan Seleksi Beasiswa
					</h1>
					<hr class="divider my-4" />
				</div>
				<div class="col-lg-8 align-self-baseline">
					<p class="text-white-75 font-weight-light mb-5">Sekolah Tinggi Ilmu Komputer (STIKOM) Yos Sudarso Purwokerto
					</p>
					<a class="btn btn-primary btn-xl js-scroll-trigger" href="<?= base_url('auth'); ?>">LOGIN</a>
				</div>
			</div>
		</div>
	</header>

	<section class="page-section bg-primary" id="about">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<h2 class="text-white mt-0">Hasil Beasiswa</h2>
					<hr class="divider light my-4" />
					<p class="text-white-50 mb-4">Klik file dibawah ini untuk mendownload</p>
					<div class="table-responsive">
						<table class="table table-sm table-bordered">
							<thead>
								<tr>
									<th scope="col" class="text-white">No</th>
									<th scope="col" class="text-white">Nama File</th>
									<th scope="col" class="text-white">Waktu</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($file as $f) : ?>
									<tr>
										<th scope="row" class="text-white"><?= $i; ?></th>
										<td><a style=" color: white;" href="<?= base_url('home/download/') . $f['id']; ?>"><?= $f['filename']; ?></a></td>
										<td>
											<p style="color: white;"><?= $f['created_at']; ?></p>
										</td>
									</tr>
									<?php $i++; ?>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact section-->
	<section class="page-section" id="contact">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<h2 class="mt-0">CONTACT</h2>
					<hr class="divider my-4" />
					<p class="text-muted mb-5"></p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
					<i class="fas fa-phone fa-3x mb-3 text-muted"></i>
					<div>+62 281 6845088</div>
				</div>
				<div class="col-lg-4 mr-auto text-center">
					<i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
					<a class="d-block" href="https://www.stikomyos.ac.id">stikomyos.ac.id</a>
				</div>
				<div class="col-lg-4 mr-auto text-center">
					<i class="fab fa-instagram-square fa-3x mb-3 text-muted"></i>
					<a class="d-block" href="https://www.instagram.com/stikomyospwt">@stikomyospwt</a>
				</div>

			</div>
			<br><br><br><br>
			<div class="row">
				<div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
					<i class="fab fa-whatsapp fa-3x mb-3 text-muted"></i>
					<div>081542038100</div>
				</div>
				<div class="col-lg-4 mr-auto text-center">
					<i class="fas fa-envelope-square fa-3x mb-3 text-muted"></i>
					<a class="d-block">stikomyos@stikomyos.ac.id</a>
				</div>
				<div class="col-lg-4 mr-auto text-center">
					<i class="fas fa-map-marker-alt fa-3x mb-3 text-muted"></i>
					<a class="d-block">Jalan SMP 5 Karang Klesem, Purwokerto Selatan, Kabupaten Banyumas, Jawa Tengah 53144</a>
				</div>

			</div>
		</div>
	</section>

	<!-- Footer-->
	<footer class="bg-light py-5">
		<div class="container">
			<div class="small text-center text-muted">Copyright © <?= date('Y'); ?> - STIKOM YOS SUDARSO PURWOKERTO</div>
		</div>
	</footer>

	<!-- Bootstrap core JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

	<!-- Third party plugin JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

	<!-- Core theme JS-->
	<script src="<?= base_url('assets/js/scripthome.js'); ?>"></script>

</body>

</html>