<!doctype html>
<html lang="en">
	<head>
		<title>Morlink - INfos</title>
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
		<link rel="stylesheet" type="text/css" media="all" href="plugins/fancybox/jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/animate.css">
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
		<div class="boxed_layout db_centered bg_white">

			<!--[if (lt IE 9) | IE 9]>
				<div class="bg_red" style="padding:5px 0 12px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix color_white" style="padding:9px 0 0;float:left;width:80%;"><i class="fa fa-exclamation-triangle f_left m_right_10" style="font-size:25px;"></i><b>Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:20%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium" target="_blank" style="margin-top:6px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			 <?php include('pages/header.php'); ?>
 
			<!--breadcrumbs-->
			<div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
				<div class="container">
					<a href="index.php">Accueil</a> <span class="color_dark">/</span> <a href="#" class="sc_hover">MÉDIATHÈQUE </a>/<a href="#" class="sc_hover">Les dernières infos</a> <span class="color_dark">
									</div>
			</div>
			<!--main content-->
			<div class="page_section_offset">
				<div class="container">
					<div class="row">
					
					<?php include('pages/left.php'); ?>
					
					<main class="col-lg-8 col-md-8 col-sm-8 m_bottom_30 m_xs_bottom_10">
								
						 	
							<div class="col-lg-9 col-md-9 col-sm-9 f_none d_table_cell v_align_m d_xs_block m_xs_bottom_10 p_xs_left_0 px_right_0">
							 
							<h2 class="fw_light second_font color_dark tt_uppercase">Les Dernières Infos</h2>
							</div>
							<hr class="divider_light m_bottom_5">
							
							<!--isotope-->
							<div id="can_change_layout" class="category_isotope_container three_columns wrapper m_bottom_10 m_xs_bottom_0" data-isotope-options='{
								"itemSelector": ".category_isotope_item",
					  			"layoutMode": "fitRows"
							}'>
								<!--isotope item-->
							
							<?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 5;
        $offset = ($pageno-1) * $no_of_records_per_page;
	
	include('pages/database.php');
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }
		
		

        $total_pages_sql = "SELECT COUNT(*) FROM from infos";
	
	$result = mysqli_query($conn,$total_pages_sql);
	$total_rows = mysqli_fetch_array($result)[0];
	$totol_rows = 15;
	$total_pages = ceil($total_rows / $no_of_records_per_page);
	$sql = "SELECT * FROM infos order by id DESC LIMIT $offset, $no_of_records_per_page";
	// $sql = "SELECT * FROM infos order by id DESC";
        $res_data = mysqli_query($conn,$sql);
        while($data33 = mysqli_fetch_array($res_data)){
          ?>	
							
							
								<div class="category_isotope_item list_view_type">
									<figure class="product_item type_2 c_image_container relative frame_container t_sm_align_c r_image_container qv_container">
										<!--image & buttons & label-->
										
										<figcaption class="bg_white relative p_bottom_0">
											<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div style="margin: 9px !important;">
													<div class="d_block">
														<img src="images/infos/<?php echo utf8_encode($data33['photo']); ?>" alt="" class="">
													</div>
													 
												</div>
 										</div>
												<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
													<h4 class="second_font sc_hover d_xs_block m_bottom_10"><?php echo utf8_encode($data33['titre']); ?> </h4> 
													<h6 class="second_font"><?php echo utf8_encode($data33['date']); ?> </h6> 
													 
													<hr class="d_none divider_light m_bottom_15">
													<p class="fw_light d_none m_bottom_14 color_grey">
													
													<?php 
													if($data33['plus'] == 0)
													{
														echo utf8_encode($data33['desc']);
													} else {
													echo substr(utf8_encode($data33['desc']), 0, 100); ?>
													
													<?php 
													}
													if(!empty($data33['lien'])) ?>
													
													<a  style="color:#000;font-weight: bold;" target ="_blank" href="<?php echo $data33['lien']; ?>">  <?php echo $data33['lien']; ?></a>
													  
													<?php 
													if($data33['plus'] == '1'){
													?>
													<br />
													<a  style="float:right;color:#ee7f01;font-weight: bold;" href="LirelaSuite.php?id=<?php echo $data33['id']; ?>">  Lire la Suite</a>		
													<?php } ?>
													
													  
													</p>
													 
 												</div>
												 
											</div>
 											<button class="grey state_2 tr_delay ">
 											 </button>
 											
										</figcaption>
									</figure>
								</div>
							<?php } mysqli_close($conn);
    ?>
   
								<!--isotope item-->
	 						</div>
					<hr class="m_bottom_5 divider_light">
	 
						</main>
					</div>
				</div>
			</div>
		 
		 <?php include('pages/footer.php'); ?>
		 
		 </div>

		<!--back to top-->
		<button class="back_to_top animated button_type_6 grey state_2 d_block black_hover f_left vc_child tr_all"><i class="fa fa-angle-up d_inline_m"></i></button>

		 	 <!--libs include-->
		<script src="plugins/jquery-ui.min.js"></script>
		<script src="plugins/isotope.pkgd.min.js"></script>
		<script src="plugins/jquery.appear.js"></script>
		<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="plugins/twitter/jquery.tweet.min.js"></script><script src="plugins/flickr.js"></script>
		<script src="plugins/afterresize.min.js"></script>
		<script src="plugins/jackbox/js/jackbox-packed.min.js"></script>
		<script src="plugins/jquery.elevateZoom-3.0.8.min.js"></script>
		<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid="></script>
		<script src="js/retina.min.js"></script>
		<script src="plugins/colorpicker/colorpicker.js"></script>
		 

		<!--theme initializer-->
		<script src="js/themeCore.js"></script>
		<script src="js/theme.js"></script>
	</body>
</html>