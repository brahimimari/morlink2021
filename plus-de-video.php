<!doctype html>
<html lang="en">
	<head>
		<title>Morlink - Videos</title>
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
		
		<style>
		ol, ul {
    margin-top: 0;
     margin-bottom: 0px !important; 
	}
	hr {
    margin-top: 0px !important;
}
		</style>
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
		
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox.min.css">

		<link rel="stylesheet" href="js/dist/youCover.css">



	</head>
	<body class="sticky_menu">
 		 
		<!--layout-->
		<div class="wide_layout db_centered bg_white">
			<!--[if (lt IE 9) | IE 9]>
				<div class="bg_red" style="padding:5px 0 12px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix color_white" style="padding:9px 0 0;float:left;width:80%;"><i class="fa fa-exclamation-triangle f_left m_right_10" style="font-size:25px;"></i><b>Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:20%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium" target="_blank" style="margin-top:6px;">Update Now!</a></div></div></div></div>
			<![endif]-->
		 
	<?php include('pages/header.php'); ?>
		 <div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
				<div class="container">
					<a href="index.php" class="sc_hover">Acceuil</a> / <span class="color_light">GALERIE DE VIDEOS</span>
				</div>
			</div>
			<!--main content-->
			<div class="page_section_offset">
				<main class="container">
					<div class="d_table w_full d_xs_block m_bottom_6">
						<div class="col-lg-9 col-md-9 col-sm-9 f_none d_table_cell v_align_m d_xs_block m_xs_bottom_10 p_xs_left_0 px_right_0">
							<h2 class="fw_light second_font color_dark tt_uppercase">Galerie de Videos</h2>
						</div>
					</div>
					<div class="box-wrapper">
										
		 							 
									 <SECTION>
									 <div class="d_table m_bottom_5 w_full animated" data-animation="fadeInDown">
											<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 v_align_m d_table_cell f_none">
												<h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4"><?php echo $data_typevideo['titre']; ?></h5>	
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 t_align_r d_table_cell f_none">
												<!--carousel navigation-->
												<a href="plus-de-video.php?id_categ=<?php echo $data_typevideo['id']; ?>">Voir tous</a> 
											</div>
										</div>
										</SECTION>	
											  <?php
												$type = $data_typevideo['id'];
												error_reporting(0);
												include('pages/database.php');
												$type = $_GET['id_categ'];
												
												$sql_menu = "select * from video where type= '$type' order by id DESC";
												
												
												$res = mysql_query($sql_menu);
												
												while($data = mysql_fetch_array($res))
												{
												?>
											 
									<div style="font-size: 12px;color:#55575b;margin-bottom:12px" class="col-md-3">
									
										<div data-youcover data-fancybox data-image='https://img.youtube.com/vi/<?php echo utf8_encode($data['video']); ?>/hqdefault.jpg' data-id='<?php echo utf8_encode($data['video']); ?>'></div>
									<h5 style="margin-top:12px;height: 50px;"><?php echo utf8_encode($data['titre']); ?></h5>
									</div>	
							 
								 
								
							 
									
													
												<?php } ?>
										 	
									
						
									
					</div> 
				</main>
			</div>
			
			
		 
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
	

	
	
	
		<script
	src="https://code.jquery.com/jquery-2.2.4.min.js"
	integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	crossorigin="anonymous"></script>

	<script src='js/fancybox/jquery.fancybox.min.js'></script>
	<script src='js/dist/youCover.js'></script>


	</body>
</html>