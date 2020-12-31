<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121364646-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121364646-1');
</script>
<?php $pathpage = $_SERVER['PHP_SELF']; // $path = /home/httpd/html/index.php
$page = basename ($pathpage);
$link = "";

if($page == "produits.php")
	 $link = "admin/edit-categ.php?id_edit=".$_GET['id_categ'];
 

if($page == "famille.php")
	 $link = "admin/edit-sous-categ.php?idSousCateg=".$_GET['id'];
if($page == "product.php")
	 $link = "admin/edit-sous-famile.php?idSousfamile=".$_GET['id'];
 
?>

				<header role="banner" class="w_inherit">
				 
				<?php 
				error_reporting(0);
				if($_SESSION["ath"] == "admin")
						{
						if($page == "produits.php" || $page == "famille.php" || $page == "product.php"){ ?>
				<div style="background:black;" class="header_top_part">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 fs_small  fw_light t_xs_align_c">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c">
								<!--shop nav-->
								<nav class="d_inline_b">
 									<ul class="hr_list">
										<li style="color:#fff;" class="m_right_3 m_bottom_3">
											<a style="color:#fff;" target="_blank" href="<?php echo $link; ?>">Modifier</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<?php } 
				}
				?>
				
				
				<div class="header_top_part bg_grey_light_2">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 fs_small  fw_light t_xs_align_c">
								<span class="scheme_color fw_medium">Email :</span> Commercial@morlink.ma /<span class="scheme_color fw_medium">  Tél : </span>+212 (0) 5 22 99 25 09
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c">
								<!--shop nav-->
								<nav class="d_inline_b">
 									<ul class="hr_list">
										<li class="m_right_3 m_bottom_3">
											<a target="_blank" href="https://www.facebook.com/MorlinkQuincaillerie/" class="button_type_4 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-facebook fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Facebook</span></a>
										</li>
										 
							<li class="m_right_3 m_bottom_3">
								<a target="_blank" href="https://www.instagram.com/morlink_officiel/" class="button_type_4 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-instagram fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Instagram</span></a>
							</li>
							<li class="m_right_3 m_bottom_3">
								<a href="https://www.linkedin.com/company/12592794/admin/" target="_blank" class="button_type_4 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-linkedin fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">LinkedIn</span></a>
							</li>
							 
							<li class="m_right_3 m_bottom_3">
								<a href="https://www.youtube.com/Morlink" target="_blank" class="button_type_4 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-youtube-play fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Youtube</span></a>
							</li>
							 
									 
										 
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="header_middle_part t_xs_align_c">
					<div class="container">
						<div class="d_table w_full d_xs_block">
							<div class="col-lg-4 col-md-4 col-sm-4 d_table_cell d_xs_block f_none v_align_m m_xs_bottom_15">
								<!--logo-->
								<a href="index.php" class="d_inline_b">
									<img src="images/logo.png" alt="">
								</a>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 d_table_cell d_xs_block f_none v_align_m">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 d_table_cell d_xs_block f_none v_align_m">
								
									<form action="search.php" method="post" class="b_default_layout">
										<ul>
											<li class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 m_bottom_15">
 													<input type="text" name="q" placeholder="Recherche de texte / Numéro d'article" id="cf_name" class="tr_all w_full fw_light">
													
												</div>
												 
											</li>
											 
										</ul>
									</form>	
									<!--searchform-->
								 
							</div>
						</div>
					</div>
				</div>
				<div class="header_bottom_part w_inherit">
					<div class="container">
						<div class="bg_color_dark bg_xs_transparent">
							<button id="mobile_menu_button" class="vc_child d_xs_block db_xs_centered d_none m_bottom_10 m_top_15 bg_lbrown color_white tr_all"><i class="fa fa-navicon d_inline_m"></i></button>
							<!--main menu-->
							<nav role="navigation" class="d_xs_none">
								<ul class="main_menu d_inline_b relative hr_list second_font fs_medium d_xs_block bg_xs_color_dark">
									 
									<!-- <li>
											<a href="index.php" class="tt_uppercase tr_delay color_light">Accueil </a>
											--sub menu (second level)
										</li>-->
										<li <?php if($page == 'Qui-sommes-nous.php') echo ' class="current"'; ?>>
											<a href="Qui-sommes-nous.php" class="tt_uppercase tr_delay color_light">Qui sommes-nous ? </a>
											<!--sub menu (second level)-->
											 
										</li>  
											<li <?php if($page == "produits.php" || $page == "famille.php" || $page == "product.php"){ echo ' class="current"';} ?>>
											<a href="#" class="tt_uppercase tr_delay color_light">Produits <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
											<ul class="sub_menu bg_grey_light tr_all">
												<?php
												error_reporting(0);
												include('pages/database.php');
												$sql_menu = 'SELECT * FROM `categorie` ORDER BY `id` ASC';
												$res = mysql_query($sql_menu);
												while($data = mysql_fetch_array($res))
												{
												?>
												<li><a class="tt_uppercase tr_delay" href="<?php echo ($data['categorie']); ?>-<?php echo $data['id']; ?>.html"><?php echo ($data['categorie']); ?></a></li>

 											 <?php } ?>
											</ul>
										</li>
										<li <?php if($page === 'catalogues.php' ||  $page == 'brochures.php' || $page == 'page-catalgues.php' ||  $page == 'depliant-morlink.php') echo ' class="current"'; ?>>
											<a href="catalogues.php" class="tt_uppercase tr_delay color_light">Catalogues </a>
											
										</li>
										<li <?php if($page == 'meuble.php' || $page == 'ambiance-batiment.php' ) echo ' class="current"'; ?>>
											<a href="#" class="tt_uppercase tr_delay color_light">Ambiance <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
											<ul class="sub_menu bg_grey_light tr_all">
												<li><a class="tt_uppercase tr_delay" href="meuble.php">Meuble</a></li>
												<li><a class="tt_uppercase tr_delay" href="ambiance-batiment.php">Bâtiment</a></li>
											</ul>
										</li>
										
										<li <?php if($page == 'Infos.php' || $page == 'videos.php' || $page == 'revuedepresse.php') echo ' class="current"'; ?>>
											<a href="#" class="tt_uppercase tr_delay color_light">MÉDIATHÈQUE <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
											<ul class="sub_menu bg_grey_light tr_all">
												<li><a class="tt_uppercase tr_delay color_light" href="Infos.php">Les Dernières Infos</a></li>
												<li><a class="tt_uppercase tr_delay color_light" href="videos.php">Vidéos</a></li>
												<li><a class="tt_uppercase tr_delay color_light" href="revuedepresse.php">Revue de presse</a></li>
											</ul>
										</li>
										<li <?php if($page == 'nouveaute.php') echo ' class="current"'; ?>><a href="nouveaute.php" class="tt_uppercase tr_delay color_light">NOUVEAUTÉS</a></li>

										<li <?php if($page == 'promotion.php') echo ' class="current"'; ?>><a href="promotion.php" class="tt_uppercase tr_delay color_light">PROMOTION</a></li>
										<li <?php if($page == 'contact.php') echo ' class="current"'; ?>><a href="contact.php" class="tt_uppercase tr_delay color_light">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
			