<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jasuke &mdash; MasDim</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="index.php">Jasuke Masdim</a></div>
				</div>
			</div>
		</div>
	</nav>                                                   
	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-heart"></i>
						</span>
						<h3>Kesehatan</h3>
						<p>Selain nikmat dikonsumsi jagung ini bagus juga untuk kesehatan diantaranya menyehatkan mata, dan mencegah depresi</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-wallet"></i>
						</span>
						<h3>Hemat</h3>
						<p>Kalau manfaatnya banyak harga juga akan mahal tetapi di jasuke masdim harganya lebih terjangkau dan pastinya pas dikonsumsi</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-shopping-cart"></i>
						</span>
						<h3>Gratis Pengantaran</h3>
						<p>jasuke masdim menyediakan gratis pengantaran apabila customer/pembeli sudah membeli jasuke sebanyak yang telah ditentukan</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Products</h2>
					<p>Dibawah ini adalah beberapa produk dari jasuke masdim</p>
				</div>
			</div>
			<div class="row">
				<?php
					require('koneksi.php');
					$sql	= "SELECT * FROM produk";
					$query  = mysqli_query($db_con, $sql);
					WHILE ($data = mysqli_fetch_array($query)){
				?>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/<?php echo $data["gambar"]; ?>);">
							<div class="inner">
								<p>
									<a target="_blank" href="https://api.whatsapp.com/send?phone=6288708241354&text=Apakah%20Produk%20Ini%20Masih%20Ada?" class="icon"><i class="icon-eye"></i> Beli Sekarang </a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="index.php"><?php echo $data["nama_produk"]; ?></a></h3>
							<span class="price">Rp<?php echo $data["harga"]; ?>,00</span>
						</div>
					</div>
				</div>
				<?php } ?>	
			</div>
		</div>
	</div>
	
	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>TESTIMONI</span>
					<h2>Jasuke MasDim</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/sandy.jpeg" alt="user">
									</figure>
									<span>Sandy Alfero Dion</span>
									<blockquote>
										<p>&ldquo;walaupun merupakan perpaduan dari keju dan susu, jasuke masdim tidak membuat mual saat di makan. harganya ramah di kantong dan banyak varian rasanya. nagih euy&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/Deo.jpeg" alt="user">
									</figure>
									<span>Deoo Andica</span>
									<blockquote>
										<p>&ldquo;Jagung ini sangat enak dan harganya terjangkau, menurut saya varian rasa balado yang sangat saya sukai karena level kepedasannya, kalian wajib coba.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Pemilik Usaha</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="images/IMG_6051.jpg" width="350px" height="200px">
						<h3>Dimas Setya Ardhianto</h3>
						<strong class="role">Chief Executive Officer</strong>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="images/ghani.jpeg" width="350px" height="200px">
						<h3>Fahri Al Ghaniy</h3>
						<strong class="role">Co-Owner</strong>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="images/fazry.jpeg" width="350px" height="200px">
						<h3>Muhammad Fazry</h3>
						<strong class="role">Co-Owner</strong>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="images/Ary.jpeg" width="350px" height="200px">
						<h3>Ary Awaludin</h3>
						<strong class="role">Co-Owner</strong>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="images/Puja.jpeg" width="350px" height="200px">
						<h3>Puja Dilham</h3>
						<strong class="role">Co-Owner</strong>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="images/Piao.jpeg" width="350px" height="200px">
						<h3>Loong Piao</h3>
						<strong class="role">Co-Owner</strong>
				</ul>
			</div>
	</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

