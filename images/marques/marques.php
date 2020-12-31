<!doctype html>
<html lang="en">
	<head>
		<title>Nos partenaires - Morlink</title>
		<meta charset="utf-8">
		<!--add responsive layout support-->
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<!--include favicon-->
		<link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
		<!--fonts include-->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,400italic,500italic,300italic,100italic,100,700italic,900,900italic,700' rel='stylesheet' type='text/css'>
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/jackbox/css/jackbox.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/animate.css">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/jackbox/css/jackbox.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--[if lte IE 10]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
			<link rel="stylesheet" type="text/css" media="screen" href="plugins/jackbox/css/jackbox-ie9.css">
		<![endif]-->
		<!--head libs-->
		<!--[if lte IE 8]>
			<style>
				#preloader{display:none !important;}
			</style>
		<![endif]-->
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/modernizr.js"></script>
	</head>
	<body class="sticky_menu">
		  
		<!--layout-->
		<div class="wide_layout db_centered bg_white">
			<!--[if (lt IE 9) | IE 9]>
				<div class="bg_red" style="padding:5px 0 12px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix color_white" style="padding:9px 0 0;float:left;width:80%;"><i class="fa fa-exclamation-triangle f_left m_right_10" style="font-size:25px;"></i><b>Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:20%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium" target="_blank" style="margin-top:6px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			
			<?php include('pages/header.php'); ?>
			
			<!--breadcrumbs-->
			<div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
				<div class="container">
					<a href="index.php" class="sc_hover">Accueil</a> / <span class="color_light">Nos partenaires</span>
				</div>
			</div>
			<!--main content-->
			<div class="page_section_offset">
				<main class="container">
					<div class="d_table w_full d_xs_block m_bottom_6">
						<div class="col-lg-9 col-md-9 col-sm-9 f_none d_table_cell v_align_m d_xs_block m_xs_bottom_10 p_xs_left_0 px_right_0">
							<h2 class="fw_light second_font color_dark tt_uppercase">Nos partenaires</h2>
						</div>
						
					</div>
					<p>
						Morlink veille en permanence à vous fournir les plus grandes marques de l’univers de la ferrure de meuble et de bâtiment. Nous vous proposons les produits qui répondent à vos exigences et vos besoins. Et en s’entourant des meilleurs producteurs, nous garantissons la réussite de vos projets et la disponibilité de vos produits.
						</p>
					<div class="portfolio_isotope_container four_columns wrapper m_bottom_10 m_xs_bottom_0" data-isotope-options='{
						"itemSelector": ".portfolio_isotope_item",
			  			"layoutMode": "fitRows"
					}'>
						<!--isotope item-->
							<?php
							error_reporting(0);
							include('pages/database.php');
	
							$sql_menu33 = "select * from marques order by id DESC";
							$res33 = mysql_query($sql_menu33);
							while($data33 = mysql_fetch_array($res33))
							{
							?>	
							<div class="portfolio_isotope_item living_room">
							<div class="frame_container relative r_image_container db_xs_centered">
								<figure class="relative">
									<div style="border: 1px solid #ccc;" class="d_block wrapper m_bottom_16 scale_image_container popup_container relative">
										<img src="images/marques/<?php echo $data33['photo']; ?>" alt="" class="tr_all scale_image">
										 
									</div>
									<figcaption>
										<h5 class="second_font m_bottom_5 lh_small"><a href="#" class="sc_hover"><b><?php echo utf8_encode($data33['titre']); ?></b></a></h5>
										<a href="partenaires.php?id=<?php echo $data33['id']; ?>" style="color: #ee8003;" class="fw_light color_light color_dark_hover">Découvrir <?php echo utf8_encode($data33['titre']); ?></a>
									</figcaption>
								</figure>
							</div>
						</div>
							<?php } ?>
						<!--isotope item-->
			</div>
				</main>
			</div>
			<!--footer-->
						<?php include('pages/footer.php'); ?>

		</div>

		<!--back to top-->
		<button class="back_to_top animated button_type_6 grey state_2 d_block black_hover f_left vc_child tr_all"><i class="fa fa-angle-up d_inline_m"></i></button>

		<!--libs include-->
		<script src="plugins/jquery.appear.js"></script>
		<script src="plugins/isotope.pkgd.min.js"></script>
		<script src="plugins/jackbox/js/jackbox-packed.min.js"></script>
		<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="plugins/twitter/jquery.tweet.min.js"></script><script src="plugins/flickr.js"></script>
		<script src="plugins/afterresize.min.js"></script>
		<script src="js/retina.min.js"></script>
		<script src="plugins/colorpicker/colorpicker.js"></script>
		 

		<!--theme initializer-->
		<script src="js/themeCore.js"></script>
		<script src="js/theme.js"></script>
	</body>
</html>