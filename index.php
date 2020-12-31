<!doctype html><?php include('pages/version.php'); ?><html lang="en">
	<head>
		<title>quincaillerie de luxe Maroc</title>
		<meta charset="utf-8">
		<!--add responsive layout support-->
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<!--meta info-->
		<meta name="description" content="MORLINK Partners présente une large gamme d'articles pour l'aménagement de cuisines, salles de bain et meubles" />
		<meta name="keywords" content="quincaillerie dressing luxe, quincaillerie de bâtiment,quincaillerie de bâtiment Maroc, vente poignée de porte maroc, poignées porte maroc, quincaillerie industrielle maroc, serrure porte maroc, quincaillerie de luxe casablanca, quincaillerie cuisine maroc, Hâfele, Emuca, Plastimodul, Veife" />
		<meta name="robots" content="all" />
		<meta name="language" content="fr" />
		<meta name="revisit-after" content="1" />
		<!--include favicon-->
		<link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
		<!--fonts include-->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,400italic,500italic,300italic,100italic,100,700italic,900,900italic,700' rel='stylesheet' type='text/css'>	
		<!--stylesheet include-->		
		<link rel="stylesheet" type="text/css" media="all" href="plugins/flexslider/flexslider.css?v=<?php echo $version; ?>">

		<link rel="stylesheet" type="text/css" media="all" href="plugins/rs-plugin/css/settings.css?v=<?php echo $version; ?>">
	
		<link rel="stylesheet" type="text/css" media="all" href="plugins/fancybox/jquery.fancybox.css?v=<?php echo $version; ?>">

		
		<link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/assets/owl.carousel.min.css?v=<?php echo $version; ?>">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/jackbox/css/jackbox.min.css?v=<?php echo $version; ?>">
		<link rel="stylesheet" type="text/css" media="all" href="css/animate.css?v=<?php echo $version; ?>">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css?v=<?php echo $version; ?>">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css?v=<?php echo $version; ?>">
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

<style>
.vertical-menu {
  width: 100%;
}

.vertical-menu a {
  color: black;
  display: block;
  padding: 8.8px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ed8200;
}

.vertical-menu a.active {
  background-color: #ed8200;
  color: white;
}
</style>


	</head>
	<body class="sticky_menu">
 		
		<!--layout
		<div class="boxed_layout db_centered bg_white">-->
		<div class="boxed_layout db_centered bg_white">
			<!--[if (lt IE 9) | IE 9]>
				<div class="bg_red" style="padding:5px 0 12px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix color_white" style="padding:9px 0 0;float:left;width:80%;"><i class="fa fa-exclamation-triangle f_left m_right_10" style="font-size:25px;"></i><b>Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:20%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium" target="_blank" style="margin-top:6px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			
						<?php include('pages/header.php'); ?>

			<!--main content-->
			<div class="page_section_offset p_top_0">
				<div class="container">
					<!--revolution slider-->
					<div class="row">
					 
					<div class="col-lg-3 col-md-3 col-sm-12 m_bottom_55 m_xs_bottom_30 t_sm_align_c newpc">
							<!--banner-->
							<div class="animated hidden m_bottom_30" data-animation="fadeInLeft" data-animation-delay="1400">
								<section class="m_bottom_30">
								<h5 class="color_dark tt_uppercase fw_light m_bottom_13" style="color:#ed8200 !important;">Quincailleries et accessoires pour l'ameublement</h5>
								<hr class="divider_bg">
								<div class="vertical-menu">
									<?php
									error_reporting(0);
									include('pages/database.php');
									$sql_menu = 'SELECT * FROM `categorie` ORDER BY `id` ASC';
									$res = mysql_query($sql_menu);
									while($data = mysql_fetch_array($res))
									{
									?>
											
									<a href="<?php echo ($data['categorie']); ?>-<?php echo $data['id']; ?>.html"><?php echo ($data['categorie']); ?></a>

									<?php } ?>
									 
								</div>
			 
							</section>
							</div>
							<!--banner-->
							
						 	
							
					</div>
						
<div class="col-lg-7 col-md-7 col-sm-12 m_bottom_55 m_sm_bottom_30 animated hidden" data-animation="fadeInLeft" data-animation-delay="1250">
							<!--flexslider-->
							<div class="flexslider">
								<ul class="slides">
								 
							  <li data-transition="Random fade and Premium" data-slotamount="7">
								   <img src="images/slider/QuincaillerieDressing.jpg?v=<?php echo $version; ?>" alt="" data-bgfit="cover" data-bgposition="center center">
							  </li>

							  <li data-transition="Random fade and Premium" data-slotamount="7">
								   <img src="images/slider/accessoire-de-cuisne-morlink.png?v=<?php echo $version; ?>" alt="" data-bgfit="cover" data-bgposition="center center">
							  </li>
						
						
						
							   <li data-transition="Random fade and Premium" data-slotamount="7">
								   <img src="images/slider/free-fold-free-flap-morlink.png?v=<?php echo $version; ?>" alt="" data-bgfit="cover" data-bgposition="center center">
							  </li>
						
						
							   <li data-transition="Random fade and Premium" data-slotamount="7">
								   <img src="images/slider/poignees-de-porte-morlink.png?v=<?php echo $version; ?>" alt="" data-bgfit="cover" data-bgposition="center center">
							  </li>
						
						
						
							   <li data-transition="Random fade and Premium" data-slotamount="7">
								   <img src="images/slider/porte-de-passage-morlink-hafele.png?v=<?php echo $version; ?>" alt="" data-bgfit="cover" data-bgposition="center center">
							  </li>
						
						   

								<?php $i= 8;while($i <= 6){ ?>
								<li data-transition="Random fade and Premium" data-slotamount="7">
								   <img src="images/slider/<?php echo $i; ?>.jpg?v=<?php echo $version; ?>" alt="" data-bgfit="cover" data-bgposition="center center">
								  
									<!--
									<div class="caption sfr str" data-x="center" data-y="180" data-speed="700" data-start="1400" data-easing="easeOutBack">
								   		<p class="orange_white fw_light tt_uppercase slider_fs_3">BATHROOM INSPIRATION</p>
								  	</div>
								  	<div class="caption lfr ltr orange_white second_font tt_uppercase t_align_c" style="font-size:4.285em;line-height:.94em;" data-x="center" data-y="220" data-speed="900" data-start="1550" data-easing="easeOutBack">
								   		<b>New bathroom ideas</b>
								  	</div>
								  	<div class="caption lfr ltr tt_uppercase t_align_c" data-x="center" data-y="325" data-speed="900" data-start="1600" data-easing="easeOutBack">
								   		<a href="#" class="d_block button_type_5 orange_white bg_transparent slider_button tt_uppercase fw_light slider_fs_2">View Collection</a>
								  	</div> -->
								</li>
								<?php $i++; } ?>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12 m_bottom_55 m_xs_bottom_30 t_sm_align_c newpc">
						<a href="nouveaute.php">
						<img class="rightCol" id="rightCol" src="images/nouveaute2020.jpg?v=<?php echo $version; ?>">
						</a>
					</div>
						
					
					</div>	
					<!--info blocks v3-->
				<div class="row"> 
					<main class="col-lg-12 col-md-12 col-sm-12">
							<h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_13 animated hidden" data-animation="fadeInDown">Gamme</h5>
							<hr class="divider_bg m_bottom_30 animated hidden" data-animation="fadeInDown" data-animation-delay="100">
							 <div class="row">
							<?php include('pages/prestation.php'); ?>
									<br />
							<br />
							</div> 
							</main>
					</div>
					
					<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_0 m_bottom_10">
									<section>
										<div class="d_table m_bottom_5 w_full animated hidden" data-animation="fadeInDown">
											<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 v_align_m d_table_cell f_none">
												<h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4"><a href="infos.php">Les Dernières Infos</a></h5>	
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 t_align_r d_table_cell f_none">
												<!--carousel navigation-->
												<div class="clearfix d_inline_b">
													<button class="ctquote_prev black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child m_right_5"><i class="fa fa-angle-left d_inline_m"></i></button>
													<button class="ctquote_next black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
												</div>
											</div>
										</div>
										<hr class="divider_bg m_bottom_15 animated hidden" data-animation="fadeInDown" data-animation-delay="100">
										<div class="owl-carousel animated hidden" data-animation="fadeInDown" data-animation-delay="200" data-owl-carousel-options='{"items" : 1, "loop" : true}' data-nav="ctquote_">
											<div>
											
											<?php
												error_reporting(0);
												include('pages/database.php');
						
												$sql_menu33 = "select * from infos order by id DESC limit 3";
												$res33 = mysql_query($sql_menu33);
												while($data33 = mysql_fetch_array($res33))
												{
												?>	
										<div class="category_isotope_item list_view_type">
									<figure class="product_item type_2 c_image_container relative frame_container t_sm_align_c r_image_container qv_container">
										<!--image & buttons & label-->
										
										<figcaption class="bg_white relative p_bottom_0">
											<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div style="">
													<div class="d_block">
														<img src="images/infos/<?php echo utf8_encode($data33['photo']); ?>" alt="quincaillerie de cuisine maroc" title="quincaillerie de cuisine maroc" class="">
													</div>
													 
												</div>
 										</div>
												<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
													<h6 class="second_font sc_hover d_xs_block m_bottom_10"><?php echo utf8_encode($data33['titre']); ?> </h6> 
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
												<?php } ?>
											</div>
											
											
											<div>
											
											<?php
												error_reporting(0);
												include('pages/database.php');
						
												$sql_menu33 = "select * from infos order by id DESC limit 3,3";
												$res33 = mysql_query($sql_menu33);
												while($data33 = mysql_fetch_array($res33))
												{
												?>	
											<div class="category_isotope_item list_view_type">
									<figure class="product_item type_2 c_image_container relative frame_container t_sm_align_c r_image_container qv_container">
										<!--image & buttons & label-->
										
										<figcaption class="bg_white relative p_bottom_0">
											<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div style="margin: 9px !important;">
													<div class="d_block">
														<img src="images/infos/<?php echo utf8_encode($data33['photo']); ?>" alt="quincaillerie de cuisine maroc" title="quincaillerie de cuisine maroc" class="">
													</div>
													 
												</div>
 										</div>
												<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
													<h6 class="second_font sc_hover d_xs_block m_bottom_10"><?php echo utf8_encode($data33['titre']); ?> </h6> 
													<h6 class="second_font"><?php echo utf8_encode($data33['date']); ?> </h6> 
													 
													<hr class="d_none divider_light m_bottom_15">
													<p class="fw_light d_none m_bottom_14 color_grey">
													<?php echo substr(utf8_encode($data33['desc']), 0, 100);  ?>
													
													 <?php 
													if($data33['plus'] == '1'){
													?>
													<br />
													<a  style="float:right;color:#ee7f01;font-weight: bold;" href="LirelaSuite.php?id=<?php echo $data33['id']; ?>">  Lire la Suite</a>		
													<?php } ?> 
													<?php 
													if(!empty($data33['lien'])) ?>
													
													<a  style="color:#000;font-weight: bold;" target ="_blank" href="<?php echo $data33['lien']; ?>">  <?php echo $data33['lien']; ?></a>
													  
													  

													</p>
													 
 												</div>
												 
											</div>
 											<button class="grey state_2 tr_delay ">
 											 </button>
 											
										</figcaption>
									</figure>
								</div>
												<?php } ?>
											</div>
											
										</div>
									</section>
								</div>
								
								
								<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_0 m_bottom_10">
								<section>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 v_align_m d_table_cell f_none">
												<h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_20"><a href="videos.php">Dernières vidéos</a></h5>	
											</div>
 										
										<hr class="divider_bg m_bottom_15 animated hidden" data-animation="fadeInDown" data-animation-delay="100">
										
								<div id="rightCol" class="rightCol row t_xs_align_c">
								  <?php include('pages/youtube.php'); ?>
								</div>
								<div id="rightColMobile" class="rightColMobile row t_xs_align_c">
								  <?php include('pages/youtubemobile.php'); ?>
								</div>
							</section>
							 </div>
								
			
								</div>
							
					
			 				</div>
			<!--footer-->
				<?php include('pages/footer.php'); ?>
	</div>

		<!--back to top-->
		<button class="back_to_top animated button_type_6 grey state_2 d_block black_hover f_left vc_child tr_all"><i class="fa fa-angle-up d_inline_m"></i></button>

		<!--libs include-->
		<script src="plugins/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
		<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="plugins/jquery.easytabs.min.js"></script>
		<script src="plugins/flickr.js"></script>
		<script src="plugins/jquery.appear.js"></script>
		<script src="plugins/jackbox/js/jackbox-packed.min.js"></script>
		<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="plugins/twitter/jquery.tweet.min.js"></script><script src="plugins/flickr.js"></script>
		<script src="plugins/afterresize.min.js"></script>
		<script src="plugins/colorpicker/colorpicker.js"></script>
        
        <script src="plugins/jquery.appear.js"></script>
		<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
 
	
	
<style>
	@media screen and (max-width: 600px) {
  .rightCol {
    display: none;
  }

}

@media only screen and (min-width: 768px) {
 
.rightColMobile {
	display:none;	
}

}

	</style>

		<!--theme initializer-->
		<script src="js/themeCore.js"></script>
		<script src="js/theme.js"></script>


	<script src='js/fancybox/jquery.fancybox.min.js'></script>
	<script src='js/dist/youCover.js'></script>


	</body>
</html>