<?php require_once 'dependencias.php';

		if ($_SERVER['PHP_SELF'] == '/sistemaprod2/sites/1/index.php') {
			$menuhome='current';
			$title='Home';
		}else{
			$menuhome='#';
		}
		if ($_SERVER['PHP_SELF'] == '/sistemaprod2/sites/1/empresa.php') {
			$menuempresa='current';
			$title='Empresa';
		}else{
			$menuempresa='#';
		}
		if ($_SERVER['PHP_SELF'] == '/sistemaprod2/sites/1/equipamentos.php') {
			$menuequipamentos='current';
			$title='Equipamentos';
		}else{
			$menuequipamentos='#';
		}
		if ($_SERVER['PHP_SELF'] == '/sistemaprod2/sites/1/operacional.php') {
			$menuoperacional='current';
			$title='Operacional';
		}else{
			$menuoperacional='#';
		}
		if ($_SERVER['PHP_SELF'] == '/sistemaprod2/sites/1/contato.php') {
			$menucontato='current';
			$title='Contato';
		}else{
			$menucontato='#';
		}
		if ($_SERVER['PHP_SELF'] == '#') {
			$menuteste='current';
			$title='#';
		}else{
			$menuteste='#';
		}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../style.css" type="text/css" />
	<link rel="stylesheet" href="../css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="../css/dark.css" type="text/css" />
	<link rel="stylesheet" href="../css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="../css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="../css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Just Transportes - <?php echo $title?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="faqs.html">FAQs</a></li>
							<li><a href="contact.html">Contact</a></li>
							<!-- <li><a href="login-register.html">Login</a>
								<div class="top-link-section">
									<form id="top-login" role="form">
										<div class="input-group" id="top-login-username">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="icon-user"></i></div>
											</div>
											<input type="email" class="form-control" placeholder="Email address" required="">
										</div>
										<div class="input-group" id="top-login-password">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="icon-key"></i></div>
											</div>
											<input type="password" class="form-control" placeholder="Password" required="">
										</div>
										<label class="checkbox">
										  <input type="checkbox" value="remember-me"> Remember me
										</label>
										<button class="btn btn-danger btn-block" type="submit">Sign in</button>
									</form>
								</div>
							</li> -->
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<!-- <li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="#" class="si-dribbble"><span class="ts-icon"><i class="icon-dribbble"></i></span><span class="ts-text">Dribbble</span></a></li>
							<li><a href="#" class="si-github"><span class="ts-icon"><i class="icon-github-circled"></i></span><span class="ts-text">Github</span></a></li>
							<li><a href="#" class="si-pinterest"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li> -->
							<li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
							<li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@canvas.com</span></a></li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<ul>
							<li class="<?php echo $menuhome;?>"><a href="index.php"><div>Home</div><span>          .</span></a></li>
							<li class="<?php echo $menuempresa;?>"><a href="empresa.php"><div>Empresa</div><span>          .</span></a>
							<li class="<?php echo $menuequipamentos;?>"><a href="equipamentos.php"><div>Equipamentos</div><span>          .</span></a>
							<li class="<?php echo $menuoperacional;?>"><a href="operacional.php"><div>Operacional</div><span>          .</span></a>
							<li class="<?php echo $menucontato;?>"><a href="contato.php"><div>Contato</div><span>          .</span></a>
							<!-- <li><a href="#"><div>Shop</div><span>Buy Now</span></a>
							<li class="#"><a href="#"><div>Shortcodes</div><span>Amazing Elements</span></a> -->
						</ul>

						<!-- Top Cart
						============================================= -->
						<!-- <div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div>#top-cart end -->

						<!-- Top Search
						============================================= -->
						<!-- <div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div>#top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

		<!-- External JavaScripts
	============================================= -->
	<script src="../js/jquery.js"></script>
	<script src="../js/plugins.js"></script>
		<!-- Footer Scripts
	============================================= -->
	<script src="../js/functions.js"></script>

</body>
</html>