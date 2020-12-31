<!doctype html>
<html lang="en">
 <?php
	include('admin/pages/functions.php');
 ?>
	<head>
		<title>produits</title>
		<meta charset="utf-8">
		<!--add responsive layout support-->
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
<?php include('pages/referencement.php') ?>		<!--include favicon-->
		<link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
		<!--fonts include-->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,400italic,500italic,300italic,100italic,100,700italic,900,900italic,700' rel='stylesheet' type='text/css'>
		<!--stylesheet include-->

			<link rel="stylesheet" type="text/css" media="all" href="plugins/flexslider/flexslider.css">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/fancybox/jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/jackbox/css/jackbox.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/animate.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--[if lte IE 10]><!--[if lte IE 10]>
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
		<body class="sticky_menu" >
 		 
		<!--layout-->
		<div class="db_centered bg_white">
			<!--[if (lt IE 9) | IE 9]>
				<div class="bg_red" style="padding:5px 0 12px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix color_white" style="padding:9px 0 0;float:left;width:80%;"><i class="fa fa-exclamation-triangle f_left m_right_10" style="font-size:25px;"></i><b>Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:20%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium" target="_blank" style="margin-top:6px;">Update Now!</a></div></div></div></div>
			<![endif]-->
				<?php include('pages/header.php'); ?>
				
							<?php
								include('pages/database.php');
								$id = $_GET['id_categ'];
								$sql_categ = "select * from famille where id = ".$_GET['id'];
								$res_categ = mysql_query($sql_categ);
								$data_categ = mysql_fetch_array($res_categ);
								$id_categ = $data_categ['id_categ'];
								
								$sql = "SELECT * FROM `categorie` WHERE id = '$id_categ'";
								$res = mysql_query($sql);
								$data = mysql_fetch_array($res);
							?>
			 <!--breadcrumbs-->
			<div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
				<div class="container">
					<a href="index.php" class="sc_hover">Acceuil</a> <span class="color_dark">/ Produits / </span> 	<a href="produits.php?id_categ=<?php echo $id_categ; ?>"><?php echo ($data['categorie']); ?> </a>	 / <?php echo ($data_categ['famille']); ?>		</div>
			</div>
			<!--main content-->
			<div class="page_section_offset">
				<div class="container">
					<div class="row">
						<?php 
										
										 $id_categ = getIdDunSousCateg ($_GET['id']);
										 $categorie = getNameCateg ($id_categ);
										 $famille = getNameSousCateg ($_GET['id']);	
							
						?>
 
			
							 
						
	<?php 
	include('pages/left-p.php'); 
	?>
	
	<?php
	$dir = 'img/categories/'.suppr_accents($categorie).'/familles/'.suppr_accents($famille).'/animation/*.{jpg,jpeg,gif,png}';
	$files = glob($dir,GLOB_BRACE);
										
			if(!empty($files)){
						?>
					<h3 class="fw_light second_font color_dark m_bottom_10 tt_uppercase "><?php echo $famille; ?></h3>	
	
					<main class="col-lg-7 col-md-3 col-sm-3">
							
			<figure class="m_bottom_10">
					<div class="flexslider">
								<ul class="slides">
									<?php
										
										foreach($files as $cle =>$valeur){
											
											echo'<li><img src="'.$valeur.'" alt=""></li>';
									
									 	// echo $valeur;
										}
 									?>
 									 
								</ul>
							</div>
				
			</figure>
						
							</main>
							<main style="" class="col-lg-2 col-md-8 col-sm-8 m_bottom_30 m_xs_bottom_10">
 													<br />
													<?php $nombre = (rand(1,4));
													?>
													<img src="img/left-<?php echo $nombre;?>.jpg" />		
												</main>
			<?php } else { ?>
					<h3 class="fw_light second_font color_dark m_bottom_10 tt_uppercase "><?php echo $famille; ?></h3>	
			<?php } ?>			

	<main class="col-lg-3 col-md-8 col-sm-8 m_bottom_30 m_xs_bottom_10">
	</main>
	<main class="col-lg-9 col-md-8 col-sm-8 m_bottom_30 m_xs_bottom_10">
<div class="row t_xs_align_c">
								
								<figcaption>
			 
<p valign="justify" class="fw_light">
			<?php echo ($data_categ['description']); ?>
</p>
					</p>
				</figcaption>
									<?php 
		$id = $_GET['id'];					
		$select_count = "select count(*) as nb_famille from sous_famile where id_famile = $id";
		$res_count = mysql_query($select_count);
		$select_count = mysql_fetch_array($res_count);
		$nb_c = ($select_count['nb_famille']);
		
		if($nb_c <= 2)
			$nombre = 4 ;
		else
			$nombre = 4;	
		if($nb_c == 8)
				$nombre = 3;
		$sql = "select * from sous_famile where id_famile = '$id'";
		$res_fa = mysql_query($sql);
		
		$dir = 'img/categories/'.suppr_accents($categorie).'/familles/'.utf8_encode(suppr_accents($famille)).'/';
 
		while($data_fa = mysql_fetch_array($res_fa))
		{
			
			$linkimages = $dir.((($data_fa['libelle']))).'/';
			?>
								
								<div class="col-lg-<?php echo $nombre ?> col-md-<?php echo $nombre ?> col-sm-<?php echo $nombre ?> col-xs-<?php echo $nombre ?>">
									<div class="frame_container relative">
										<figure class="relative">
											<a href="product.php?id=<?php echo $data_fa['id']; ?>" class="d_block m_bottom_15">
												<img src="<?php echo $linkimages.$data_fa['image']; ?>" alt="">
											</a>
											<figcaption>
												<a href="product.php?id=<?php echo $data_fa['id']; ?>" class="second_font sc_hover"><?php echo (($data_fa['libelle'])); ?> </a><br />
											 
											</figcaption>
										
										</figure>
									</div>
								</div>
		<?php } ?> 
								 
								
								 
							</div>
							
							<?php 
							 
							if($nb_c <= 0){
								?>
							
							<br />
							
							<br />
													<div class="row t_xs_align_c">
								
									<?php 
									
									
		$id = $_GET['id_categ'];					
		$id_famile = $_GET['id'];					
		$select_count = "select count(*) as nb_famille from produit where id_categ = $id and id_famile = $id_famile";
		$res_count = mysql_query($select_count);
		$select_count = mysql_fetch_array($res_count);
		$nb_c = ($select_count['nb_famille']);
		
		if($nb_c <= 2)
			$nombre = 6 ;
		else
			$nombre = 4;	
		if($nb_c == 8)
				$nombre = 3;
		$sql = "select * from produit where id_categ = '$id' and id_famile = $id_famile";
		$res_fa = mysql_query($sql);
		
		 
		while($data_fa = mysql_fetch_array($res_fa))
		{
			
 			?>
								
								<div style="    padding-bottom: 10px;" class="col-lg-<?php echo $nombre ?> col-md-<?php echo $nombre ?> col-sm-<?php echo $nombre ?> col-xs-<?php echo $nombre ?>">
									<div  style="border: 1px solid #d7d7d7;" class="frame_container relative">
										<figure class="relative" >
											<a href="#" class="d_block m_bottom_15">
												<img src="img/produits/<?php echo $data_fa['photo']; ?>" alt="">
											</a>
											<figcaption style="margin: 10px;">
												<a href="#" class="second_font sc_hover"><strong><?php echo skip_accents(utf8_encode($data_fa['titre'])); ?></strong> </a><br />
												<a href="#" style="color:#ee7f01;" class="second_font sc_hover"><?php echo skip_accents(utf8_encode($data_fa['ref'])); ?> </a><br />
											 </figcaption>
										
										</figure>
									</div>
								</div>
		<?php } ?> 
								 
								
								 
							</div>
							<?php } ?>							
								 
		</main>
					</div>
					
				</div>
			</div>
			<?php include('pages/footer.php'); ?>
			</div>

		<!--back to top-->
		<button class="back_to_top animated button_type_6 grey state_2 d_block black_hover f_left vc_child tr_all"><i class="fa fa-angle-up d_inline_m"></i></button>

	 	
		<script src="plugins/jquery.appear.js"></script>
		<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
		<script src="plugins/jackbox/js/jackbox-packed.min.js"></script>
		<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="plugins/twitter/jquery.tweet.min.js"></script><script src="plugins/flickr.js"></script>
		<script src="plugins/afterresize.min.js"></script>
		<script src="plugins/jquery.elevateZoom-3.0.8.min.js"></script>
		<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
 		<script src="js/retina.min.js"></script>
		<script src="plugins/colorpicker/colorpicker.js"></script>
		 

		<!--theme initializer-->
		<script src="js/themeCore.js"></script>
		<script src="js/theme.js"></script>
		
	
	</body>
</html>