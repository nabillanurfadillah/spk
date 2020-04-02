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
					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							LOGIN
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?= base_url('auth/login'); ?>">Beasiswa PPA</a>
							<a class="dropdown-item" href="<?= base_url('auth/login'); ?>">Beasiswa Bidik Misi</a>
							<a class="dropdown-item" href="<?= base_url('auth/login'); ?>">Beasiswa Berprestasi</a>
							<a class="dropdown-item" href="<?= base_url('auth/login'); ?>">Beasiswa Kurang Mampu</a>

						</div>
					</li> -->
					<!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="">Login</a></li> -->
					<!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li> -->
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Hasil Beasiswa</a></li>
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
					<!-- <h2 class="text-white mt-0">We've got what you need!</h2>
					<hr class="divider light my-4" />
					<p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and
						running in no time! Choose one of our open source, free to download, and easy to use themes! No
						strings attached!</p> -->
					<!-- <a class="btn btn-light btn-xl js-scroll-trigger" href="<?= base_url('home/download'); ?>">Download</a> -->
					 <table class="table table-bordered" >
                    <thead >
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama File</th>
                            <th scope="col">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($file as $f) : ?>

                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td ><a style="color: white;" href="<?= base_url('home/download/') . $f['id']; ?>"><?= $f['filename']; ?></a></td>
                                <td> <p  style="color: white;"><?= $f['created_at']; ?></p> </td>                 
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section 
	 <section class="page-section" id="services">
		<div class="container">
			<h2 class="text-center mt-0">At Your Service</h2>
			<hr class="divider my-4" />
			<div class="row">
				<div class="col-lg-3 col-md-6 text-center">
					<div class="mt-5">
						<i class="fas fa-4x fa-gem text-primary mb-4"></i>
						<h3 class="h4 mb-2">Sturdy Themes</h3>
						<p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="mt-5">
						<i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
						<h3 class="h4 mb-2">Up to Date</h3>
						<p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="mt-5">
						<i class="fas fa-4x fa-globe text-primary mb-4"></i>
						<h3 class="h4 mb-2">Ready to Publish</h3>
						<p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="mt-5">
						<i class="fas fa-4x fa-heart text-primary mb-4"></i>
						<h3 class="h4 mb-2">Made with Love</h3>
						<p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Portfolio section-->
	<!-- <section id="portfolio">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg"><img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Category</div>
							<div class="project-name">Project Name</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg"><img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Category</div>
							<div class="project-name">Project Name</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg"><img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Category</div>
							<div class="project-name">Project Name</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg"><img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Category</div>
							<div class="project-name">Project Name</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg"><img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Category</div>
							<div class="project-name">Project Name</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg"><img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="" />
						<div class="portfolio-box-caption p-3">
							<div class="project-category text-white-50">Category</div>
							<div class="project-name">Project Name</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Call to action section-->
	<!-- <section class="page-section bg-dark text-white">
		<div class="container text-center">
			<h2 class="mb-4">Free Download at Start Bootstrap!</h2>
			<a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
		</div>
	</section> -->
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
					<!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a class="d-block" href="stikomyos.ac.id">stikomyos.ac.id</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer-->
	<footer class="bg-light py-5">
		<div class="container">
			<div class="small text-center text-muted">Copyright © 2020 - STIKOM YOS SUDARSO PURWOKERTO</div>
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