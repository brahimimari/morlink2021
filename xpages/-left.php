<?php 
$path = $_SERVER['PHP_SELF']; // $path = /home/httpd/html/index.php
$file = basename ($path);


?>
<style>
@media screen and (max-width: 50em) {
			
			aside{
					display:none !important;
			}
		}
</style>		
<aside class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30 p_top_4">
	<section class="m_bottom_30">
		<h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Categories</h5>
		<hr class="divider_bg m_bottom_23">
		<ul class="categories_list second_font w_break">
			<li class="relative"><a href="charniere-et-fermeture.php" class="fs_large_0 d_inline_b <?php if($file == 'charniere-et-fermeture.php') echo 'fw_bold scheme_color bg_grey_light_2';?>">CHARNIÈRES ET FERMETURE</a><button class="open_sub_categories fs_medium<?php if($file == 'charniere-et-fermeture.php'); echo ' active'?>"></button>
				<!--second level-->
				<ul class="d_none" <?php if($file == 'charniere-et-fermeture.php') echo 'style="display: block;"'; ?>>
					<li class="relative"><a href="Relevants.php" class="tr_delay d_inline_b">- Relevants</a></li>
					<li class="relative"><a href="Charnieres.php" class="tr_delay d_inline_b">- Charnières</a></li>
					<li class="relative"><a href="compas.php" class="tr_delay d_inline_b">- Compas</a></li>
 				</ul>
			</li>
			<li class="relative"><a href="Quincaillerie-de-Cuisine.php" class="fs_large_0 d_inline_b <?php if($file == 'Quincaillerie-de-Cuisine.php') echo 'fw_bold scheme_color bg_grey_light_2';?>">Quincaillerie de Cuisine</a><button class="open_sub_categories fs_medium<?php if($file == 'Quincaillerie-de-Cuisine.php'); echo ' active'?>"></button>
				<!--second level-->
				<ul class="d_none" <?php if($file == 'Quincaillerie-de-Cuisine.php') echo 'style="display: block;"'; ?>>
					<li class="relative"><a href="Systeme-de-rangement-pour-cuisine.php" class="tr_delay d_inline_b">- Système de rangement pour cuisine</a></li>
					<li class="relative"><a href="Accessoires-pour-cuisine.php" class="tr_delay d_inline_b">- Accessoires pour cuisine</a></li>
					<li class="relative"><a href="pied-plinthes-de-cuisine.php" class="tr_delay d_inline_b">- Pieds et plinthes de cuisine</a></li>
				</ul>
			</li>
			<li class="relative"><a href="Quincaillerie-dressing.php" class="fs_large_0 d_inline_b <?php if($file == 'Quincaillerie-dressing.php') echo 'fw_bold scheme_color bg_grey_light_2' ;?>">Quincaillerie de Dressing</a><button class="open_sub_categories fs_medium <?php if($file == 'Quincaillerie-dressing.php' || $file == 'Fermeture-pour-armoires-et-dressing.php' || $file == 'Accesoires-de-dressing.php' ) echo ' active'; ?>"></button>
				<ul class="d_none"  <?php if($file == 'Quincaillerie-dressing.php' || $file == 'Fermeture-pour-armoires-et-dressing.php' || $file == 'Accesoires-de-dressing.php' ) echo 'style="display: block;"'?>>
					<li class="relative"><a href="Fermeture-pour-armoires-et-dressing.php" class="tr_delay d_inline_b">- Fermeture pour armoires et dressing<?php //echo $file; ?></a></li>
					<li class="relative"><a href="Accesoires-de-dressing.php" class="tr_delay d_inline_b">- Accesoires de dressing</a></li>
				</ul>
			</li>
			<li class="relative"><a href="Titoires-et-colisses.php" class="fs_large_0 d_inline_b <?php if($file == 'Titoires-et-colisses.php') echo 'fw_bold scheme_color bg_grey_light_2';?>">Tiroirs et coulisses</a><button class="open_sub_categories fs_medium<?php if($file == 'Titoires-et-colisses.php'); echo ' active'?>"></button>
				<!--second level-->
				<ul class="d_none" <?php if($file == 'Titoires-et-colisses.php') echo 'style="display: block;"'; ?>>
					<li class="relative"><a href="Titoires-de-cotes.php" class="tr_delay d_inline_b">- Titoires de côtés</a></li>
					<li class="relative"><a href="Titoires-a-friens.php" class="tr_delay d_inline_b">- Titoires à friens</a></li>
					<li class="relative"><a href="Rangement-pour-tiroirs.php" class="tr_delay d_inline_b">- Rangement pour tiroirs</a></li>
					<li class="relative"><a href="Coulisses-de-tiroirs.php" class="tr_delay d_inline_b">- Coulisses de tiroirs</a></li>
				</ul>
			</li>
			<li class="relative"><a href="systeme-dasemblage.php" class="fs_large_0 d_inline_b <?php if($file == 'systeme-dasemblage.php') echo 'fw_bold scheme_color bg_grey_light_2';?>">Système d'assemblage</a><button class="open_sub_categories fs_medium<?php if($file == 'systeme-dasemblage.php'); echo ' active'?>"></button>
				<!--second level-->
				<ul class="d_none" <?php if($file == 'systeme-dasemblage.php') echo 'style="display: block;"'; ?>>
					<li class="relative"><a href="Ferrures-assemblage-pour-meuble.php" class="tr_delay d_inline_b">- Ferrures d'assemblage pour meuble</a></li>
					<li class="relative"><a href="Visserie.php" class="tr_delay d_inline_b">- Visserie</a></li>
					<li class="relative"><a href="Taquets-et-chevilles.php" class="tr_delay d_inline_b">- Taquets et chevilles</a></li>
					<li class="relative"><a href="Console.php" class="tr_delay d_inline_b">- Console</a></li>
				</ul>
			</li>
			<li class="relative"><a href="Eclairage.php" class="fs_large_0 d_inline_b <?php if($file == 'Eclairage.php') echo 'fw_bold scheme_color bg_grey_light_2';?>">Eclairage</a></li>
			<li class="relative"><a href="Poignees.php" class="fs_large_0 d_inline_b <?php if($file == 'Poignees.php') echo 'fw_bold scheme_color bg_grey_light_2';?>">Poignées</a><button class="open_sub_categories fs_medium<?php if($file == 'Poignees.php'); echo ' active'?>"></button>
				<!--second level-->
				<ul class="d_none" <?php if($file == 'Poignees.php') echo 'style="display: block;"'; ?>>
					<li class="relative"><a href="Tunettes.php" class="tr_delay d_inline_b">- Tunettes</a></li>
					<li class="relative"><a href="Encastres.php" class="tr_delay d_inline_b">- Encastrés</a></li>
					<li class="relative"><a href="Profiles.php" class="tr_delay d_inline_b">- Profilés</a></li>
					<li class="relative"><a href="boutons.php" class="tr_delay d_inline_b">-Boutons</a></li>
					<li class="relative"><a href="acroliques.php" class="tr_delay d_inline_b">- Acroliques </a></li>
				</ul>
			</li>
			<li class="relative"><a href="Quincaillerie-de-batiment.php" class="fs_large_0 d_inline_b <?php if($file == 'Quincaillerie-de-batiment.php') echo 'fw_bold scheme_color bg_grey_light_2';?>">Quincaillerie de bâtiment</a><button class="open_sub_categories fs_medium<?php if($file == 'Quincaillerie-de-batiment.php'); echo ' active'?>"></button>
				<!--second level-->
				<ul class="d_none" <?php if($file == 'Quincaillerie-de-batiment.php') echo 'style="display: block;"'; ?>>
					<li class="relative"><a href="Poignees-de-portes.php" class="tr_delay d_inline_b">Poignées de portes</a></li>
					<li class="relative"><a href="Serrures-canons.php" class="tr_delay d_inline_b">Serrures et canons : Serrures et cylindres de fermeture </a></li>
					<li class="relative"><a href="Paumelles-charnieres.php" class="tr_delay d_inline_b">Paumelles et charnières </a></li>
					<li class="relative"><a href="Fermes-portes.php" class="tr_delay d_inline_b">Fermes portes </a></li>
					<li class="relative"><a href="systeme-porte-colissants.php" class="tr_delay d_inline_b">Système portes coulissantes </a></li>
					<li class="relative"><a href="Ferrures-de-cabines-sanitaires.php" class="tr_delay d_inline_b">Ferrures de cabines sanitaires </a></li>
 				</ul>
			</li>
		</ul>
	</section>
	<!--compare products widget-->
	 
 </aside>
