<?php 
$pathpage = $_SERVER['PHP_SELF']; // $path = /home/httpd/html/index.php
$page = basename ($pathpage);
?>
<header role="banner" class="w_inherit">
				 
				<hr class="m_sm_bottom_10" style="margin-bottom: 7px !important;">
				<div class="header_bottom_part bg_white type_2 t_sm_align_c w_inherit">
					<div class="container">
						<div class="d_table w_full d_xs_block">
							<div class="col-lg-2 col-md-2 d_sm_block w_sm_full d_table_cell d_xs_block f_none v_align_m m_xs_bottom_15">
								<!--logo-->
								<a href="index.php" class="d_inline_b m_sm_top_5 m_sm_bottom_5 m_xs_bottom_0">
									<img src="images/logo.png" alt="">
								</a>
							</div>
							<div class="col-lg-9 col-md-9 d_sm_block w_sm_full d_table_cell d_xs_block f_none v_align_m">
								<button id="mobile_menu_button" class="vc_child d_xs_block db_xs_centered d_none m_bottom_10 m_top_15 bg_lbrown color_white tr_all"><i class="fa fa-navicon d_inline_m"></i></button>
								<!--main menu-->
								<nav role="navigation" class="d_xs_none t_sm_align_l d_sm_inline_b">
									<ul class="main_menu relative type_2 hr_list second_font fs_medium">
										<li <?php if($page == 'index.php') echo ' class="current"'; ?>>
											<a href="index.php" class="tt_uppercase tr_delay">Accueil </a>
											<!--sub menu (second level)-->
										</li>
										<li <?php if($page == 'Qui-sommes-nous.php') echo ' class="current"'; ?>>
											<a href="Qui-sommes-nous.php" class="tt_uppercase tr_delay">Qui sommes-nous ? </a>
											<!--sub menu (second level)-->
											 
										</li>  
											<li <?php if($page != 'nouveaute.php' AND $page != 'contact.php' AND $page != 'Qui-sommes-nous.php' AND $page != 'index.php' AND $page != 'Infos.php' AND $page != 'catalogues.php' AND $page != 'videos.php' AND $page != 'revuedepresse.php') echo ' class="current"'; ?>>
											<a href="#" class="tt_uppercase tr_delay">Produits <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
											<ul class="sub_menu bg_grey_light tr_all">
												<?php
												error_reporting(0);
												include('pages/database.php');
												$sql_menu = 'SELECT * FROM `categorie` ORDER BY `id` ASC';
												$res = mysql_query($sql_menu);
												while($data = mysql_fetch_array($res))
												{
												?>
												<li><a class="tt_uppercase tr_delay" href="categories-<?php echo $data['id']; ?>.html"><?php echo ($data['categorie']); ?></a></li>

 											 <?php } ?>
											</ul>
										</li>
										<li <?php if($page == 'catalogues.php') echo ' class="current"'; ?>>
											<a href="catalogues.php" class="tt_uppercase tr_delay">Catalogues </a>
											
										</li>
										<li <?php if($page == 'meuble.php' || $page == 'batiment.php' ) echo ' class="current"'; ?>>
											<a href="#" class="tt_uppercase tr_delay">Ambiance <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
											<ul class="sub_menu bg_grey_light tr_all">
												<li><a class="tt_uppercase tr_delay" href="meuble.php">Meuble</a></li>
												<li><a class="tt_uppercase tr_delay" href="Quincaillerie-de-batiment.php">Bâtiment</a></li>
											</ul>
										</li>
										
										<li <?php if($page == 'Infos.php' || $page == 'videos.php' || $page == 'revuedepresse.php') echo ' class="current"'; ?>>
											<a href="#" class="tt_uppercase tr_delay">MÉDIATHÈQUE <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
											<ul class="sub_menu bg_grey_light tr_all">
												<li><a class="tt_uppercase tr_delay" href="Infos.php">Les Dernières Infos</a></li>
												<li><a class="tt_uppercase tr_delay" href="videos.php">Vidéos</a></li>
												<li><a class="tt_uppercase tr_delay" href="revuedepresse.php">Revue de presse</a></li>
											</ul>
										</li>
										
										<li <?php if($page == 'nouveaute.php') echo ' class="current"'; ?>><a href="nouveaute.php" class="tt_uppercase tr_delay">NOUVEAUTÉS</a></li>
										<li <?php if($page == 'contact.php') echo ' class="current"'; ?>><a href="contact.php" class="tt_uppercase tr_delay">Contact</a></li>
									</ul>
								</nav>
							</div>
							 
						</div>
					</div>
				</div >
					<!--<hr class="m_bottom_27 m_sm_bottom_10"> -->
				</header>
			
			